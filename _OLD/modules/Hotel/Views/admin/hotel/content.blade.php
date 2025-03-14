<div class="panel">
    <div class="panel-title"><strong>{{__("Hotel Content")}}</strong></div>
    <div class="panel-body">
        <div class="form-group">
            <label>{{__("Title")}}</label>
            <input type="text" value="{{$translation->title}}" placeholder="{{__("Name of the hotel")}}" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label class="control-label">{{__("Content")}}</label>
            <div class="">
                <textarea name="content" class="d-none has-ckeditor" cols="30" rows="10">{{$translation->content}}</textarea>
            </div>
        </div>
        @if(is_default_lang())
            <div class="form-group">
                <label class="control-label">{{__("Youtube Video")}}</label>
                <input type="text" name="video" class="form-control" value="{{$row->video}}" placeholder="{{__("Youtube link video")}}">
            </div>
        @endif
        @if(is_default_lang())
            <div class="form-group">
                <label class="control-label">{{__("Banner Image")}}</label>
                <div class="form-group-image">
                    {!! \Modules\Media\Helpers\FileHelper::fieldUpload('banner_image_id',$row->banner_image_id) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">{{__("Gallery")}}</label>
                {!! \Modules\Media\Helpers\FileHelper::fieldGalleryUpload('gallery',$row->gallery) !!}
            </div>
        @endif
    </div>
</div>

<div class="panel">
    <div class="panel-title"><strong>{{__("Hotel Policy")}}</strong></div>
    <div class="panel-body">
        @if(is_default_lang())
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>{{__("Hotel rating standard")}}</label>
                        <input type="number" value="{{$row->star_rate}}" placeholder="{{__("Eg: 5")}}" name="star_rate" class="form-control">
                    </div>
                </div>
            </div>
        @endif
        <div class="form-group-item">
            <label class="control-label">{{__('Policy')}}</label>
            <div class="g-items-header">
                <div class="row">
                    <div class="col-md-5">{{__("Title")}}</div>
                    <div class="col-md-5">{{__('Content')}}</div>
                    <div class="col-md-1"></div>
                </div>
            </div>
            <div class="g-items">
                @if(!empty($translation->policy))
                    @php if(!is_array($translation->policy)) $translation->policy = json_decode($translation->faqs); @endphp
                    @foreach($translation->policy as $key=>$item)
                        <div class="item" data-number="{{$key}}">
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="text" name="policy[{{$key}}][title]" class="form-control" value="{{$item['title']}}" placeholder="{{__('Eg: What kind of foowear is most suitable ?')}}">
                                </div>
                                <div class="col-md-6">
                                    <textarea name="policy[{{$key}}][content]" class="form-control" placeholder="...">{{$item['content']}}</textarea>
                                </div>
                                <div class="col-md-1">
                                    <span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @else
                    <div class="item" data-number="0">
                        <div class="row">
                            <div class="col-md-5">
                                <input type="text" name="policy[0][title]" class="form-control" value="Hướng dẫn nhận phòng" placeholder="{{__('Eg: What kind of foowear is most suitable ?')}}">
                            </div>
                            <div class="col-md-6">
                                <textarea name="policy[0][content]" class="form-control" placeholder="...">Quý khách vui lòng xuất trình Hộ chiếu/CMND và Phiếu nhận phòng của HBG khi nhận phòng tại khách sạn. (Khách sạn có thể sẽ yêu cầu Quý khách số thẻ tín dụng hoặc tiền đặt cọc cho các dịch vụ phát sinh trong thời gian lưu trú của Quý khách)</textarea>
                            </div>
                            <div class="col-md-1">
                                <span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="item" data-number="1">
                        <div class="row">
                            <div class="col-md-5">
                                <input type="text" name="policy[1][title]" class="form-control" value="Chính sách phụ thu trẻ em" placeholder="{{__('Eg: What kind of foowear is most suitable ?')}}">
                            </div>
                            <div class="col-md-6">
                                <textarea name="policy[1][content]" class="form-control" placeholder="..."></textarea>
                            </div>
                            <div class="col-md-1">
                                <span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="item" data-number="2">
                        <div class="row">
                            <div class="col-md-5">
                                <input type="text" name="policy[2][title]" class="form-control" value="Chính sách trả phòng muộn" placeholder="{{__('Eg: What kind of foowear is most suitable ?')}}">
                            </div>
                            <div class="col-md-6">
                                <textarea name="policy[2][content]" class="form-control" placeholder="...">Yêu cầu trả phòng muộn sẽ được đáp ứng tùy theo điều kiện sẵn có của chỗ nghỉ.
Trả phòng từ 12:00 đến 18:00: phụ thu 50% tiền phòng
Trả phòng sau 18:00: phụ thu 100% tiền phòng</textarea>
                            </div>
                            <div class="col-md-1">
                                <span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="text-right">
                <span class="btn btn-info btn-sm btn-add-item"><i class="icon ion-ios-add-circle-outline"></i> {{__('Add item')}}</span>
            </div>
            <div class="g-more hide">
                <div class="item" data-number="__number__">
                    <div class="row">
                        <div class="col-md-5">
                            <input type="text" __name__="policy[__number__][title]" class="form-control" placeholder="{{__('Eg: What kind of foowear is most suitable ?')}}">
                        </div>
                        <div class="col-md-6">
                            <textarea __name__="policy[__number__][content]" class="form-control" placeholder=""></textarea>
                        </div>
                        <div class="col-md-1">
                            <span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
