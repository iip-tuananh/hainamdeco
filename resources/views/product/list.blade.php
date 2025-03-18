@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('js')
@endsection
@section('css')
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
   <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-darkgray="5" data-background="{{url('frontend/img/banner.jpg')}}" style="background-image: url(&quot;{{url('frontend/img/banner.jpg')}}&quot;);">
      <!-- Left Panel -->
      {{-- <div class="left-panel"></div> --}}
   </section>
   <!-- Services 3 -->
   <section class="services section-padding2">
      <div class="container">
         <div class="row">
            <div class="col-md-12 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
               <h2 class="section-title">{{$title}}</h2>
            </div>
         </div>
         <div class="row">
            @if (count($list) > 0)
            @foreach ($list as $item)
            @php
                $img = json_decode($item->images);
            @endphp
            <div class="col-md-4">
               <div class="services2 mb-60">
                  <div class="services2-img">
                     <a href="{{route('detailProduct',['cate'=>$item->cate_slug,'type'=>$item->type_slug ? $item->type_slug : 'loai','id'=>$item->slug])}}"></a>
                     <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$img[0]}}"  class="lazy w-100" alt="">
                  </div>
                  <div class="services2-content">
                      <h3 class="services2-title">{{$item->name}}</h3>
                      <div class="butn-dark mt-20"> <a href="{{route('detailProduct',['cate'=>$item->cate_slug,'type'=>$item->type_slug ? $item->type_slug : 'loai','id'=>$item->slug])}}"><span>Chi Tiết</span></a> </div>
                  </div>
                  <div class="title-box">
                      <h3 class="mb-0">{{$item->name}}</h3>
                      @if ($item->price > 0)
                           @if ($item->status_variant == 1)
                           <span style="color: #b19777;font-weight: 600; ">{{get_price_variant($item->id)}}₫ <del>{{number_format($item->price)}}₫</del></span>
                           @else
                           <span style="color: #b19777;font-weight: 600; ">{{number_format($item->discount)}}₫ <del>{{number_format($item->price)}}₫</del></span>
                           @endif
                        @else
                        <span style="color: #b19777;font-weight: 600;">Liên Hệ</span>
                        @endif
                  </div>
              </div>
            </div>
            @endforeach
            {{$list->links()}}
            @else
            <h3>Nội Dung Đang Cập Nhật</h3>
            @endif
         </div>
      </div>
   </section>
</div>
@endsection
