@extends('layout')
@section('content')
<p style="margin:0px;padding:0px;">&nbsp;</p>
<div class="toppages">
	<div class="jsc11" style="top:10px;">
		@include('inc.search')
	</div>
</div>


<div style="width:100%;height:40px;clear:both;"></div>
<div>
	
<div class="container">
	<div class="row">
		<div class="nav-vh">
			<ul>
				<li><a href="/">Trang chủ</a></li>
				<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li><a href="/">{!! $news_catalog->title !!}</a></li>
				<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li><span>{!! $all_news->title !!}</span></li>
			</ul>
		</div>
	</div>
</div>

<div style="width:100%;height:20px;clear:both;"></div>
<div>
	
<div class="container">
	<div class="news_details">
		<div class="row">
			<h1>{!! $all_news->title !!}</h1>
			<div class="txt-nhat italic">Đăng ngày : <span>{!! $all_news->created_at !!}</span></div>
		</div>
		<div class="row">
			{!! $all_news->news_content !!}
		</div>
	</div>
</div>



@endsection