<div id="hotel-rooms" class="hotel_rooms_form" v-cloak="">
    <h3 class="heading-section">Hạng phòng tại {{$translation->title}}</h3>
	@php

	@endphp
    <div class="hotel_list_rooms" :class="{'loading':onLoadAvailability}">
        <div class="row">
            <div class="col-md-12">
                <div class="room-item" v-for="room in rooms">
                    <div class="row">
                        <div class="col-xs-12 col-md-3">
                            <div class="image" @click="showGallery($event,room.id,room.gallery)">
                                <img :src="room.image" alt="">
                                <div class="count-gallery" v-if="typeof room.gallery !='undefined' && room.gallery && room.gallery.length">
                                    <i class="fa fa-picture-o"></i>
                                    @{{room.gallery.length}}
                                </div>
                            </div>
                            <div class="modal" :id="'modal_room_'+room.id" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">@{{ room.title }}</h5>
                                            <span class="c-pointer" data-dismiss="modal" aria-label="Close">
                                                <i class="input-icon field-icon fa">
                                                    <img src="{{asset('images/ico_close.svg')}}" alt="close">
                                                </i>
                                            </span>
                                        </div>
                                        <div class="modal-body">
                                            <div class="fotorama" data-nav="thumbs" data-width="100%" data-auto="false" data-allowfullscreen="true">
                                                <a v-for="g in room.gallery" :href="g.large"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-9">
                            <div class="hotel-info">
	                            <div class="row">
	                            	 <div class="col-md-8">
	                            	<h3 class="room-name">@{{room.title}}</h3>
                                    <p>Giá: <span style="color:red;">@{{room.price1}}</span></p>
                                <ul class="room-meta">
                                    <li v-if="room.size_html">
                                        <div class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Diện tích">
                                            <i class="input-icon field-icon icofont-ruler-compass-alt"></i>
                                            <span v-html="room.size_html"></span>
                                        </div>
                                    </li>
                                    <li v-if="room.view_html">
                                        <div class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="View">
                                            <i class="input-icon field-icon icofont-beach"></i>
                                            <span v-html="room.view_html"></span>
                                           
              
                                        </div>
                                    </li>
                                    <li v-if="room.beds_html">
                                        <div class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Giường">
                                            <i class="input-icon field-icon icofont-hotel"></i>
                                            <span v-html="room.bed_type"></span>
                                           
                                        </div>
                                    </li>
                                    <li v-if="room.adults_html">
                                        <div class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Người lớn">
                                            <i class="input-icon field-icon icofont-users-alt-4"></i>
                                            <span v-html="room.adults_html"></span>
                                            
                                        </div>
                                    </li>
                                    <li v-if="room.children_html">
                                        <div class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Trẻ em">
                                            <i class="input-icon field-icon fa-child fa"></i>
                                            <span v-html="room.children_html"></span>
                                            
                                        </div>
                                    </li>
                                </ul>
	                            </div>
                                <div class="col-md-4" style="margin-top: 40px;">
                                    <!--<button type="button" data-toggle="modal" data-target="#booking" class="submit btn btn-primary">Đặt phòng ngay <i v-show="onSubmit" class="fa fa-spinner fa-spin"></i></button> -->
                                    <!--<button type="button" :value="room.id" onclick="showBookRoom(this)" class="submit btn btn-primary">Đặt phòng ngay <i v-show="onSubmit" class="fa fa-spinner fa-spin"></i></button>-->
                                    <span v-html="room.booking_buttom"></span>
                                </div>
	                            </div><!-- .row -->
	                           
                            </div>
                        </div>
                        <div class="col-md-3" v-if="room.number">
                            <div class="col-price">
                                <div class="text-center">
                                    <span class="price" v-html="room.price_html"></span>
                                </div>
                                <select v-if="room.number" v-model="room.number_selected" class="custom-select">
                                    <option value="0">0</option>
                                    <option v-for="i in (1,room.number)" :value="i">@{{i}}&nbsp;&nbsp; (@{{formatMoney(i*room.price)}})</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="hotel_room_book_status" v-if="total_price">
        <div class="row">
            <div class="col-md-6">
                <div class="extra-price-wrap d-flex justify-content-between">
                    <div class="flex-grow-1">
                        <label>
                            {{__("Total Room")}}:
                        </label>
                    </div>
                    <div class="flex-shrink-0">
                        @{{total_rooms}}
                    </div>
                </div>
                <div class="extra-price-wrap d-flex justify-content-between" v-for="(type,index) in buyer_fees">
                    <div class="flex-grow-1">
                        <label>
                            @{{type.type_name}}
                            <span class="render" v-if="type.price_type">(@{{type.price_type}})</span>
                            <i class="icofont-info-circle" v-if="type.desc" data-toggle="tooltip" data-placement="top" :title="type.type_desc"></i>
                        </label>
                    </div>
                    <div class="flex-shrink-0">@{{formatMoney(type.price)}}
                    </div>
                </div>
                <div class="extra-price-wrap d-flex justify-content-between is_mobile">
                    <div class="flex-grow-1">
                        <label>
                            {{__("Total Price")}}:
                        </label>
                    </div>
                    <div class="total-room-price">@{{total_price_html}}</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="control-book">
                    <div class="total-room-price">
                        <span> {{__("Total Price")}}:</span> @{{total_price_html}}
                    </div>
                    <button type="button" class="btn btn-primary" @click="doSubmit($event)" :class="{'disabled':onSubmit}" name="submit">
                        <span >{{__("Book Now")}}</span>
                        <i v-show="onSubmit" class="fa fa-spinner fa-spin"></i>
                    </button>
                </div>

            </div>
        </div>
    </div>-->
    <div class="end_room_sticky"></div>
    <div class="alert alert-warning" v-if="!firstLoad && !rooms.length">
        {{__("No room available with your selected date. Please change your search critical")}}
    </div>
    
    
<div id="booking" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Yêu cầu báo giá tại {{$translation->title}} </h4>
      </div>
            
     
     <form id="booking-form" action="{{ route('hotel.booking') }}" method="POST" enctype="multipart/form-data">
	 		<input type="hidden" name= "hotel_id" value="{{$translation->origin_id}}" />
	 		<input type="hidden" name= "room_id" value="{{$translation->origin_id}}" />
      <div class="modal-body">
  
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
			<label for="">Họ và tên*</label>
			<input type="" class="form-control" name="name" placeholder="" data-rule-required="true" required>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
			<label for="">Số điện thoại*</label>
			<input type="" class="form-control" name="phone" placeholder="" required>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
			<label for="">Email*</label>
			<input type="" class="form-control" name="email" placeholder="" required>
			</div>
		</div>
		<!--<div class="col-md-6">
			<div class="form-group">
			<label for="">Check-in</label>
			<input type="" class="form-control datepicker" name="checkin" placeholder="" data-date-format="dd/mm/yyyy">
			<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i>
			</div>
	
		</div>
		<div class="col-md-6">
			<div class="form-group">
			<label for="">Check-out</label>
			<input type="" class="form-control datepicker" name="checkout" placeholder=""data-date-format="dd/mm/yyyy">
			</div>
		</div>-->
		<div class="col-md-12">
			<div class="form-search-rooms">
        <div class="form-search-row">
            
                <div class="form-group form-date-field form-date-search " @click="openStartDate" data-format="{{get_moment_date_format()}}">
                    <i class="fa fa-angle-down arrow"></i>
                    <input type="text" class="start_date" name="checkinout" ref="start_date" style="height: 1px; visibility: hidden">
                    <div class="date-wrapper form-content" >
                        <label class="form-label">{{__("Check In - Out")}}</label>
                        <div class="render check-in-render" v-html="start_date_html"></div>
                    </div>
                </div>
            
           
        </div>
    </div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
			<label for="">Số lượng phòng</label>
			<input type="number" class="form-control" name="qtyroom" placeholder="" data-rule-required="true" data-msg-required="Required">
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
			<label for="">Yêu cầu đặc biệt</label>
			<textarea class="form-control" name="request" placeholder="" data-rule-required="true" data-msg-required="Required"></textarea>
			</div>
		</div>
	</div><!-- .row -->
    
     
     
      </div>
      <div class="modal-footer">
	     <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      </div>
       </form>
    </div>
    

  </div>
</div>
</div>

