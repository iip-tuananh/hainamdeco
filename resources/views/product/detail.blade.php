@extends('layouts.main.master')
@section('title')
{{$product->name}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$img = json_decode($product->images);
$thongsokythuat = json_decode($product->size);
$variant = json_decode($product->variant);
$khuyenmai = json_decode($product->preserve);
@endphp
{{url(''.$img[0])}}
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
	   {{-- <div class="left-panel"></div> --}}
	</section>
	<!-- Contact -->
	<section class="section-padding2">
	   <div class="container">
		  <div class="row mb-90">
			 <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
				<h2>{{$product->name}}</h2>
				@if ($product->price > 0)
               @if ($product->status_variant == 1)
               <span class="price">{{get_price_variant($product->id)}}₫ <del>{{number_format($product->price)}}₫</del></span>
               @else
               <span class="price">{{number_format($product->discount)}}₫ <del>{{number_format($product->price)}}₫</del></span>
               @endif
            @else
            <span class="price">Liên Hệ</span>
            @endif
				<p>{{languageName($product->description)}}</p>
            <div class="button">
               <a href="tel:{{$setting->phone1}}">Liên Hệ Đặt Hàng</a>
             </div>
			 </div>
			 <div class="product-page col-md-6 animate-box" data-animate-effect="fadeInUp">
				<div class="owl-carousel owl-theme">
               @foreach ($img as $item)
               <div class="portfolio-item">
                  <img class="img-fluid" src="{{$item}}" alt="">
               </div>
               @endforeach
            </div>
			 </div>
		  </div>
		  <!-- Map Section -->
		  <div class="row">
			 <div class="col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
				<h2 class="section-title2">Thông tin chi tiết sản phẩm: </h2>
            {!!languageName($product->content)!!}
			 </div>
		  </div>
	   </div>
	</section>
 </div>
@endsection

