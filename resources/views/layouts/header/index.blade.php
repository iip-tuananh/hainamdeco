@php $total = 0; $qty = 0 ; @endphp
@foreach((array) session('cart') as $id => $details)
      @php
      $total += ($details['price'] - ($details['price']*($details['discount']/100))) * $details['quantity'] ;
      $qty += $details['quantity'] ;
      @endphp
@endforeach

<nav class="navbar navbar-expand-lg">
    <!-- Logo -->
    <div class="logo-wrapper valign">
        <div class="logo">
            <a href="{{route('home')}}"> <img src="{{$setting->logo}}" class="logo-img" alt="">
            </a>
        </div>
    </div>
    <div class="title-header-mobile text-center text-uppercase">Công ty TNHH thiết kế xây dựng Hải Nam</div>
    <!-- Button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="ti-menu"></i></span> </button>
    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Trang Chủ</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('aboutUs')}}">Giới Thiệu</a></li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Dịch vụ <i class="ti-angle-down"></i></a>
                <ul class="dropdown-menu">
                    @foreach ($servicehome as $item)
                        <li><a href="{{route('serviceList',['slug'=>$item->slug])}}" class="dropdown-item"><span>{{$item->name}}</span></a></li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{route('duanTieuBieu')}}">Dự Án</a></li>
            {{-- <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Sản Phẩm <i class="ti-angle-down"></i></a>
                <ul class="dropdown-menu">
                    @foreach ($categoryhome as $item)
                    <li><a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}" class="dropdown-item"><span>{{languageName($item->name)}}</span></a></li>
                    @endforeach
                </ul>
            </li> --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Tin Tức <i class="ti-angle-down"></i></a>
                <ul class="dropdown-menu">
                    @foreach ($blogCate as $item)
                    <li><a href="{{route('listCateBlog',['slug'=>$item->slug])}}" class="dropdown-item"><span>{{languageName($item->name)}}</span></a></li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{route('lienHe')}}">Liên Hệ</a></li>
        </ul>
    </div>
</nav>
<style>
    .navbar .title-header-mobile {
        display: none;
    }
    @media (max-width: 991px) {
        .navbar .title-header-mobile {
            display: inline-block !important;
            color: #2d3193;
            font-size: 18px;
            font-weight: 600;
            width: 50%
        }
        .navbar .logo {
            width: 25%;
        }
        .navbar button {
            margin-right: 11px !important;
            outline: none !important;
            background: transparent;
            margin-top: 0px !important;
            border: 1px solid #2d3193;
            padding-top: 10px;
            margin-left: 18px;
        }

        .section-padding2 {
            padding: 90px 0px 90px 0px;
        }
    }
</style>
