<div class="g-header">
    <div class="left">
        @if($row->star_rate)
            <div class="star-rate">
                @for ($star = 1 ;$star <= $row->star_rate ; $star++)
                    <i class="fa fa-star"></i>
                @endfor
            </div>
        @endif
        <h2>{{$translation->title}}</h2>

        @if($translation->address)
            <p class="address"><i class="fa fa-map-marker"></i>
                {{$translation->address}}
            </p>
        @endif
    </div>
    <div class="right">
	     @php

	     @endphp
	     <div id="hotel_price">
        @if(!empty($bravo_hotel_room_calendars))
        <?php
        if(isset($_GET['t-start'])){
            $formDate=$_GET['t-start'];
            $toDate=$_GET['t-end'];
            $price=\Modules\Media\Helpers\FileHelper::checkRoomFrontend($row->id,$formDate,$toDate);
            if($price!=''){
                echo '<span class="text-small">từ</span> '.number_format($price).'<sup>đ</sup><span class="text-small">/ đêm</span>';
            }else{ 
                echo '<span style="color:red;">Hết phòng</span>'; 
            }
        }
        ?>
        @else
        <?php if($row->sale_price!=null){
                 echo '<span class="oldprice"> '.number_format($row->price).'</span><br/>
                <span class="text-small">từ</span> '.number_format($row->sale_price).'<sup>đ</sup><span class="text-small">/ đêm</span>';
             }else{
                 echo '<span class="text-small">từ</span> '.number_format($row->price).'<sup>đ</sup><span class="text-small">/ đêm</span>';
            }
            ?>
        @endif

             

         </div>
        @if($row->getReviewEnable())
            @if($review_score)
                <div class="review-score">
                    <div class="head">
                        <div class="left">
                            <span class="head-rating">{{$review_score['score_text']}}</span>
                            <span class="text-rating">{{__("from :number reviews",['number'=>$review_score['total_review']])}}</span>
                        </div>
                        <div class="score">
                            {{$review_score['score_total']}}<span>/5</span>
                        </div>
                    </div>
                    <div class="foot">
                        {{__(":number% of guests recommend",['number'=>$row->recommend_percent])}}
                    </div>
                </div>
            @endif
        @endif
    </div>
</div>
@if($row->getGallery())
    <div class="g-gallery">
        <div class="fotorama" data-width="100%" data-thumbwidth="135" data-thumbheight="135" data-thumbmargin="15" data-nav="thumbs" data-allowfullscreen="true">
            @foreach($row->getGallery() as $key=>$item)
                @if($row->is_featured=-1)
                <?php 
                    $_re_large=str_replace('uploads/public/uploads/img','public/uploads/img',$item['large']);
                    $_re_thumb=str_replace('uploads/public/uploads/img','public/uploads/img',$item['thumb']);
                ?>
                <a href="<?php echo $_re_large;?>" data-thumb="<?php echo $_re_thumb;?>"></a>
                @else
                    <a href="{{$item['large']}}" data-thumb="{{$item['thumb']}}"></a>
                @endif
            @endforeach
        </div>
        <div class="social">
            <div class="social-share">
                <span class="social-icon">
                    <i class="icofont-share"></i>
                </span>
                <ul class="share-wrapper">
                    <li>
                        <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u={{$row->getDetailUrl()}}&amp;title={{$translation->title}}" target="_blank" rel="noopener" original-title="{{__("Facebook")}}">
                            <i class="fa fa-facebook fa-lg"></i>
                        </a>
                    </li>
                    <li>
                        <a class="twitter" href="https://twitter.com/share?url={{$row->getDetailUrl()}}&amp;title={{$translation->title}}" target="_blank" rel="noopener" original-title="{{__("Twitter")}}">
                            <i class="fa fa-twitter fa-lg"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="service-wishlist {{$row->isWishList()}}" data-id="{{$row->id}}" data-type="{{$row->type}}">
                <i class="fa fa-heart-o"></i>
            </div>
        </div>
    </div>
@endif
@if($translation->content)
    <div class="g-overview">
        <h3>Thông tin về {{$translation->title}}</h3>
        <div class="description">
            <?php echo $translation->content ?>
        </div>
    </div>
@endif
@include('Hotel::frontend.layouts.details.hotel-rooms')
<div class="g-all-attribute is_mobile">
    @include('Hotel::frontend.layouts.details.hotel-attributes')
</div>
<div class="g-rules">
    <h3>Chính sách của {{$translation->title}}</h3>
    <div class="description">
        <div class="row">
            <div class="col-lg-4">
                <div class="key">{{__("Check In")}}</div>
            </div>
            <div class="col-lg-8">
                <div class="value">	{{$row->check_in_time}} </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="key">{{__("Check Out")}}</div>
            </div>
            <div class="col-lg-8">
                <div class="value">	{{$row->check_out_time}} </div>
            </div>
        </div>
        @if($translation->policy)
            <div class="row">
                <div class="col-lg-4">
                    <div class="key">{{__("Hotel Policies")}}</div>
                </div>
                <div class="col-lg-8">
                    @foreach($translation->policy as $key => $item)
                        <div class="item @if($key > 1) d-none @endif">
                            <div class="strong">{{$item['title']}}</div>
                            <div class="context">{!! $item['content'] !!}</div>
                        </div>
                    @endforeach
                    @if( count($translation->policy) > 2)
                        <div class="btn-show-all">
                            <span class="text">{{__("Show All")}}</span>
                            <i class="fa fa-caret-down"></i>
                        </div>
                    @endif
                </div>
            </div>
        @endif

        @if($row->id>=57)
            <div class="row">
                <div class="col-lg-4">
                    <div class="key">Chính sách giá</div>
                </div>
                <div class="col-lg-8">
                    <div class="value">Giá áp dụng giai đoạn thấp điểm trong tuần</div>
                </div>
            </div>
        @endif
    </div>
</div>
<div class="bravo-hr"></div>
<!--
@if($row->map_lat && $row->map_lng)
    <div class="g-location">
        <div class="location-title">
            <h3>{{__("Location")}}</h3>
            @if($translation->address)
                <div class="address">
                    <i class="icofont-location-arrow"></i>
                    {{$translation->address}}
                </div>
            @endif
        </div>

        <div class="location-map">
            <div id="map_content"></div>
        </div>
    </div>
@endif
-->
