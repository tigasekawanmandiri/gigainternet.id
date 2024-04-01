@extends('layouts.app')

@section('content')


<section class="" style="background-image: url({{asset('template/images/background/gambar-office.jpg')}}); padding-top:110px; padding-bottom:70px; background-position:right;">
	<div class="auto-container">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<div class="text-center" >
				<h1 style="color: #fff;">Solusi Internet Terbaik untuk Kantormu</h1>
			</div>
		</div>
	

		<div class="col-sm-12 col-md-12" style="margin-top: 60px; background:#fff; border-radius: 15px 0 15px 0; padding:20px;">
			<div class="row text-center" style="color: var(--main-color)">
				<div class="col-sm-3 col-6" style="padding: 5px;">
					<h4 style="color: var(--main-color)">IP Public Static</h4>
				</div>
				<div class="col-sm-3 col-6" style="padding: 5px;">
					<h3 style="color: var(--main-color)">100%</h3>
					<span>Fiber Optic</span>
				</div>
				<div class="col-sm-3 col-6" style="padding: 5px;">
					<h3 style="color: var(--main-color)">1 : 1</h3>
					<span>Simetris Download : Upload</span>
				</div>
				<div class="col-sm-3 col-6" style="padding: 5px;">
					<h3 style="color: var(--main-color)">100%</h3>
					<span>Internet UNLIMITED</span>
				</div>
				
			</div>
		</div>
	</div>
</section>

<!-- Facility Section -->
<section class="facility-section">
	<div class="auto-container">
		<!-- Sec Title -->
		<div class="sec-title">
			<div class="clearfix">
				<div class="pull-left">
					{{-- <div class="title" style="color: var(--main-color);">FASILITAS</div> --}}
					<h2> Nikmati <span style="color: var(--main-color);">GIGAINTERNET.ID</span> <br> Tanpa Batas & Super Cepat</h2>
					<p class="text">Kami hadir untuk jadi <strong><span style="color: var(--main-color);">#TemanAktivitasmu</span></strong> dengan memberikan layanan terbaik</p>
				</div>
				<div class="pull-right">
					{{-- <div class="text">Kami hadir untuk jadi #temanaktifitasmu dengan layanan terbaik</div> --}}
				</div>
			</div>
		</div>
		<!-- End Sec Title -->
		<div class="row clearfix">
		
			<!-- Blocks Column -->
			<div class="blocks-column col-lg-6 col-md-12 col-sm-12">
				<div class="inner-column">
					<div class="row clearfix">
						
						<!-- Facility Block -->
						<div class="facility-block col-lg-12 col-md-12 col-sm-12">
							<div class="inner-box">
								<img src="{{ asset('template/images/icons/ip.png')}}" width="80" alt="">
								<h5><a href="#">IP Public Static</a></h5>
								<div class="text">Kelola perangkat dan layanan dijaringan lokal dari dari jarak jauh, layanan cloud serta akses internet secara keseluruhan.</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- Blocks Column -->
			<div class="blocks-column col-lg-6 col-md-12 col-sm-12">
				<div class="inner-column">
					<div class="row clearfix">
						
						<!-- Facility Block -->
						<div class="facility-block col-lg-12 col-md-12 col-sm-12">
							<div class="inner-box">
								<img src="{{ asset('template/images/icons/security.png')}}" width="80" alt="">
								<h5><a href="#">Keamanan</a></h5>
								<div class="text">Mencegah akses yang tidak sah ke jaringan dengan firewall, VPN, dan teknologi keamanan jaringan lainnya.</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		
			
		</div>
		<div class="row clearfix">
			<!-- Blocks Column -->
			<div class="blocks-column col-lg-4 col-md-12 col-sm-12">
				<div class="inner-column">
					<div class="row clearfix">
						
						<!-- Facility Block -->
						<div class="facility-block col-lg-12 col-md-12 col-sm-12">
							<div class="inner-box">
								<img src="{{ asset('template/images/icons/customer-service.png')}}" width="80" alt="">
								<h5><a href="#">CS Prioritas 24x7</a></h5>
								<div class="text">Kepuasan kamu adalah hal prioritas kami. Kapanpun akan kami layani setulus hati.</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- Blocks Column -->
			<div class="blocks-column col-lg-4 col-md-12 col-sm-12">
				<div class="inner-column">
					<div class="row clearfix">
						
						<!-- Facility Block -->
						<div class="facility-block col-lg-12 col-md-12 col-sm-12">
							<div class="inner-box">
								<img src="{{ asset('template/images/icons/speed-radar.png')}}" width="80" alt="">
								<h5><a href="#">Cepat & Stabil</a></h5>
								<div class="text">Penempatan Server di Indonesia dengan mempertimbangkan kecepatan akses.</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- Blocks Column -->
			<div class="blocks-column col-lg-4 col-md-12 col-sm-12">
				<div class="inner-column">
					<div class="row clearfix">
						
						<!-- Facility Block -->
						<div class="facility-block col-lg-12 col-md-12 col-sm-12">
							<div class="inner-box">
								<img src="{{ asset('template/images/icons/it.png')}}" width="80" alt="">
								<h5><a href="#">Infrastruktur</a></h5>
								<div class="text">Menggunakan infrastruktur yang terbaik untuk melayani seluruh pelanggan.</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Facility Section -->

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
						<h6 style="font-size: 16px;">GIGA OFFICE 10</h6>
						<h4 style="color: var(--main-color); font-size:26px; margin-top:5px !important; margin-bottom:25px;">10 Mbps</h4>
						<hr>
						<h1 style="font-weight:600; font-size:36px; margin:0 0 0 25px;"><span style="font-size:14px; display:block; position: absolute; margin:-25px; padding-top:10px;">Rp. </span> 358.000 <span style="font-size:14px;">/Bulan</span></h1>
						<span style="font-size: 10px;">Belum termasuk PPN 11%</span>
						<div class="button-box">
							<a href="#" class="theme-btn btn-style-four"><span class="txt">Berlangganan</span></a>
						</div>
						<div class="button-box" style="margin-top: 10px !important; ">
							<a href="https://wa.me/+628112113311?text=Hallo%20admin%2C%20saya%20berminat%20paket%20internet%20Gigaoffice.." class="theme-btn btn-style-four" style="background: #fff !important; color: var(--main-color) !important; border:1px solid #dedede;"><span class="txt">Chat Sales</span></a>
						</div>
					</div>
					<div class="lower-box">
						<ul class="price-list">
							<li>IP Public Static</li>
							<li>CS Prioritas 24/7</li>
							<li>10 Mbps ideal 1-3 Device</li>
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
						<h6 style="font-size: 16px;">GIGA OFFICE 20</h6>
						<h4 style="color: var(--main-color); font-size:26px; margin-top:5px !important; margin-bottom:25px;">20 Mbps</h4>
						<hr>
						<h1 style="font-weight:600; font-size:36px; margin:0 0 0 25px;"><span style="font-size:14px; display:block; position: absolute; margin:-25px; padding-top:10px;">Rp. </span> 398.000 <span style="font-size:14px;">/Bulan</span></h1>
						<span style="font-size: 10px;">Belum termasuk PPN 11%</span>
						<div class="button-box">
							<a href="#" class="theme-btn btn-style-four"><span class="txt">Berlangganan</span></a>
						</div>
						<div class="button-box" style="margin-top: 10px !important; ">
							<a href="https://wa.me/+628112113311?text=Hallo%20admin%2C%20saya%20berminat%20paket%20internet%20Gigaoffice.." class="theme-btn btn-style-four" style="background: #fff !important; color: var(--main-color) !important; border:1px solid #dedede;"><span class="txt">Chat Sales</span></a>
						</div>
					</div>
					<div class="lower-box">
						<ul class="price-list">
							<li>IP Public Static</li>
							<li>CS Prioritas 24/7</li>
							<li>20 Mbps ideal 1-4 Device</li>
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
						<h6 style="font-size: 16px;">GIGA OFFICE 30</h6>
						<h4 style="color: var(--main-color); font-size:26px; margin-top:5px !important; margin-bottom:25px;">30 Mbps</h4>
						<hr>
						<h1 style="font-weight:600; font-size:36px; margin:0 0 0 25px;"><span style="font-size:14px; display:block; position: absolute; margin:-25px; padding-top:10px;">Rp. </span> 475.000 <span style="font-size:14px;">/Bulan</span></h1>
						<span style="font-size: 10px;">Belum termasuk PPN 11%</span>
						<div class="button-box">
							<a href="#" class="theme-btn btn-style-four"><span class="txt">Berlangganan</span></a>
						</div>
						<div class="button-box" style="margin-top: 10px !important; ">
							<a href="https://wa.me/+628112113311?text=Hallo%20admin%2C%20saya%20berminat%20paket%20internet%20Gigaoffice.." class="theme-btn btn-style-four" style="background: #fff !important; color: var(--main-color) !important; border:1px solid #dedede;"><span class="txt">Chat Sales</span></a>
						</div>
					</div>
					<div class="lower-box">
						<ul class="price-list">
							<li>IP Public Static</li>
							<li>CS Prioritas 24/7</li>
							<li>30 Mbps ideal 1-6 Device</li>
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
				<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms" style="border-radius: 0 50px 0 50px; border:solid 5px var(--main-color);">
					<div class="upper-box">
						<h6 style="font-size: 16px;">GIGA OFFICE 40</h6>
						<h4 style="color: var(--main-color); font-size:26px; margin-top:5px !important; margin-bottom:25px;">40 Mbps</h4>
						<hr>
						<h1 style="font-weight:600; font-size:36px; margin:0 0 0 25px;"><span style="font-size:14px; display:block; position: absolute; margin:-25px; padding-top:10px;">Rp. </span> 538.000 <span style="font-size:14px;">/Bulan</span></h1>
						<span style="font-size: 10px;">Belum termasuk PPN 11%</span>
						<div class="button-box">
							<a href="#" class="theme-btn btn-style-four"><span class="txt">Berlangganan</span></a>
						</div>
						<div class="button-box" style="margin-top: 10px !important; ">
							<a href="https://wa.me/+628112113311?text=Hallo%20admin%2C%20saya%20berminat%20paket%20internet%20Gigaoffice.." class="theme-btn btn-style-four" style="background: #fff !important; color: var(--main-color) !important; border:1px solid #dedede;"><span class="txt">Chat Sales</span></a>
						</div>
					</div>
					<div class="lower-box">
						<ul class="price-list">
							<li>IP Public Static</li>
							<li>CS Prioritas 24/7</li>
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
							<h6 style="font-size: 16px;">GIGA OFFICE 50</h6>
							<h4 style="color: var(--main-color); font-size:26px; margin-top:5px !important; margin-bottom:25px;">50 Mbps</h4>
							<hr>
							<h1 style="font-weight:600; font-size:36px; margin:0 0 0 25px;"><span style="font-size:14px; display:block; position: absolute; margin:-25px; padding-top:10px;">Rp. </span> 598.000 <span style="font-size:14px;">/Bulan</span></h1>
							<span style="font-size: 10px;">Belum termasuk PPN 11%</span>
							<div class="button-box">
								<a href="#" class="theme-btn btn-style-four"><span class="txt">Berlangganan</span></a>
							</div>
							<div class="button-box" style="margin-top: 10px !important; ">
								<a href="https://wa.me/+628112113311?text=Hallo%20admin%2C%20saya%20berminat%20paket%20internet%20Gigaoffice.." class="theme-btn btn-style-four" style="background: #fff !important; color: var(--main-color) !important; border:1px solid #dedede;"><span class="txt">Chat Sales</span></a>
							</div>
						</div>
						<div class="lower-box">
							<ul class="price-list">
								<li>20 Mbps ideal 1-10 Device</li>
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
							<h6 style="font-size: 16px;">GIGA OFFICE 100</h6>
							<h4 style="color: var(--main-color); font-size:26px; margin-top:5px !important; margin-bottom:25px;">100 Mbps</h4>
							<hr>
							<h1 style="font-weight:600; font-size:36px; margin:0 0 0 25px;"><span style="font-size:14px; display:block; position: absolute; margin:-25px; padding-top:10px;">Rp. </span> Soon <span style="font-size:14px;">/Bulan</span></h1>
							<span style="font-size: 10px;">Belum termasuk PPN 11%</span>
							<div class="button-box">
								<a href="#" class="theme-btn btn-style-four"><span class="txt">Berlangganan</span></a>
							</div>
							<div class="button-box" style="margin-top: 10px !important; ">
								<a href="https://wa.me/+628112113311?text=Hallo%20admin%2C%20saya%20berminat%20paket%20internet%20Gigaoffice.." class="theme-btn btn-style-four" style="background: #fff !important; color: var(--main-color) !important; border:1px solid #dedede;"><span class="txt">Chat Sales</span></a>
							</div>
						</div>
						<div class="lower-box">
							<ul class="price-list">
								<li>20 Mbps ideal 1-20 Device</li>
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

   


@endsection