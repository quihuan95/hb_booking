<!DOCTYPE html>
<html lang="vi">
   <head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <!-- CSRF Token -->
	  <meta name="csrf-token" content="MWWLFDdJhtA3UpiGpJxbCZXUC63fxpiNtX7U6Bl3">
	  <title>Dashboard - Booking Hotel</title>
	  <base href="https://hoabinhbooking.test/" />
	  <link rel="icon" type="image/png" href="https://hoabinhbooking.test/images/favicon.png" />
	  <meta name="robots" content="noindex, nofollow" />
	  <!-- Fonts -->
	  <link rel="dns-prefetch" href="//fonts.gstatic.com">
	  <!-- Styles -->
	  <link href="{{ asset('libs/select2/css/select2.min.css') }}" rel="stylesheet">
	  <link href="{{ asset('libs/select2/css/flag-icon.min.css') }}" rel="stylesheet">
	  <link href="{{ asset('libs/select2/css/vendors.css') }}" rel="stylesheet">
	  <link href="{{ asset('libs/select2/css/app.css') }}" rel="stylesheet">
	  <script src="https://cdn.tiny.cloud/1/g1jrvm47rliyaujmd13mc6s7q9zfec2mmwdh4zpcbyka773v/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	  <style type="text/css">
		  .panel-body input[type='text'],.panel-body input[type='number'],.panel-body select,.panel-body textarea,.panel-body  hr{ margin-bottom: 10px; }
		  .nav-tabs { border-bottom: 1px solid #ddd; }
		  .nav-tabs>li { float: left;margin-bottom: -1px; }
		  .nav>li { position: relative;display: block; }
		  .nav-tabs>li>a.active, .nav-tabs>li>a.active:focus, .nav-tabs>li>a.active:hover {
			  color: #555;
			  cursor: default;
			  background-color: #fff;
			  border: 1px solid #ddd;
			  border-bottom-color: transparent;
		  }
		  .nav-tabs>li>a {
		  margin-right: 2px;
		  line-height: 1.42857143;
		  border: 1px solid transparent;
		  border-radius: 4px 4px 0 0; }
		  .nav>li>a {
			  position: relative;
			  display: block;
			  padding: 10px 15px;
		  }
		  
	  </style>
   </head>
   <body class="  site_enable_multi_lang ">
	  <div id="app">
		 <div class="main-header d-flex">
			<div class="header-logo flex-shrink-0">
			   <h3 class="logo-text"><a href="https://hoabinhbooking.test/admin">Booking CMS<span></span></a></h3>
			</div>
			<div class="header-widgets d-flex flex-grow-1">
			   <div class="widgets-left d-flex flex-grow-1 align-items-center">
				  <div class="header-widget">
					 <span class="btn-toggle-admin-menu btn btn-sm btn-link"><i class="icon ion-ios-menu"></i></span>
				  </div>
				  <div class="header-widget search-widget">
					 <a href="https://hoabinhbooking.test" class="btn btn-link" target="_blank"><i class="fa fa-eye"></i> Home
					 </a>
				  </div>
			   </div>
			   <div class="widgets-right flex-shrink-0 d-flex">
				  <div class="dropdown header-widget widget-user">
					 <div data-toggle="dropdown" class="user-dropdown d-flex align-items-center" aria-haspopup="true" aria-expanded="false">
						<span class="user-avatar flex-shrink-0">
						<span class="avatar-text">L</span>
						</span>
						<div class="user-info flex-grow-1">
						   <div class="user-name">Lê Thanh</div>
						   <div class="user-role">Administrator</div>
						</div>
						<i class="fa fa-angle-down"></i>
					 </div>
					 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="https://hoabinhbooking.test/admin/module/user/edit/21">Edit Profile</a>
						<a class="dropdown-item" href="https://hoabinhbooking.test/admin/module/user/password/21">Change Password</a>
						<a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout
						</a>
					 </div>
				  </div>
			   </div>
			</div>
		 </div>
		 <div class="main-sidebar">
			<ul class="main-menu">
				<?php 
					$menu_list=App\Models\Menus::render_menu_admin();
					echo $menu_list;
				 ?>
			</ul>
		 </div>
		 
		 @yield('admin_content')
		 
		 <div class="backdrop-sidebar-mobile"></div>
	  </div>
	  <div id="cdn-browser-modal" class="modal fade">
		 <div class="modal-dialog modal-xl">
			<div class="modal-content">
			   <div id="cdn-browser" class="cdn-browser d-flex flex-column" v-cloak :class="{is_loading:isLoading}">
				  <div class="files-nav flex-shrink-0">
					 <div class="d-flex justify-content-between">
						<div class="col-left d-flex align-items-center">
						   <div class="filter-item">
							  <input type="text" placeholder="Search file name...." class="form-control" v-model="filter.s" @keyup.enter="filter.page = 1;reloadLists()">
						   </div>
						   <div class="filter-item">
							  <button class="btn btn-default" @click="filter.page = 1;reloadLists()">
							  <i class="fa fa-search"></i> Tìm kiếm</button>
						   </div>
						   <div class="filter-item">
							  <small><i>Total: 5 files</i></small>
						   </div>
						</div>
						<div class="col-right">
						   <i class="fa-spin fa fa-spinner icon-loading active" v-show="isLoading"></i>
						   <button class="btn btn-success btn-pick-files">
						   <span><i class="fa fa-upload"></i> Upload</span>
						   <input multiple type="file" name="files[]" ref="files">
						   </button>
						</div>
					 </div>
				  </div>
				  <div class="upload-new" v-show="showUploader" display="none">
					 <input type="file" name="filepond[]" class="my-pond">
				  </div>
				  <div class="files-list">
					 <div class="files-wraps " :class="'view-'+viewType">
						<file-item v-for="(file,index) in files" :key="index" :view-type="viewType" :selected="selected" :file="file" v-on:select-file="selectFile"></file-item>
					 </div>
					 <p class="no-files-text text-center" v-show="!total && apiFinished" style="display: none">No file found</p>
					 <div class="text-center" v-if="totalPage > 1">
						<nav aria-label="Page navigation example">
						   <ul class="pagination">
							  <li class="page-item" :class="{disabled:filter.page <= 1}">
								 <a class="page-link" v-if="filter.page <=1">Previous</a>
								 <a class="page-link" href="#" v-if="filter.page > 1" v-on:click="changePage(filter.page-1,$event)">Previous</a>
							  </li>
							  <li class="page-item" v-if="p >= (filter.page-3) && p <= (filter.page+3)" :class="{active: p == filter.page}" v-for="p in totalPage" @click="changePage(p,$event)">
								 <a class="page-link" href="#">5</a>
							  </li>
							  <li class="page-item" :class="{disabled:filter.page >= totalPage}">
								 <a v-if="filter.page >= totalPage" class="page-link">Next</a>
								 <a href="#" class="page-link" v-if="filter.page < totalPage" v-on:click="changePage(filter.page+1,$event)">Next</a>
							  </li>
						   </ul>
						</nav>
					 </div>
				  </div>
				  <div class="browser-actions d-flex justify-content-between flex-shrink-0" v-if="selected.length">
					 <div class="col-left" v-show="selected.length">
						<div class="control-remove" v-if="selected && selected.length">
						   <button class="btn btn-danger" @click="removeFiles">Delete file</button>
						</div>
						<div class="control-info" v-if="selected && selected.length">
						   <div class="count-selected">5 file selected</div>
						   <div class="clear-selected" @click="selected=[]"><i>unselect</i></div>
						</div>
					 </div>
					 <div class="col-right" v-show="selected.length">
						<button class="btn btn-primary" :class="{disabled:!selected.length}" @click="sendFiles">Use file</button>
					 </div>
				  </div>
			   </div>
			</div>
		 </div>
	  </div>
	  <script type="text/javascript" src="{{asset('public/backend/js/jquery-1.7.1.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('public/backend/js/slug.js')}}"></script>
	  <!-- Scripts -->
	  <script src="{{ asset('libs/select2/js/manifest.js?_ver=1.4.0') }}" ></script>
	  <script src="{{ asset('libs/select2/js/vendor.js?_ver=1.4.0') }}" ></script>
	  <script src="{{ asset('libs/select2/js/app.js?_ver=1.4.0') }}" ></script>
	  <script src="{{ asset('libs/select2/js/select2.min.js') }}" ></script>
	  <script src="{{ asset('libs/select2/js/bootbox.min.js') }}"></script>
	  <script src="{{ asset('libs/select2/js/Chart.min.js') }}"></script>
	  <script src="{{ asset('libs/select2/js/moment.min.js') }}"></script>
	  <script src="{{ asset('libs/select2/js/daterangepicker.min.js?_ver=1.4.0') }}"></script>
	  <link rel="stylesheet" href="{{ asset('libs/select2/css/daterangepicker.css') }}"/>
	  
	  <script>
		var editor_config = {
		  path_absolute : "/",
		  selector: 'textarea.my-editor',
		  height:'500px',
		  relative_urls: false,
		  plugins: [
			"advlist autolink lists link image charmap print preview hr anchor pagebreak",
			"searchreplace wordcount visualblocks visualchars code fullscreen",
			"insertdatetime media nonbreaking save table directionality",
			"emoticons template paste textpattern"
		  ],
		  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
		  file_picker_callback : function(callback, value, meta) {
			var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
			var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
	  
			var cmsURL = editor_config.path_absolute + 'filemanager?editor=' + meta.fieldname;
			if (meta.filetype == 'image') {
			  cmsURL = cmsURL + "&type=Images";
			} else {
			  cmsURL = cmsURL + "&type=Files";
			}
	  
			tinyMCE.activeEditor.windowManager.openUrl({
			  url : cmsURL,
			  title : 'Filemanager',
			  width : x * 0.8,
			  height : y * 0.8,
			  resizable : "yes",
			  close_previous : "no",
			  onMessage: (api, message) => {
				callback(message.content);
			  }
			});
		  }
		};
		tinymce.init(editor_config);
	  </script>
	  
   </body>
</html>