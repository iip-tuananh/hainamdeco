<footer class="main-footer dark">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-30">
                <div class="item fotcont">
                    <div class="fothead">
                        <h3>CÔNG TY TNHH THIẾT KẾ XÂY DỰNG HẢI NAM</h3>
                    </div>
                    <p style="color: white;"><i class="ti-headphone-alt"></i>&nbsp; {{$setting->phone1}}</p>
                    <p style="color: white;"><i class="ti-email"></i>&nbsp; {{$setting->email}}</p>
                    <p style="color: white;"><i class="ti-location-pin"></i>&nbsp; Địa chỉ: {{$setting->address1}}</p>
                    {{-- <p style="color: white;"><i class="ti-location-pin"></i>&nbsp; Xưởng Sản Xuất: {{$setting->address2}}</p> --}}
                    {{-- <p style="color: white;"><i class="ti-location-pin"></i>&nbsp; Vp Miền Nam: Toà nhà Paris Hoàng Kim - Quận 2 - Tp. Hồ Chí Minh</p>
                    <p style="color: white;"><i class="ti-location-pin"></i>&nbsp; Xưởng Sản Xuất: Long Khánh- Biên Hoà- Đồng Nai</p>
                    <p style="color: white;"><i class="ti-book"></i>&nbsp; GPKD: 0110578241 - Cấp Ngày: 20/12/2023</p> --}}
                </div>
            </div>
            <div class="col-md-6 mb-30">
                <div class="row">
                    <div class="col-md-6">
                        <div class="item fotcont">
                            <div class="fothead">
                                <h4 style="color: white;">Chính Sách & Điều Khoản</h4>
                            </div>
                            @foreach ($pageContent as $item)
                                @if ($item->type == 'ho-tro-khanh-hang')
                                <p style="color: white;"> <a href="{{route('pagecontent',['slug'=>$item->slug])}}" title="{{$item->title}}">{{$item->title}}</a></p>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        {!! $setting->iframe_map !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-6 col-12">
                    <div class="text-center">
                        <a href="{{route('home')}}">
                            <img style="width:100px;" src="{{$setting->logo}}" alt="">
                        </a>
                    </div>
                </div> --}}
                <div class="col-md-6 col-12">
                    <div class="text-center">
                        <p style="color: white;">© 2024 Hải Nam Deco. All right reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
