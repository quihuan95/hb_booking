
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
               <div class="smart-search">
                  <input type="text" name="searchtext" autocomplete="off" class="smart-search-location parent_text form-control" placeholder="Nhập điểm du lịch hoặc tên khách sạn" value="" data-onload="Xin chờ..." data-default="[{&quot;id&quot;:9,&quot;title&quot;:&quot; C\u00e1t B\u00e0 - H\u1ea3i Ph\u00f2ng&quot;},{&quot;id&quot;:10,&quot;title&quot;:&quot; H\u1ea1 Long - Qu\u1ea3ng Ninh&quot;},{&quot;id&quot;:11,&quot;title&quot;:&quot; H\u00e0 N\u1ed9i&quot;},{&quot;id&quot;:12,&quot;title&quot;:&quot; Mai Ch\u00e2u - H\u00f2a B\u00ecnh&quot;},{&quot;id&quot;:13,&quot;title&quot;:&quot; M\u1ed9c Ch\u00e2u - S\u01a1n La&quot;},{&quot;id&quot;:14,&quot;title&quot;:&quot; Ninh B\u00ecnh&quot;},{&quot;id&quot;:15,&quot;title&quot;:&quot; Sapa - L\u00e0o Cai&quot;},{&quot;id&quot;:16,&quot;title&quot;:&quot; V\u0129nh Ph\u00fac&quot;}]">
                  <input type="hidden" class="child_id" name="location_id" value="">
                  <div class="bravo-autocomplete">
                     <div class="list-item">
                        <div class="item" data-id="9" data-text=" Cát Bà - Hải Phòng"> <i class="icofont-location-pin"></i>  Cát Bà - Hải Phòng </div>
                        <div class="item" data-id="10" data-text=" Hạ Long - Quảng Ninh"> <i class="icofont-location-pin"></i>  Hạ Long - Quảng Ninh </div>
                        <div class="item" data-id="11" data-text=" Hà Nội"> <i class="icofont-location-pin"></i>  Hà Nội </div>
                        <div class="item" data-id="12" data-text=" Mai Châu - Hòa Bình"> <i class="icofont-location-pin"></i>  Mai Châu - Hòa Bình </div>
                        <div class="item" data-id="13" data-text=" Mộc Châu - Sơn La"> <i class="icofont-location-pin"></i>  Mộc Châu - Sơn La </div>
                        <div class="item" data-id="14" data-text=" Ninh Bình"> <i class="icofont-location-pin"></i>  Ninh Bình </div>
                        <div class="item" data-id="15" data-text=" Sapa - Lào Cai"> <i class="icofont-location-pin"></i>  Sapa - Lào Cai </div>
                        <div class="item" data-id="16" data-text=" Vĩnh Phúc"> <i class="icofont-location-pin"></i>  Vĩnh Phúc </div>
                     </div>
                     <div class="message">Xin chờ...</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-4" style="padding-left: 0px;padding-right: 0px;">
         <div class="t-datepicker" style="border-left: solid 1px #5191FA;border-right: solid 1px #5191FA;padding-top: 5px;margin: 5px 0;">
            <div class="t-check-in">
               <div class="t-dates t-date-check-in"><img alt="" src="https://hoabinhbooking.com/public/icon/icons-calendar.jpg" style="width:15px;margin-bottom: 3px;"><label class="t-date-info-title"></label><span class="t-day-check-in"> 11</span><span class="t-month-check-in"> Tháng 09 </span><span class="t-year-check-in"> 2021</span></div>
               <input type="hidden" class="t-input-check-in" value="11-09-2021" name="t-start">
            </div>
            <div class="t-check-out">
               <div class="t-dates t-date-check-out"><img alt="" src="https://hoabinhbooking.com/public/icon/icons-calendar.jpg" style="width:15px;margin-bottom: 3px;"><label class="t-date-info-title"></label><span class="t-day-check-out"> 12</span><span class="t-month-check-out"> Tháng 09 </span><span class="t-year-check-out"> 2021</span></div>
               <input type="hidden" class="t-input-check-out" value="12-09-2021" name="t-end">
            </div>
         </div>
      </div>
      <div class="col-md-3">
         <div class="form-content" style="padding: 5px 0 10px 0px;">
            <label>Số phòng, số khách</label>
            <input type="hidden" name="phong" id="hdphong" value="1">
            <input type="hidden" name="adult" id="hdadult" value="2">
            <input type="hidden" name="child" id="hdchild" value="0">
            <div class="sophongsokhach" id="sophongsokhach">
               <div id="wapsophong"><span id="phong" class="phong">1</span> phòng, <span id="nguoilon" class="nguoilon">2</span> người lớn, <span id="treem" class="treem">0</span> trẻ em</div>
               <div class="spskpopup">
                  <table>
                     <tbody>
                        <tr>
                           <td style="text-align:left;">Phòng</td>
                           <td class="tdd1"><input type="button" id="subphong" name="subphong" class="btnsplus" value="-"></td>
                           <td class="tdd1"><span class="phong">1</span></td>
                           <td class="tdd1"><input type="button" id="plusphong" name="plusphong" class="btnsplus" value="+"></td>
                        </tr>
                        <tr>
                           <td style="text-align:left;">Người lớn</td>
                           <td class="tdd1"><input type="button" id="subadult" name="subadult" class="btnsplus" value="-"></td>
                           <td class="tdd1"><span class="nguoilon">2</span></td>
                           <td class="tdd1"><input type="button" id="plusadult" name="plusadult" class="btnsplus" value="+"></td>
                        </tr>
                        <tr>
                           <td style="text-align:left;">Trẻ em</td>
                           <td class="tdd1"><input type="button" id="subchildren" name="subchildren" class="btnsplus" value="-"></td>
                           <td class="tdd1"><span class="treem">0</span></td>
                           <td class="tdd1"><input type="button" id="pluschildren" name="pluschildren" class="btnsplus" value="+"></td>
                        </tr>
                     </tbody>
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
