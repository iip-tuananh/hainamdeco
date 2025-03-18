@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
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
   <!-- Post -->
   <section class="section-padding2">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <img src="{{url(''.$blog_detail->image)}}" class="mb-30" alt="">
               <h1 class="section-title2">{{languageName($blog_detail->title)}}</h1>
               {!!languageName($blog_detail->content)!!}
            </div>
         </div>
      </div>
   </section>
</div>
@endsection
