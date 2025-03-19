@extends('layouts.main.master')
@section('title')
Về Chúng Tôi
@endsection
@section('description')
{{$setting->company}}
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
   <!-- About -->
   <section class="about section-padding2">
      <div class="container">
         <div class="row">
            <div class="col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
               <h2 class="section-title">{{$setting->company}}</h2>
               {!!($gioithieu->content)!!}
            </div>
         </div>
      </div>
   </section>
   <section class="fields fields_1" id="fields_1">
      <div class="container">
         <div class="title_page " >
            <span>Lĩnh vực hoạt động</span>
         </div>
         <div class="fields_1_content">
            @foreach ($servicehome as $key => $item)
            <div class="fields_1_item font-sfp">
               <div class="row">
                  <div class="col-md-6" style="margin: auto;">
                     <div class="fields_1_text">
                        <a href="{{route('serviceList',['slug'=>$item->slug])}}" title="" class="fields_1_title">
                           <span>0{{$key+1}}</span>
                           <div>{{$item->name}}</div>
                        </a>
                        <div class="desc-p font-500">
                           <div dir="auto">{!!($item->description)!!}</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 " >
                     <a href="{{route('serviceList',['slug'=>$item->slug])}}" title="" class="fields_1_cover zoom zoom-img">
                     <span><img src="{{$item->image}}"  alt=""> </span>
                     </a>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </section>
   <section class="about_2 pd-60">
      <div class="container">
         <div class="title_page title_page_center mgb-60 text-center" >
            <span>TẦM NHÌN - SỨ MỆNH - GIÁ TRỊ CỐT LÕI</span>
         </div>
         <div class="row">
            <div class="col-md-4 " >
               <div class="ab_item">
                  <div class="zoom-img zoom"><span><img src="{{url('frontend/img/tn-1.jpg')}}" alt=""> </span></div>
                  <div class="ab_cache">
                     <div class="ab_title">
                        <div><img src="{{url('frontend/img/icon-tn.png')}}" alt=""> </div>
                        <span>TẦM NHÌN</span>
                     </div>
                     <p>Không chỉ chiếm lĩnh thị trường trong nước, Hải Nam Deco không ngừng đổi mới, sáng tạo để kiến tạo các
                        sản phẩm, dịch vụ nội thất đẳng cấp, mục tiêu trở
                        thành doanh nghiệp dẫn đầu thị trường khu vực và
                        quốc tế</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 " >
               <div class="ab_item">
                  <div class="zoom-img zoom"><span><img src="{{url('frontend/img/tn-2.jpg')}}" alt=""> </span></div>
                  <div class="ab_cache">
                     <div class="ab_title">
                        <div><img src="{{url('frontend/img/icon-sm.png')}}" alt=""> </div>
                        <span>SỨ MỆNH</span>
                     </div>
                     <p>Kiến tạo không gian sống đẳng cấp, đem đến những
                        sản phẩm, dịch vụ nội thất chất lượng nhằm nâng cao
                        đời sống và bảo vệ sức khỏe người sử dụng, hướng tới
                        tương lai vững bền với thương hiệu cao cấp.</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 " >
               <div class="ab_item">
                  <div class="zoom-img zoom"><span><img src="{{url('frontend/img/tn-3.jpg')}}" alt=""> </span></div>
                  <div class="ab_cache">
                     <div class="ab_title">
                        <div><img src="{{url('frontend/img/icon-gtri.png')}}" alt=""> </div>
                        <span>GIÁ TRỊ CỐT LÕI</span>
                     </div>
                     <p>Chúng tôi luôn đặt uy tín lên hàng đầu, sự tín nhiệm của
                        khách hàng là nhân tố quan trọng quyết định sự thành
                        công của chúng tô
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="about_2 pd-60">
      <div class="container">
         <div class="title_page title_page_center mgb-60 text-center" >
            <span>BỘ MÁY TỔ CHỨC</span>
         </div>
         <div class="row">
            <div class="col-md-12 " >
               <img src="{{url('frontend/img/bomay.png')}}" alt="">
            </div>
         </div>
      </div>
   </section>
   <section class="fields fields_1 pd-60" >
      <div class="container">
         <div class="title_page " >
            <span>Cơ sở hạ tầng</span>
         </div>
         <div class="fields_1_content">
            <div class="fields_1_item font-sfp">
               <div class="row">
                  <div class="col-md-6 " style="margin: auto;" >
                     <div class="fields_1_text">
                        <div class="desc-p font-500">
                           <p>Với hệ thống 2 nhà xưởng sản xuất 1000m2 hiện
                              đại nằm ngay vị trí Khánh Hà - Thường Tín - Hà
                              Nội và Long Khánh- Biên Hoà- Đồng Nai thuận
                              tiện cho việc sản xuất - cung cấp. Công ty TNHH thiết kế xây dựng Hải Nam đầu tư hệ thống máy móc, thiết bị hiện đại
                              để có thể sản xuất các hạng mục nội thất chi tiết,
                              chất lượng nhằm đáp ứng nhu cầu của khách hàng.
                              Hải Nam Deco áp dụng quy trình công nghệ cho từng
                              giai đoạn, sản phẩm được sản xuất từ khâu chọn vật
                              tư đến khâu thành phẩm luôn là một quá trình liên
                              tục, các sản phẩm nội thất được hoàn thiện theo yêu
                              cầu kỹ thuật và chất lượng cao nhất.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 " >
                     <a href="#" title="" class="fields_1_cover zoom zoom-img">
                     <span><img src="{{url('frontend/img/cosohatang.png')}}"  alt=""> </span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="section-padding">
      <div class="container">
         <div class="title_page " >
            <span>Quy trình làm việc</span>
         </div>
         <div class="row pt-60">
            <div class="col-md-3">
               <div class="process2 item mb-90">
                  <i class="number">01</i>
                  <h3>Tiếp nhận thông tin</h3>
                  <div class="line"></div>
                  <p>Tiếp nhận thông tin khách hàng qua các kênh thông tin:
                     Gọi điện, email, fanpage, gặp trực tiếp tại văn phòng.</p>
                  <p>Ghi nhận thông tin cơ bản từ khách hàng: nhu cầu thiết kế thi công, diện tích thi công, địa chỉ thi công,…</p>
               </div>
            </div>
            <div class="col-md-3">
               <div class="process2 item mb-30">
                  <i class="number">02</i>
                  <h3>Khảo sát tư vấn</h3>
                  <div class="line"></div>
                  <p>Nắm bắt nhu cầu sử dụng, chi phí đầu tư dự kiến, đối
                     tượng khách hàng,…</p>
                     <p>Đo đạc kích thước chi tiết mặt bằng thiết kế - thi công.
                        Đánh giá hiện trạng công trình và đề xuất các phương án
                        thi công</p>
               </div>
            </div>
            <div class="col-md-3">
               <div class="process2 item mb-90">
                  <i class="number">03</i>
                  <h3>Thiết kế báo giá</h3>
                  <div class="line"></div>
                  <p>Dựng mặt bằng bố trí gửi khách hàng duyệt. Thiết kế phối cảnh 3D dựa theo bố trí mặt bằng đã duyệt</p>
                  <p>Lên thông số kỹ thuật, chi tiết kích thước công trình. Báo giá công trình, dựa theo thiết kế phối cảnh đã duyệt</p>
               </div>
            </div>
            <div class="col-md-3">
               <div class="process2 item mb-30">
                  <i class="number">04</i>
                  <h3>Ký kết hợp đồng</h3>
                  <div class="line"></div>
                  <p>Khách hàng duyệt phối cảnh 3D và chi tiết kỹ thuật 2D</p>
                  <p>Thuyết minh phương án thi công</p>
                  <p>Ký kết hợp đồng thi công</p>
               </div>
            </div>
            <div class="col-md-3">
               <div class="process2 item mb-90">
                  <i class="number">05</i>
                  <h3>Sản xuất lắp đặt</h3>
                  <div class="line"></div>
                  <p>Sau khi ký kết hợp đồng, công ty Hải Nam Deco sẽ tiến
                     hành sản xuất, thi công. Khách hàng có thể lựa chọn hình
                     thức nghiệm thu theo tiến độ công trình đã đề ra hoặc theo
                     từng hạng mục thi công</p>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection
