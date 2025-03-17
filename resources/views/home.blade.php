@extends('layouts.main.master')
@section('title')
    {{ $setting->company }}
@endsection
@section('description')
    {{ $setting->webname }}
@endsection
@section('image')
    {{ url('' . $banner[0]->image) }}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
    <!-- Slider -->
    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            @foreach ($banner as $key => $item)
                <div class="text-end item bg-img" data-overlay-dark="{{ $key }}"
                    data-background="{{ $item->image }}">
                    <div class="v-middle caption mt-30">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 offset-md-5">
                                    @if ($item->title != null)
                                        <h1>{{ $item->title }}</h1>
                                    @endif
                                    <p>{!! $item->description !!}
                                    </p>
                                    @if ($item->link != null)
                                        <div class="butn-light mt-30 mb-30"><a href="{{ $item->link }}"
                                                target="_blank"><span>Chi Tiết</span></a></div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Corner -->
        <div class="hero-corner"></div>
        <div class="hero-corner3"></div>
        <!-- Left Panel -->
        {{-- <div class="left-panel">
      <ul class="social-left clearfix">
         <li><a href="#"><i class="ti-pinterest"></i></a></li>
         <li><a href="#"><i class="ti-instagram"></i></a></li>
         <li><a href="#"><i class="ti-twitter"></i></a></li>
         <li><a href="#"><i class="ti-facebook"></i></a></li>
      </ul>
   </div> --}}
    </header>
    <!-- Content -->
    <div class="content-wrapper">
        <!-- Lines -->
        <section class="content-lines-wrapper">
            <div class="content-lines-inner">
                <div class="content-lines"></div>
            </div>
        </section>
        <!-- About -->
        <section class="about section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <h2 class="section-title">Về <span>Chúng Tôi</span></h2>
                        <div class="line_8">
                            {!! $gioithieu->content !!}
                        </div>
                    </div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                        <div class="about-img">
                            <div class="img"> <img src="{{ $gioithieu->image }}" class="img-fluid lazy" alt="">
                            </div>
                            <div class="about-img-2 about-buro"><a href="{{ route('aboutUs') }}">Xem Thêm</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section class="services section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title">Lĩnh Vực <span>Hoạt Động</span></h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($servicehome as $item)
                        <div class="col-md-4">
                            <div class="services2 mb-60">
                                <div class="services2-img"><img src="{{ $item->image }}" alt="" class="w-100 lazy">
                                </div>
                                <div class="services2-content">
                                    <div class="icon"><img src="{{ url('frontend/img/icon-2.png') }}" alt="">
                                    </div>
                                    <h3 class="services2-title">{{ $item->name }}</h3>
                                    <div class="services2-text line_3">{!! $item->description !!}</div>
                                    <div class="butn-dark mt-20"> <a
                                            href="{{ route('serviceList', ['slug' => $item->slug]) }}"><span>Chi
                                                Tiết</span></a> </div>
                                </div>
                                <div class="title-box">
                                    <h3 class="mb-0">{{ $item->name }}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- Blog -->
        {{-- <section class="bauen-product section-padding">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h2 class="section-title">Sản Phẩm <span>Nổi Bật</span></h2>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="owl-carousel owl-theme">
                  @foreach ($homePro as $item)
                  @include('layouts.product.item',['pro'=>$item])
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </section> --}}
        <!-- Projects -->
        <section class="projects section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title">Dự Án <span>Nổi Bật</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            @foreach ($duan as $item)
                                @php
                                    $img = json_decode($item->images);
                                @endphp
                                <div class="item">
                                    <div class="position-re o-hidden">
                                        <img src="{{ $img[0] }}" class="lazy" alt="">
                                    </div>
                                    <div class="con">
                                        <h6><a href="{{ route('duanTieuBieuDetail', ['slug' => $item->slug]) }}">Project</a>
                                        </h6>
                                        <h5><a
                                                href="{{ route('duanTieuBieuDetail', ['slug' => $item->slug]) }}">{{ $item->name }}</a>
                                        </h5>
                                        <div class="line"></div> <a
                                            href="{{ route('duanTieuBieuDetail', ['slug' => $item->slug]) }}"><i
                                                class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bauen-blog section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title">Tin Tức <span>Sự Kiện</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            @foreach ($hotnews as $item)
                                <div class="item">
                                    <div class="position-re o-hidden">
                                        <a href="{{ route('detailBlog', ['slug' => $item->slug]) }}"><img
                                                src="{{ $item->image }}" class="lazy" alt="{{ $item->image }}"> </a>

                                    </div>
                                    <div class="con">
                                        <span class="category">
                                            <a href="{{ route('detailBlog', ['slug' => $item->slug]) }}">{{ date_format($item->created_at, 'd/m/Y') }}
                                            </a>
                                        </span>
                                        <h5><a
                                                href="{{ route('detailBlog', ['slug' => $item->slug]) }}">{{ languageName($item->title) }}</a>
                                        </h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Promo video - Testiominals -->
        <section class="testimonials">
            <div class="background bg-img bg-fixed section-padding pb-0"
                data-background="{{ url('frontend/img/banner2.jpg') }}" data-overlay-dark="3">
                <div class="container">
                    <div class="row">
                        <!-- Promo video -->
                        <div class="col-md-6">
                            {{-- <div class="vid-area">
                                <div class="vid-icon">
                                    <a class="play-button vid" href="https://youtu.be/RziCmLzpFNY">
                                        <svg class="circle-fill">
                                            <circle cx="43" cy="43" r="39" stroke="#fff"
                                                stroke-width=".5"></circle>
                                        </svg>
                                        <svg class="circle-track">
                                            <circle cx="43" cy="43" r="39" stroke="none" stroke-width="1"
                                                fill="none"></circle>
                                        </svg> <span class="polygon">
                                            <i class="ti-control-play"></i>
                                        </span> </a>
                                </div>
                                <div class="cont mt-15 mb-30">
                                    <h5>Video About</h5>
                                </div>
                            </div> --}}
                        </div>
                        <!-- Testiominals -->
                        <div class="col-md-5 offset-md-1">
                            <div class="testimonials-box animate-box" data-animate-effect="fadeInUp">
                                <div class="head-box">
                                    <h4>Khách hàng nói gì?</h4>
                                </div>
                                <div class="owl-carousel owl-theme">
                                    @foreach ($ReviewCus as $item)
                                        <div class="item">
                                            <span class="quote">
                                                <img src="{{ url('frontend/img/quot.png') }}" alt=""></span>
                                            <p>{{ languageName($item->content) }}</p>
                                            <div class="info">
                                                <div class="author-img"> <img src="{{ $item->avatar }}" class="lazy"
                                                        alt=""> </div>
                                                <div class="cont">
                                                    <h6>{{ languageName($item->name) }}</h6>
                                                    <span>{{ languageName($item->position) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients -->
        <section class="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="owl-carousel owl-theme">
                            @foreach ($Partner as $item)
                                <div class="clients-logo">
                                    <a href="#0"><img src="{{ $item->image }}" class="lazy" alt=""></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
