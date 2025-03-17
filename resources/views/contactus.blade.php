@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="content-wrapper">
	<!-- Lines -->
	<section class="content-lines-wrapper">
	   <div class="content-lines-inner">
		  <div class="content-lines"></div>
	   </div>
	</section>
	<!-- Header Banner -->
	<section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-darkgray="5" data-background="{{url('frontend/img/banner.jpg')}}">
	   <!-- Left Panel -->
	   <div class="left-panel"></div>
	</section>
	<!-- Contact -->
	<section class="section-padding2">
	   <div class="container">
		  <div class="row">
			 <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
				<h2 class="section-title">Liên <span>Hệ</span></h2>
			 </div>
		  </div>
		  <div class="row mb-90">
			 <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
				<p><b>{{$setting->company}}</b></p>
				<p>{{$setting->webname}}</p>
				<p><b>Phone :</b> {{$setting->phone1}}</p>
				<p><b>Email :</b> {{$setting->email}}</p>
				<p><b>Địa Chỉ :</b> {{$setting->address1}}</p>
			 </div>
			 <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
				<p><b>Gủi Tin Nhắn</b></p>
				<form  action="{{route('postcontact')}}" method="post" class="contact__form">
					@csrf
				   <!-- Form elements -->
				   <div class="row">
					  <div class="col-md-12 form-group">
						 <input name="name" type="text" placeholder="Họ Tên *" required> 
					  </div>
					  <div class="col-md-6 form-group">
						 <input name="email" type="email" placeholder="Email *" required> 
					  </div>
					  <div class="col-md-6 form-group">
						 <input name="phone" type="text" placeholder="Số Điện Thoại *" required> 
					  </div>
					  <div class="col-md-12 form-group">
						 <textarea name="mess" id="message" cols="30" rows="4" placeholder="Lời Nhắn *" required></textarea>
					  </div>
					  <div class="col-md-12">
						 <input name="submit" type="submit"  value="Send Message">
					  </div>
				   </div>
				</form>
			 </div>
		  </div>
		  <!-- Map Section -->
		  <div class="row">
			 <div class="col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
				{!!$setting->iframe_map!!}
			 </div>
		  </div>
	   </div>
	</section>
 </div>
@endsection