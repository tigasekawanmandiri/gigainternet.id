@extends('layouts.app')

@section('content')

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
								<h5><a href="#">IP Public Dynamic</a></h5>
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

@endsection