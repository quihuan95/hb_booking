
<style type="text/css">
    .spskpopup table{ width:100%;height:auto; }
    .spskpopup td.tdd1{ text-align:center;width:50px; }
</style>
<!--old -- hotel.search-->
<form action="{{ route("hotel.index.search") }}" class="form bravo_form" method="get">
    <div class="g-field-search">
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <i class="field-icon fa icofont-map"></i>
                    <div class="form-content">
                        <label>Điểm đến</label>
                        <?php
                        $location_name = "";
                        $list_json = [];
                        $location_id = 0;
						
                        
						if(!empty(request()->slug)){
							 $location = \Modules\Location\Models\Location::where('slug', request()->slug)->first();
							 $location_id = $location->id;	
						}
					
						$location = Request::query('location_id') ?? $location_id; 
                        
                        $traverse = function ($locations, $prefix = '') use (&$traverse, &$list_json , &$location_name) {
						$locations = $locations->sortBy("slug");	
                            foreach ($locations as $location) {
                                $translate = $location->translateOrOrigin(app()->getLocale());
                                if (Request::query('location_id') == $location->id){
                                    $location_name = $translate->name;
                                }
                                $list_json[] = [
                                    'id' => $location->id,
                                    'title' => $prefix . ' ' . $translate->name,
                                ];
                                $traverse($location->children, $prefix . '-');
                            }
                        };
                        $traverse($list_location);
                        ?>
                        <div class="smart-search">
                            <input type="text" name="searchtext"  autocomplete="off" class="smart-search-location parent_text form-control" {{ ( empty(setting_item("hotel_location_search_style")) or setting_item("hotel_location_search_style") == "normal" ) ? "readonly" : ""  }} placeholder="{{__("Where are you going?")}}" value="{{ $location_name }}" data-onLoad="{{__("Loading...")}}"
                                   data-default="{{ json_encode($list_json) }}">
                            <input type="hidden" class="child_id" name="location_id" value="{{Request::query('location_id')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="padding-left: 0px;padding-right: 0px;">
                <div class="t-datepicker" style="border-left: solid 1px #5191FA;border-right: solid 1px #5191FA;padding-top: 5px;margin: 5px 0;">
                  <div class="t-check-in"></div>
                  <div class="t-check-out"></div>
                </div>
            </div>
            
            <div class="col-md-3">
            <div class="form-content" style="padding: 5px 0 10px 0px;">
                <label>Số phòng, số khách</label>
                <input type="hidden" name="phong" id="hdphong" value="1"/>
                <input type="hidden" name="adult" id="hdadult" value="2"/>
                <input type="hidden" name="child" id="hdchild" value="0"/>
                
                <div class="sophongsokhach" id="sophongsokhach">
                <div id="wapsophong"><span id="phong" class="phong">1</span> phòng, <span id="nguoilon" class="nguoilon">2</span> người lớn, <span id="treem" class="treem">0</span> trẻ em</div>
                <div class="spskpopup">
                <table>
                <tr>
                <td style="text-align:left;">Phòng</td>
                <td class="tdd1"><input type="button" id="subphong" name="subphong" class="btnsplus" value="-" /></td>
                <td class="tdd1"><span class="phong">1</span></td>
                <td class="tdd1"><input type="button" id="plusphong" name="plusphong" class="btnsplus" value="+" /></td>
                </tr>
                <tr>
                <td style="text-align:left;">Người lớn</td>
                <td class="tdd1"><input type="button" id="subadult" name="subadult" class="btnsplus" value="-" /></td>
                <td class="tdd1"><span class="nguoilon">2</span></td>
                <td class="tdd1"><input type="button" id="plusadult" name="plusadult" class="btnsplus" value="+" /></td>
                </tr>
                <tr>
                <td style="text-align:left;">Trẻ em</td>
                <td class="tdd1"><input type="button" id="subchildren" name="subchildren" class="btnsplus" value="-" /></td>
                <td class="tdd1"><span class="treem">0</span></td>
                <td class="tdd1"><input type="button" id="pluschildren" name="pluschildren" class="btnsplus" value="+" /></td>
                </tr>
                </table>
                
                </div>
                </div>
            </div>
            </div>


        </div>
    </div>
    <div class="g-button-submit">
        <button class="btn btn-primary btn-search" type="submit">{{__("Search")}}</button>
    </div>
</form>
