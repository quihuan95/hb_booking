<?php
namespace Modules\Vendor\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\AdminController;
use Modules\Location\Models\Location;
use Modules\Vendor\Models\VendorRequests;

class RequestController extends AdminController
{
    /**
     * @var VendorPayout
     */
    protected $vendor;

    public function __construct()
    {
        parent::__construct();
        $this->setActiveMenu('admin/module/vendor');
        $this->vendor = VendorRequests::class;
    }

    public function index(Request $request)
    {
	  
       // $this->checkPermission('vendor_payout_view');

        $query = $this->vendor::query();
        $query->orderBy('id', 'desc');

        if($request->query('s'))
        {
            $query->where('id',$request->query('s'));
        }
        if($request->query('vendor_id'))
        {
            $query->where('vendor_id',$request->query('vendor_id'));
        }

        $data = [
            'rows'               => $query->paginate(20),
            'page_title'=> 'Quản lý yêu cầu',
            'breadcrumbs'        => [
                [
                    'name'  => "Yêu cầu",
                    'class' => 'active'
                ],
            ],
            'all_statuses'=> ''
        ];
        return view('Vendor::admin.request.index', $data);
    }

    public function bulkEdit(Request $request)
    {
        $this->checkPermission('vendor_payout_manage');

        $ids = $request->input('ids');
        $action = $request->input('action');
        if (empty($ids) or !is_array($ids)) {
            $this->sendError(__('No items selected!'));
        }
        if (empty($action)) {
            $this->sendError(__('Please select an action!'));
        }

      //  $all_statuses = $this->vendor::getAllStatuses();

        switch ($action){
            case "delete":
                foreach ($ids as $id) {
                    $query = $this->vendor::find($id);
                    if(!empty($query)){                 
                        $query->delete();
                    }
                }
                $this->sendSuccess(__('Deleted success!'));
                break;
            default:
                // Change status
/*
                if(!array_key_exists($action,$all_statuses)){
                    abort(404);
                }
*/
                foreach ($ids as $id) {
                    $request = $this->vendor::find($id);
                    if($request){
                        $request->status = $action;
                        if(\request()->input('pay_date'))
                        {
                            $request->pay_date = $request->input('pay_date');
                        }
                        if(\request()->input('note_to_vendor'))
                        {
                            $request->note_to_vendor = $request->input('note_to_vendor');
                        }

                        $request->save();

                        if($action == 'rejected'){
                          
                        }else{
                           
                        }
                    }
                }
                $this->sendSuccess( __('Update success!'));
                break;
        }
    }
}
