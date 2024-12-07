@extends('layouts.app')

@section('content')
    
    <section class="main-slider">
            
        <div class="main-slider-carousel owl-carousel owl-theme">
            
            <div class="slide" style="background-image: linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.99), rgba(255, 255, 255, 0.12)), url({{asset('template/images/main-slider/slider_1.jpg')}})">
                <!-- <div class="color-layer-one"></div>
                <div class="color-layer-two"></div>
                <div class="color-layer-three"></div> -->
                <div class="auto-container">
                    
                    <!-- Content Boxed -->
                    <div class="content-boxed">
                        <div class="inner-box">
                            <h1 class="titleslider" style="font-size: 60px;">GIGAINTERNET.ID <br> Melayani Anda dimanapun berada</h1>
                            <div class="btns-box">
                                <a href="{{ route ('About.index')}}" class="theme-btn btn-style-two btn-slidertype1"><span class="txt">Pelajari <i class="lnr lnr-arrow-right"></i></span></a>
                                <a href="{{ route('Contact.index')}}" class="theme-btn btn-style-three btn-slidertype2"><span class="txt">Hubungi Kami <i class="lnr lnr-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <div class="slide" style="background-image: linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.99), rgba(255, 255, 255, 0.12)), url({{asset('template/images/main-slider/slider_2.jpg')}})">
                <!-- <div class="color-layer-one"></div>
                <div class="color-layer-two"></div>
                <div class="color-layer-three"></div> -->
                <div class="auto-container">
                    
                    <!-- Content Boxed -->
                    <div class="content-boxed">
                        <div class="inner-box">
                            <h1 class="titleslider" style="font-size: 60px;">Bisnis Online <br> Pasarkan Produkmu Dengan Cepat</h1>
                            <div class="btns-box">
                                <a href="{{ route ('About.index')}}" class="theme-btn btn-style-two btn-slidertype1"><span class="txt">Pelajari <i class="lnr lnr-arrow-right"></i></span></a>
                                <a href="{{ route('Contact.index')}}" class="theme-btn btn-style-three btn-slidertype2"><span class="txt">Hubungi Kami <i class="lnr lnr-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="slide" style="background-image: linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.99), rgba(255, 255, 255, 0.12)), url({{asset('template/images/main-slider/slider_3.jpg')}})">
                <!-- <div class="color-layer-one"></div>
                <div class="color-layer-two"></div>
                <div class="color-layer-three"></div> -->
                <div class="auto-container">
                    
                    <!-- Content Boxed -->
                    <div class="content-boxed">
                        <div class="inner-box">
                            <h1 class="titleslider" style="font-size: 60px;">Tanpa Buffering <br> Tunjukkan Skill Pro-Playermu</h1>
                            <div class="btns-box">
                                <a href="{{ route ('About.index')}}" class="theme-btn btn-style-two btn-slidertype1"><span class="txt">Pelajari <i class="lnr lnr-arrow-right"></i></span></a>
                                <a href="{{ route('Contact.index')}}" class="theme-btn btn-style-three btn-slidertype2"><span class="txt">Hubungi Kami <i class="lnr lnr-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="slide" style="background-image: linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.99), rgba(255, 255, 255, 0.12)), url({{asset('template/images/main-slider/slider_4.jpg')}})">
                <!-- <div class="color-layer-one"></div>
                <div class="color-layer-two"></div>
                <div class="color-layer-three"></div> -->
                <div class="auto-container">
                    
                    <!-- Content Boxed -->
                    <div class="content-boxed">
                        <div class="inner-box">
                            <h1 class="titleslider" style="font-size: 60px;">Streaming seharian <br> Pakai Ginesia tanpa batas</h1>
                            <div class="btns-box">
                                <a href="{{ route ('About.index')}}" class="theme-btn btn-style-two btn-slidertype1"><span class="txt">Pelajari <i class="lnr lnr-arrow-right"></i></span></a>
                                <a href="{{ route('Contact.index')}}" class="theme-btn btn-style-three btn-slidertype2"><span class="txt">Hubungi Kami <i class="lnr lnr-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="slide" style="background-image: linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.12)), url({{asset('template/images/main-slider/slider_5.jpg')}})">
                <!-- <div class="color-layer-one"></div>
                <div class="color-layer-two"></div>
                <div class="color-layer-three"></div> -->
                <div class="auto-container">
                    
                    <!-- Content Boxed -->
                    <div class="content-boxed">
                        <div class="inner-box">
                            <h1 class="titleslider" style="font-size: 60px;">Belajar makin pintar <br> Pakai Wifi Ginesia super lancar</h1>
                            <div class="btns-box">
                                <a href="{{ route ('About.index')}}" class="theme-btn btn-style-two btn-slidertype1"><span class="txt">Pelajari <i class="lnr lnr-arrow-right"></i></span></a>
                                <a href="{{ route('Contact.index')}}" class="theme-btn btn-style-three btn-slidertype2"><span class="txt">Hubungi Kami <i class="lnr lnr-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        
    </section>

    <!-- Appointment Section -->
    <section class="appointment-section">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Title Column -->
                <div class="title-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        {{-- <h3>#LebihDekat dengan Ginesia</h3> --}}
                        <p style="color: #ffffff; font-size:22px;">Cek ketersediaan jangkauan area rumah anda</p style="color: #ffffff; font-size:16px;">
                    </div>
                </div>
                
                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="appointment-form">
                            <div class="form-group">
                                <select name="subdistrict" id="subdistrict" class="form-control" id="">
                                    @foreach ($kecamatan as $k)
                                    <option value="{{ $k->subdistrict_name}}">{{ $k->subdistrict_name}}</option>
                                    @endforeach
                                </select>
                                <button type="button" onclick="cekDisini()" class="theme-btn btn-style-two"><span class="txt">Cek Disini <i class="lnr lnr-arrow-right"></i></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Appointment Section -->

    <!-- Pricing Section Two / Style Three -->
    <section class="" style="padding-top:30px;">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="separator"></div>
                <h2>Penawaran Terbaik untuk Anda</h2>
            </div>
            <!-- End Sec Title -->
            
			<div class="row clearfix">
				
				<!-- Price Block -->
				<div class="price-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms" style="border-radius: 0 50px 0 50px;">
						<div class="upper-box" style="">
							<h6 style="font-size: 16px;">GIGA HOME 10</h6>
                            <h4 style="color: var(--main-color); font-size:26px; margin-top:5px !important; margin-bottom:25px;">10 Mbps</h4>
                            <hr>
                            <h1 style="font-weight:600; font-size:36px; margin:0 0 0 25px;"><span style="font-size:14px; display:block; position: absolute; margin:-25px; padding-top:10px;">Rp. </span> 179.000 <span style="font-size:14px;">/Bulan</span></h1>
                            <span style="font-size: 10px;">Belum termasuk PPN 11%</span>
                            <div class="button-box">
								<a href="#" class="theme-btn btn-style-four"><span class="txt">Berlangganan</span></a>
							</div>
                            <div class="button-box" style="margin-top: 10px !important; ">
								<a href="https://wa.me/+628112113311?text=Hallo%20admin%2C%20saya%20berminat%20paket%20internet%20Gigahome.." class="theme-btn btn-style-four" style="background: #fff !important; color: var(--main-color) !important; border:1px solid #dedede;"><span class="txt">Chat Sales</span></a>
							</div>
						</div>
						<div class="lower-box">
							<ul class="price-list">
								<li>10 Mbps ideal 1-4 Device</li>
                                <li>Kecepatan 1:1</li>
								<li>Internet Unlimited</li>
								<li>Tanpa FUP</li>
								<li>Gratis Peminjaman Alat</li>
                                <li>Harga perbulan Flat</li>
							</ul>
							
						</div>
					</div>
				</div>

                <!-- Price Block -->
				<div class="price-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms" style="border-radius: 0 50px 0 50px;">
						<div class="upper-box" style="">
							<h6 style="font-size: 16px;">GIGA HOME 20</h6>
                            <h4 style="color: var(--main-color); font-size:26px; margin-top:5px !important; margin-bottom:25px;">20 Mbps</h4>
                            <hr>
                            <h1 style="font-weight:600; font-size:36px; margin:0 0 0 25px;"><span style="font-size:14px; display:block; position: absolute; margin:-25px; padding-top:10px;">Rp. </span> 199.000 <span style="font-size:14px;">/Bulan</span></h1>
                            <span style="font-size: 10px;">Belum termasuk PPN 11%</span>
                            <div class="button-box">
								<a href="#" class="theme-btn btn-style-four"><span class="txt">Berlangganan</span></a>
							</div>
                            <div class="button-box" style="margin-top: 10px !important; ">
								<a href="https://wa.me/+628112113311?text=Hallo%20admin%2C%20saya%20berminat%20paket%20internet%20Gigahome.." class="theme-btn btn-style-four" style="background: #fff !important; color: var(--main-color) !important; border:1px solid #dedede;"><span class="txt">Chat Sales</span></a>
							</div>
						</div>
						<div class="lower-box">
							<ul class="price-list">
								<li>20 Mbps ideal 1-5 Device</li>
                                <li>Kecepatan 1:1</li>
								<li>Internet Unlimited</li>
								<li>Tanpa FUP</li>
								<li>Gratis Peminjaman Alat</li>
                                <li>Harga perbulan Flat</li>
							</ul>
							
						</div>
					</div>
				</div>

                <!-- Price Block -->
				<div class="price-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms" style="border-radius: 0 50px 0 50px;">
						<div class="upper-box" style="">
							<h6 style="font-size: 16px;">GIGA HOME 30</h6>
                            <h4 style="color: var(--main-color); font-size:26px; margin-top:5px !important; margin-bottom:25px;">30 Mbps</h4>
                            <hr>
                            <h1 style="font-weight:600; font-size:36px; margin:0 0 0 25px;"><span style="font-size:14px; display:block; position: absolute; margin:-25px; padding-top:10px;">Rp. </span> 237.500 <span style="font-size:14px;">/Bulan</span></h1>
                            <span style="font-size: 10px;">Belum termasuk PPN 11%</span>
                            <div class="button-box">
								<a href="#" class="theme-btn btn-style-four"><span class="txt">Berlangganan</span></a>
							</div>
                            <div class="button-box" style="margin-top: 10px !important; ">
								<a href="https://wa.me/+628112113311?text=Hallo%20admin%2C%20saya%20berminat%20paket%20internet%20Gigahome.." class="theme-btn btn-style-four" style="background: #fff !important; color: var(--main-color) !important; border:1px solid #dedede;"><span class="txt">Chat Sales</span></a>
							</div>
						</div>
						<div class="lower-box">
							<ul class="price-list">
								<li>30 Mbps ideal 1-7 Device</li>
                                <li>Kecepatan 1:1</li>
								<li>Internet Unlimited</li>
								<li>Tanpa FUP</li>
								<li>Gratis Peminjaman Alat</li>
                                <li>Harga perbulan Flat</li>
							</ul>
							
						</div>
					</div>
				</div>

                <!-- Price Block -->
				<div class="price-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms" style="border-radius: 0px 50px;
                    border: solid 5px var(--main-color);
                    visibility: visible;
                    animation-duration: 1500ms;
                    animation-delay: 0ms;
                    animation-name: fadeInLeft;">
						<div class="upper-box" style="">
							<h6 style="font-size: 16px;">GIGA HOME 40</h6>
                            <h4 style="color: var(--main-color); font-size:26px; margin-top:5px !important; margin-bottom:25px;">40 Mbps</h4>
                            <hr>
                            <h1 style="font-weight:600; font-size:36px; margin:0 0 0 25px;"><span style="font-size:14px; display:block; position: absolute; margin:-25px; padding-top:10px;">Rp. </span> 269.000 <span style="font-size:14px;">/Bulan</span></h1>
                            <span style="font-size: 10px;">Belum termasuk PPN 11%</span>
                            <div class="button-box">
								<a href="#" class="theme-btn btn-style-four"><span class="txt">Berlangganan</span></a>
							</div>
                            <div class="button-box" style="margin-top: 10px !important; ">
								<a href="https://wa.me/+628112113311?text=Hallo%20admin%2C%20saya%20berminat%20paket%20internet%20Gigahome.." class="theme-btn btn-style-four" style="background: #fff !important; color: var(--main-color) !important; border:1px solid #dedede;"><span class="txt">Chat Sales</span></a>
							</div>
						</div>
						<div class="lower-box">
							<ul class="price-list">
								<li>40 Mbps ideal 1-8 Device</li>
                                <li>Kecepatan 1:1</li>
								<li>Internet Unlimited</li>
								<li>Tanpa FUP</li>
								<li>Gratis Peminjaman Alat</li>
                                <li>Harga perbulan Flat</li>
							</ul>
							
						</div>
					</div>
				</div>

                
			</div>
            <div class="text-center" style="margin: 20px 0 20px;">
                <button class="theme-btn btn-style-four" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Paket Lainnya
                </button>
            </div>
            
                <div class="collapse" id="collapseExample">
                    <div class="row clearfix">
                    <!-- Price Block -->
                    <div class="price-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms" style="border-radius: 0 50px 0 50px;">
                            <div class="upper-box" style="">
                                <h6 style="font-size: 16px;">GIGA HOME 50</h6>
                                <h4 style="color: var(--main-color); font-size:26px; margin-top:5px !important; margin-bottom:25px;">50 Mbps</h4>
                                <hr>
                                <h1 style="font-weight:600; font-size:36px; margin:0 0 0 25px;"><span style="font-size:14px; display:block; position: absolute; margin:-25px; padding-top:10px;">Rp. </span> 299.000 <span style="font-size:14px;">/Bulan</span></h1>
                                <span style="font-size: 10px;">Belum termasuk PPN 11%</span>
                                <div class="button-box">
                                    <a href="#" class="theme-btn btn-style-four"><span class="txt">Berlangganan</span></a>
                                </div>
                                <div class="button-box" style="margin-top: 10px !important; ">
                                    <a href="https://wa.me/+628112113311?text=Hallo%20admin%2C%20saya%20berminat%20paket%20internet%20Gigahome.." class="theme-btn btn-style-four" style="background: #fff !important; color: var(--main-color) !important; border:1px solid #dedede;"><span class="txt">Chat Sales</span></a>
                                </div>
                            </div>
                            <div class="lower-box">
                                <ul class="price-list">
                                    <li>50 Mbps ideal 1-10 Device</li>
                                    <li>Kecepatan 1:1</li>
                                    <li>Internet Unlimited</li>
                                    <li>Tanpa FUP</li>
                                    <li>Gratis Peminjaman Alat</li>
                                    <li>Harga perbulan Flat</li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    <div class="price-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms" style="border-radius: 0 50px 0 50px;">
                            <div class="upper-box" style="">
                                <h6 style="font-size: 16px;">GIGA HOME 100</h6>
                                <h4 style="color: var(--main-color); font-size:26px; margin-top:5px !important; margin-bottom:25px;">100 Mbps</h4>
                                <hr>
                                <h1 style="font-weight:600; font-size:36px; margin:0 0 0 25px;"><span style="font-size:14px; display:block; position: absolute; margin:-25px; padding-top:10px;">Rp. </span> Soon Maret <span style="font-size:14px;">/Bulan</span></h1>
                                <span style="font-size: 10px;">Belum termasuk PPN 11%</span>
                                <div class="button-box">
                                    <a href="#" class="theme-btn btn-style-four"><span class="txt">Berlangganan</span></a>
                                </div>
                                <div class="button-box" style="margin-top: 10px !important; ">
                                    <a href="https://wa.me/+628112113311?text=Hallo%20admin%2C%20saya%20berminat%20paket%20internet%20Gigahome.." class="theme-btn btn-style-four" style="background: #fff !important; color: var(--main-color) !important; border:1px solid #dedede;"><span class="txt">Chat Sales</span></a>
                                </div>
                            </div>
                            <div class="lower-box">
                                <ul class="price-list">
                                    <li>100 Mbps ideal 1-20 Device</li>
                                    <li>Kecepatan 1:1</li>
                                    <li>Internet Unlimited</li>
                                    <li>Tanpa FUP</li>
                                    <li>Gratis Peminjaman Alat</li>
                                    <li>Harga perbulan Flat</li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            
            
        </div>
    </section>
    <!-- End Pricing Section Two / Style Three -->

    <!-- Facility Section -->
   @include('Page.facility')
    <!-- End Facility Section -->

    <!-- Testimonial Section -->
    @include('layouts.testimoni')
    <!-- End Testimonial Section -->


@endsection