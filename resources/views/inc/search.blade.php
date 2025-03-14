<style type="text/css">
	.autocomplete{ position: relative;float: left;width: 100%; }
	.dbo_contents{ position: absolute;float: left;width: 450px;background: transparent;z-index: 999;left: -20px;top: 33px;height: auto; /*border: 1px solid #E2E8F0;*/ }
	.contentautodrop{ width: 100%;background: #fff;box-shadow: 0px 8px 8px rgb(0 0 0 / 10%);border-radius: 8px;margin-top: 15px;border: 1px solid #E2E8F0; }
	.dbo_contents ul{ list-style: none;margin-top: 10px; }
	.dbo_contents ul li{ padding: 10px;margin-left: -20px;margin-right: 15px;cursor: pointer; }
	.dbo_contents ul li:hover{ background: #dedede;border-radius: 5px; }
</style>
<script type="text/javascript">
	function fnSearch(){
		/*var nextDay=new Date();
		alert(nextDay);
		return;*/
		$("#room_over").css("display", "block");
		 var v=$('#kw').val();
		 var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
		 $.ajax({
			 url:"{!! route('search.auto.drop') !!}",
			 method:"POST",
			 data:{id:v, _token:_token},
			 success:function(data){
				 $("#dbo_contents").fadeIn();
				 $("#dbo_contents").html(data);
			 }
		 });
	 }
	 
	 function KeyPressSearchHome(e) {
		 var keynum = 0;
		 if (window.event)
			 keynum = e.keyCode;
		 else if (e.which)
			 keynum = e.which;
		 if (keynum == 10 || keynum == 13) {
			 try {
				 var tukhoa = $("#kw").val();
				 if ((tukhoa == "") || (tukhoa == "Nhập từ khóa tìm kiếm")) {
					 $("#kw").focus();
					   return false;
				 } else {
					 document.getElementById("frmsearch").submit();
					 return false;
				 }
			 } catch (ex) {
				 alert(ex.message);
			 }
		 } else {
			 return true;
		 }
	 };
	 
	 function fnValSelect(v){
		 $('#kw').val(v);
		 $('#kw').focus();
		 $("#dbo_contents").css("display", "none");
	 }
</script>
	{{ csrf_field() }}
<form id="frmsearch" name="frmsearch" action="{!! route('search') !!}" method="get">
	<div class="jsc12 wid1300">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="jsc14">
					<div class="jsc13">
						<label for="kw">Địa điểm</label>
					</div>
					<div class="jsc15">
						<div class="autocomplete">
							<?php
							$kw='';$strcheckin='';$strcheckout='';
							if(isset($_GET['kw'])){
								$kw=$_GET['kw'];
							}
							if(isset($_GET['t-start'])){
								$checkin=explode("-", $_GET['t-start']);
								$strcheckin='<div class="t-check-in"><div class="t-dates t-date-check-in"><img alt="" src="https://hoabinhbooking.test/icon/icons-calendar.jpg" style="width:15px;margin-bottom: 3px;"><label class="t-date-info-title"></label><span class="t-day-check-in"> '.$checkin[0].'</span><span class="t-month-check-in"> Tháng '.$checkin[1].' </span><span class="t-year-check-in"> '.$checkin[2].'</span></div><input type="hidden" class="t-input-check-in" value="'.$checkin[0].'-'.$checkin[1].'-'.$checkin[2].'" name="t-start"></div>';
							}
							if(isset($_GET['t-end'])){
								$checkout=explode("-", $_GET['t-end']);
								$strcheckout='<div class="t-check-out"><div class="t-dates t-date-check-out"><img alt="" src="https://hoabinhbooking.test/icon/icons-calendar.jpg" style="width:15px;margin-bottom: 3px;"><label class="t-date-info-title"></label><span class="t-day-check-out"> '.$checkin[0].'</span><span class="t-month-check-out"> Tháng '.$checkin[1].' </span><span class="t-year-check-out"> '.$checkin[2].'</span></div><input type="hidden" class="t-input-check-out" value="'.$checkin[0].'-'.$checkin[1].'-'.$checkin[2].'" name="t-end"></div>';
							}
							?>
							<input type="text" onclick="fnSearch()" onkeydown="fnSearch()" onkeypress="return KeyPressSearchHome(event);" autocomplete="off" id="kw" name="kw" value="<?php echo $kw; ?>" placeholder="Thành phố, khách sạn, điểm đến" />
							<div class="dbo_contents" id="dbo_contents">
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="jsc13">
				Ngày đến - Ngày về
				</div>
				<div class="t-datepicker">
				  <div class="t-check-in"></div>
				  <div class="t-check-out"></div>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="jsc13">
				Số phòng, số khách
				</div>
				<div class="form-content" style="padding: 5px 0 10px 0px;">
					<input type="hidden" name="phong" id="hdphong" value="1">
					<input type="hidden" name="adult" id="hdadult" value="2">
					<input type="hidden" name="child" id="hdchild" value="0">
					<div class="sophongsokhach" id="sophongsokhach">
					<div onclick="fnShowHidePhong()" id="wapsophong"><span id="phong" class="phong">1</span> phòng, <span id="nguoilon" class="nguoilon">2</span> người lớn, <span id="treem" class="treem">0</span> trẻ em</div>
					<div class="spskpopup">
					<table>
					<tbody><tr>
					<td style="text-align:left;">Phòng</td>
					<td class="tdd1"><input type="button" onclick="fnSubphong()" id="subphong" name="subphong" class="btnsplus" value="-"></td>
					<td class="tdd1"><span class="phong">1</span></td>
					<td class="tdd1"><input type="button" onclick="fnPlusphong()" id="plusphong" name="plusphong" class="btnsplus" value="+"></td>
					</tr>
					<tr>
					<td style="text-align:left;">Người lớn</td>
					<td class="tdd1"><input type="button" onclick="fnSubadult()" id="subadult" name="subadult" class="btnsplus" value="-"></td>
					<td class="tdd1"><span class="nguoilon">2</span></td>
					<td class="tdd1"><input onclick="fnPlusadult()" type="button" id="plusadult" name="plusadult" class="btnsplus" value="+"></td>
					</tr>
					<tr>
					<td style="text-align:left;">Trẻ em</td>
					<td class="tdd1"><input onclick="fnSubchildren()" type="button" id="subchildren" name="subchildren" class="btnsplus" value="-"></td>
					<td class="tdd1"><span class="treem">0</span></td>
					<td class="tdd1"><input onclick="fnPluschildren()" type="button" id="pluschildren" name="pluschildren" class="btnsplus" value="+"></td>
					</tr>
					</tbody></table>
					</div>
					</div>
				</div>
			</div>
			<div class="col-md-1 col-sm-1 col-xs-12">
				<div class="row mgsub30">
					<div class="g-button-submit">
						<button class="btn btn-primary btn-search" type="submit" style="margin-top: 20px;background-color:forestgreen;border-color:forestgreen;">
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
