<style type="text/css">
	.autocomplete{ position: relative; }
	.autocomplete-items{ position: absolute;background: #fff;padding: 15px;left: -20px;top: 33px;z-index: 99;width: 450px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px;box-shadow: 0px 5px 5px 0px #ccc; }
	.autocomplete-items div{ padding-bottom: 10px;cursor: pointer; }
</style>

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
							$kw='';
							if(isset($_GET['kw'])){
								$kw=$_GET['kw'];
							}
							?>
							<input type="text" onkeypress="return KeyPressSearchHome(event);" autocomplete="off" id="kw" name="kw" value="<?php echo $kw; ?>" placeholder="Thành phố, khách sạn, điểm đến" />
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
<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
	  var a, b, i, val = this.value;
	  /*close any already open lists of autocompleted values*/
	  closeAllLists();
	  if (!val) { return false;}
	  currentFocus = -1;
	  /*create a DIV element that will contain the items (values):*/
	  
	  a = document.createElement("DIV");
	  a.setAttribute("id", this.id + "autocomplete-list");
	  a.setAttribute("class", "autocomplete-items");
	  /*append the DIV element as a child of the autocomplete container:*/
	  this.parentNode.appendChild(a);
	  /*for each item in the array...*/
	  for (i = 0; i < arr.length; i++) {
		/*check if the item starts with the same letters as the text field value:*/
		if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
		  /*create a DIV element for each matching element:*/
		  b = document.createElement("DIV");
		  /*make the matching letters bold:*/
		  b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
		  b.innerHTML += arr[i].substr(val.length);
		  /*insert a input field that will hold the current array item's value:*/
		  b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
		  /*execute a function when someone clicks on the item value (DIV element):*/
		  b.addEventListener("click", function(e) {
			  /*insert the value for the autocomplete text field:*/
			  inp.value = this.getElementsByTagName("input")[0].value;
			  /*close the list of autocompleted values,
			  (or any other open lists of autocompleted values:*/
			  closeAllLists();
		  });
		  a.appendChild(b);
		}
	  }
  });
  
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
	  var x = document.getElementById(this.id + "autocomplete-list");
	  if (x) x = x.getElementsByTagName("div");
	  if (e.keyCode == 40) {
		/*If the arrow DOWN key is pressed,
		increase the currentFocus variable:*/
		currentFocus++;
		/*and and make the current item more visible:*/
		addActive(x);
	  } else if (e.keyCode == 38) { //up
		/*If the arrow UP key is pressed,
		decrease the currentFocus variable:*/
		currentFocus--;
		/*and and make the current item more visible:*/
		addActive(x);
	  }else if (e.keyCode == 10 || e.keyCode == 13) { //up
		  try {
			  var tukhoa = $("#kw").val();
			  if (tukhoa == "" || tukhoa == "Nhập từ khóa tìm kiếm") {
				  $("#kw").focus();
				  return false;
			  }else{
				  document.getElementById("frmsearch").submit();
				  return false;
			  }
		  }catch (ex){
			  alert(ex.message);
		  }
		}
	   /*else if (e.keyCode == 13) {
		   e.preventDefault();
		   if (currentFocus > -1) {
			 if (x) x[currentFocus].click();
		   }
		 }*/
	  
  });
  function addActive(x) {
	/*a function to classify an item as "active":*/
	if (!x) return false;
	/*start by removing the "active" class on all items:*/
	removeActive(x);
	if (currentFocus >= x.length) currentFocus = 0;
	if (currentFocus < 0) currentFocus = (x.length - 1);
	/*add class "autocomplete-active":*/
	x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
	/*a function to remove the "active" class from all autocomplete items:*/
	for (var i = 0; i < x.length; i++) {
	  x[i].classList.remove("autocomplete-active");
	}
  }
  function closeAllLists(elmnt) {
	/*close all autocomplete lists in the document,
	except the one passed as an argument:*/
	var x = document.getElementsByClassName("autocomplete-items");
	for (var i = 0; i < x.length; i++) {
	  if (elmnt != x[i] && elmnt != inp) {
		x[i].parentNode.removeChild(x[i]);
	  }
	}
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
	  //closeAllLists(e.target);
	  $("#kw").focus();
  });
  
}

/*An array containing all the country names in the world:*/
var countries = ["Khách sạn miền bắc","Cát Bà - Hải Phòng","Hạ Long - Quảng Ninh","Mai Châu - Hòa Bình","Mộc Châu - Sơn La","Ninh Bình","Sapa - Lào Cai","Vĩnh Phúc","Khách sạn miền Trung","Bình Thuận","Đà Lạt","Đà Nẵng","Hội An - Quảng Nam","Huế","Nha Trang","Ninh Thuận","Phú Yên","Quy Nhơn - Bình Định","Nghệ An","Hà Tĩnh","Quảng Bình","Khánh Hòa","Khách sạn miền Nam","Cần Thơ","Côn Đảo","Hồ Chí Minh","Phú Quốc","Vũng Tàu","Kiên Giang","Phan Thiết","Chuỗi khách sạn","Chuỗi Flamingo","Chuỗi FLC","Chuỗi Fusions","Chuỗi Meliá","Chuỗi Mường Thanh","Chuỗi Victoria","Chuỗi Vinpearl","Điện Biên","Thái Nguyên","Hòa Bình","Bắc Kạn","Quảng Nam","Hải Phòng","Thanh Hóa","Thành Phố Hà Nội","Hà Nội","Thành Phố Hồ Chí Minh","Khách Sạn"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("kw"), countries);
</script>