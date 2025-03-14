@extends('dashboard')
@section('admin_content')
<div class="main-content">
	<div class="container-fluid">
	   <div class="dashboard-page">
		  <h4 class="welcome-title text-uppercase">Welcome Lê!</h4>
	   </div>
	   <br>
	   <div class="row">
		  <div class="col-sm-6 col-md-3">
			 <div class="dashboard-report-card card purple">
				<div class="card-content">
				   <span class="card-title">Revenue</span>
				   <span class="card-amount">0</span>
				   <span class="card-desc">Total revenue</span>
				</div>
				<div class="card-media">
				   <i class="icon ion-ios-cart"></i>
				</div>
			 </div>
		  </div>
		  <div class="col-sm-6 col-md-3">
			 <div class="dashboard-report-card card pink">
				<div class="card-content">
				   <span class="card-title">Earning</span>
				   <span class="card-amount">0</span>
				   <span class="card-desc">Total Earning</span>
				</div>
				<div class="card-media">
				   <i class="icon ion-ios-gift"></i>
				</div>
			 </div>
		  </div>
		  <div class="col-sm-6 col-md-3">
			 <div class="dashboard-report-card card info">
				<div class="card-content">
				   <span class="card-title">Bookings</span>
				   <span class="card-amount">4</span>
				   <span class="card-desc">Total bookings</span>
				</div>
				<div class="card-media">
				   <i class="icon ion-ios-pricetags"></i>
				</div>
			 </div>
		  </div>
		  <div class="col-sm-6 col-md-3">
			 <div class="dashboard-report-card card success">
				<div class="card-content">
				   <span class="card-title">Services</span>
				   <span class="card-amount">306</span>
				   <span class="card-desc">Total bookable services</span>
				</div>
				<div class="card-media">
				   <i class="icon ion-ios-flash"></i>
				</div>
			 </div>
		  </div>
	   </div>
	   <div class="row">
		  <div class="col-md-12 col-lg-6 mb-3">
			 <div class="panel">
				<div class="panel-title d-flex justify-content-between align-items-center">
				   <strong>Earning statistics</strong>
				   <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;">
					  <i class="fa fa-calendar"></i>&nbsp;
					  <span></span> <i class="fa fa-caret-down"></i>
				   </div>
				</div>
				<div class="panel-body">
				   <canvas id="earning_chart"></canvas>
				   <script>
					  var earning_chart_data = {"labels":["06\/06\/2022","07\/06\/2022","08\/06\/2022","09\/06\/2022","10\/06\/2022","11\/06\/2022"],"datasets":[{"label":"Total Revenue","data":[0,0,0,0,0,0],"backgroundColor":"#8892d6","stack":"group-total"},{"label":"Total Earning","data":[0,0,0,0,0,0],"backgroundColor":"#F06292","stack":"group-extra"}]};
				   </script>
				</div>
			 </div>
		  </div>
		  <div class="col-md-12 col-lg-6 ">
			 <div class="panel">
				<div class="panel-title d-flex justify-content-between">
				   <strong>Recent Bookings</strong>
				   <a href="https://hoabinhbooking.test/admin/module/report/booking" class="btn-link">Xem thêm
				   <i class="icon ion-ios-arrow-forward"></i></a>
				</div>
				<div class="panel-body">
				   <div class="table-responsive">
					  <table class="table table-hover">
						 <thead>
							<tr>
							   <th width="60px">#</th>
							   <th>Item</th>
							   <th width="100px">Total</th>
							   <th width="100px">Status</th>
							   <th width="100px">Created At</th>
							</tr>
						 </thead>
						 <tbody>
							<tr>
							   <td>#5</td>
							   <td>
								  <a href="https://hoabinhbooking.test/vi/hotel/alba-wellness-valley-by-fusion" target="_blank">Alba Wellness Valley By Fusion</a>
							   </td>
							   <td>0</td>
							   <td>
								  <span class="badge badge-">1</span>
							   </td>
							   <td>18/06/2021 10:49</td>
							</tr>
							<tr>
							   <td>#4</td>
							   <td>
								  [Deleted]
							   </td>
							   <td>0</td>
							   <td>
								  <span class="badge badge-danger">Cancelled</span>
							   </td>
							   <td>23/09/2020 14:54</td>
							</tr>
							<tr>
							   <td>#3</td>
							   <td>
								  [Deleted]
							   </td>
							   <td>0</td>
							   <td>
								  <span class="badge badge-">1</span>
							   </td>
							   <td>23/09/2020 14:52</td>
							</tr>
							<tr>
							   <td>#2</td>
							   <td>
								  [Deleted]
							   </td>
							   <td>0</td>
							   <td>
								  <span class="badge badge-">1</span>
							   </td>
							   <td>23/09/2020 14:46</td>
							</tr>
							<tr>
							   <td>#1</td>
							   <td>
								  [Deleted]
							   </td>
							   <td>0</td>
							   <td>
								  <span class="badge badge-">1</span>
							   </td>
							   <td>23/09/2020 14:39</td>
							</tr>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	   <br>
	   <div class="row">
	   </div>
	</div>
	<footer class="main-footer">
	   <div class="container-fluid">
		  <div class="row">
			 <div class="col-md-6 copy-right" >
				2022 &copy; Booking by <a href="#" target="_blank">Booking CMS</a>
			 </div>
			 <div class="col-md-6">
				<div class="text-md-right footer-links d-none d-sm-block">
				   <a href="#" target="_blank">About Us</a>
				   <a href="#" target="_blank">Contact Us</a>
				</div>
			 </div>
		  </div>
	   </div>
	</footer>
 </div>
@endsection