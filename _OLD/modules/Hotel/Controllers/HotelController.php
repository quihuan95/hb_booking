<?php
namespace Modules\Hotel\Controllers;

use App\Http\Controllers\Controller;
use Modules\Hotel\Models\Hotel;
use Modules\Hotel\Models\HotelRoomBooking;
use Illuminate\Http\Request;
use Modules\Location\Models\Location;
use Modules\Review\Models\Review;
use Modules\Core\Models\Attributes;
use Modules\Booking\Models\Booking;
use Illuminate\Support\Facades\Redirect;
use DB;

class HotelController extends Controller
{
    protected $bookingClass;
    protected $hotelClass;
    protected $locationClass;
    public function __construct()
    {
	    $this->bookingClass =Booking::class;
        $this->hotelClass = Hotel::class;
        $this->locationClass = Location::class;
    }

    public function index(Request $request)
    {
        $is_ajax = $request->query('_ajax');
        $model_hotel = $this->hotelClass::select("bravo_hotels.*");
        $model_hotel->where("bravo_hotels.status", "publish");
        if(!empty($request->slug)){
            $location = $this->locationClass::where('slug', $request->slug)->first();
            $location_id = $location->id;
		}else{
		    $location_id = $request->query('location_id');
		}

        
        if (!empty($location_id)) {
            $location = $this->locationClass::where('id', $location_id)->where("status","publish")->first();
            if(!empty($location)){
                $model_hotel->join('bravo_locations', function ($join) use ($location) {
                    $join->on('bravo_locations.id', '=', 'bravo_hotels.location_id')
                        ->where('bravo_locations._lft', '>=', $location->_lft)
                        ->where('bravo_locations._rgt', '<=', $location->_rgt);
                });
            }
        }

        if (!empty($price_range = $request->query('price_range'))) {
            $pri_from = explode(";", $price_range)[0];
            $pri_to = explode(";", $price_range)[1];
            $raw_sql_min_max = "(  bravo_hotels.price >= ? ) 
                            AND (  bravo_hotels.price <= ? )";
            $model_hotel->WhereRaw($raw_sql_min_max,[$pri_from,$pri_to]);
        }

        if (!empty($star_rate = $request->query('star_rate'))) {
            $model_hotel->WhereIn('star_rate',$star_rate);
        }

        $terms = $request->query('terms');
        if (is_array($terms) && !empty($terms)) {
            $model_hotel->join('bravo_hotel_term as tt', 'tt.target_id', "bravo_hotels.id")->whereIn('tt.term_id', $terms);
        }

        
        /*if(!empty($request->searchtext)){
            $search=$request->searchtext;
            $model_hotel->where('bravo_hotels.title', 'LIKE', '%'.$search.'%');
            
        }*/

        $model_hotel->orderBy("id", "desc");
        $model_hotel->groupBy("bravo_hotels.id");

        $list = $model_hotel->with(['location','hasWishList','translations','termsByAttributeInListingPage'])->paginate(9);
        $markers = [];
        if (!empty($list)) {
            foreach ($list as $row) {
                $markers[] = [
                    "id"      => $row->id,
                    "title"   => $row->title,
                    "lat"     => (float)$row->map_lat,
                    "lng"     => (float)$row->map_lng,
                    "gallery" => $row->getGallery(true),
                    "infobox" => view('Hotel::frontend.layouts.search.loop-grid', ['row' => $row,'disable_lazyload'=>1,'wrap_class'=>'infobox-item'])->render(),
                    'marker'  => url('images/icons/png/pin.png'),
                ];
            }
        }



        $limit_location = 15;
        if( empty(setting_item("hotel_location_search_style")) or setting_item("hotel_location_search_style") == "normal" ){
            $limit_location = 1000;
        }
        $data = [
            'rows'               => $list,
            'list_location'      => $this->locationClass::where('status', 'publish')->limit($limit_location)->with(['translations'])->get()->toTree(),
            'hotel_min_max_price' => $this->hotelClass::getMinMaxPrice(),
            'markers'            => $markers,
            "blank"              => 1,
            "seo_meta"           => $this->hotelClass::getSeoMetaForPageList()
        ];
        $layout = setting_item("hotel_layout_search", 'normal');
        if ($request->query('_layout')) {
            $layout = $request->query('_layout');
        }
        if ($is_ajax) {
            $this->sendSuccess([
                'html'    => view('Hotel::frontend.layouts.search-map.list-item', $data)->render(),
                "markers" => $data['markers']
            ]);
        }
        $data['attributes'] = Attributes::where('service', 'hotel')->with(['terms','translations'])->get();

        if ($layout == "map") {
            $data['body_class'] = 'has-search-map';
            $data['html_class'] = 'full-page';
            return view('Hotel::frontend.search-map', $data);
        }

        

        return view('Hotel::frontend.search', $data);
    }

    public function indexsearch(Request $request)
    {
        
        /*if(!empty($request->location_id)){
            return Redirect::to('https://hoabinhbooking.com/vi/hotel?location_id='.$request->location_id.'&t-start='.$request->t-start.'&t-end='.$request->t-end);
            die();
        }*/
        $data=array();
        if(!empty($request->searchtext)){
            $data=DB::table('bravo_hotels')->where('title','like','%'.$request->searchtext.'%')->where("status", "publish")->get();
        }
        

        /*echo '<pre>';
        print_r($toDate);
        echo '</pre>';
        die();*/

        return view('Hotel::frontend.search2',compact('data'));
    }

    public function detail(Request $request, $slug)
    {
        $row = $this->hotelClass::where('slug', $slug)->where("status", "publish")->with(['location','translations','hasWishList'])->first();
        
        if (empty($row)) {
            return redirect('/');
        }
        
        $bravo_hotel_room_calendars=DB::table('bravo_hotel_room_calendars')->where('target_id',$row->id)->first();

        $translation = $row->translateOrOrigin(app()->getLocale());

        $hotel_related = [];
        $location_id = $row->location_id;
        if (!empty($location_id)) {
            $hotel_related = $this->hotelClass::where('location_id', $location_id)->where("status", "publish")->take(4)->whereNotIn('id', [$row->id])->with(['location','translations','hasWishList'])->get();
        }
        $review_list = Review::where('object_id', $row->id)->where('object_model', 'hotel')->where("status", "approved")->orderBy("id", "desc")->with('author')->paginate(setting_item('hotel_review_number_per_page', 5));
        $data = [
            'row'          => $row,
            'translation'       => $translation,
            'hotel_related' => $hotel_related,
            'booking_data' => $row->getBookingData(),
            'review_list'  => $review_list,
            'seo_meta'  => $row->getSeoMetaWithTranslation(app()->getLocale(),$translation),
            'body_class'=>'is_single',
            'bravo_hotel_room_calendars'=>$bravo_hotel_room_calendars
        ];
        $this->setActiveMenu($row);

        return view('Hotel::frontend.detail', $data);
    }

    public function checkAvailability(){
        $hotel_id = \request('hotel_id');

        if(!\request()->input('firstLoad')) {
            request()->validate([
                'hotel_id'   => 'required',
                'start_date' => 'required:date_format:Y-m-d',
                'end_date'   => 'required:date_format:Y-m-d',
                'adults'     => 'required',
            ]);

            if(strtotime(\request('end_date')) - strtotime(\request('start_date')) < DAY_IN_SECONDS){
                $this->sendError(__("Dates are not valid"));
            }
            if(strtotime(\request('end_date')) - strtotime(\request('start_date')) > 30*DAY_IN_SECONDS){
                $this->sendError(__("Maximum day for booking is 30"));
            }
        }

        $hotel = $this->hotelClass::find($hotel_id);
        if(empty($hotel_id) or empty($hotel)){
            $this->sendError(__("Hotel not found"));
        }

        $rooms = $hotel->getRoomsAvailability(request()->input());

        $this->sendSuccess([
            'rooms'=>$rooms
        ]);
    }

    public function booking(Request $request)
    {

	    $checkinout = $request->input('checkinout');
	    $start_date = explode(' - ', $checkinout)[0];
	    $end_date = explode(' - ', $checkinout)[1];
	    $start_date = new \DateTime($start_date);
	    $end_date = new \DateTime($end_date);

	    $now = new \DateTime(date('m/d/Y H:i:s', time()));


	    $booking = new $this->bookingClass();
	    $booking->status = 1;
        $booking->object_id = $request->input('hotel_id');
        $booking->object_model = 'hotel';
        $booking->vendor_id = $request->input('hotel_id');
        $booking->customer_id = 1;
        $booking->total = '';
        $booking->total_guests = '';
        $booking->start_date = $start_date->format('Y-m-d H:i:s');
        $booking->end_date = $end_date->format('Y-m-d H:i:s');
        $booking->buyer_fees = $list_fees ?? '';
        $booking->total_before_fees = $total_before_fees ?? '';
        $booking->email = $request->input('email');
        $booking->first_name = $request->input('name');
        $booking->phone = $request->input('phone');
        $booking->customer_notes = $request->input('request');
       // $booking->created_at = $now->format('Y-m-d H:i:s');
	    $check = $booking->save();

	    if ($check) {

            $booking->addMeta('qtyroom', $request->input('qtyroom'));

            // Add Room Booking

                        $hotelRoomBooking = new HotelRoomBooking();
                        $hotelRoomBooking->fillByAttr([
                            'room_id','parent_id','start_date','end_date','number','booking_id','price'
                        ],[
                            'room_id'=>$request->input('room_id'),
                            'parent_id'=> 0,
                            'start_date'=>$start_date->format('Y-m-d H:i:s'),
                            'end_date'=>$end_date->format('Y-m-d H:i:s'),
                            'number'=>$request->input('qtyroom'),
                            'booking_id'=>$booking->id,
                            'price'=> ''
                        ]);

                        $hotelRoomBooking->save();


            return redirect()->back()->with('success', 'Đặt phòng khách sạn thành công');

        }


           return redirect()->back()->with('error', 'Đặt phòng khách sạn thất bại');


    }
}
