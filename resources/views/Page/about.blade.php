@extends('layouts.app')

@section('content')
    
	<section class="about-us" style="padding-top:100px; padding-bottom:100px;">
		<div class="auto-container">
			<div class="row" style="margin-top: 25px; margin-bottom:85px; ">
				<div class="col-md-6 col-lg-6 col-xl-6" style="margin-top:auto; margin-bottom:auto; display:block;">
					<h2>Apa itu Gigainternet ?</h2>
					<br>
					<p>Merupakan layanan internet broadband menyediakan internet cepat & stabil untuk rumah, kantor & perusahaan dengan beragam paket layanan bisa disesuaikan dengan kebutuhan kamu. Saat ini GIGA internet.id terus berekspansi untuk memenuhi kebutuhan solusi internet bagi masyarakat.</p>
				</div>
				<div class="col-md-6 col-lg-6 col-xl-6">
					<img src="{{ asset('template/images/resource/giga-office.webp')}}" alt="" width="100%">
				</div>
			</div>
			<div class="row" style="margin-top: 25px; margin-bottom:25px; ">
				<div class="col-md-4 col-lg-4 col-xl-4 text-center" style="min-height:200px; border:solid 1px rgba(96, 96, 96, 0.933); display:block; padding:20px;">
                    <div class="" style="display: block; margin-top:auto; margin-bottom:auto;">
					<h4>Internet</h4>
					<br>
					<p>Akses internet cepat dan stabil hingga 100 Mbps</p>
					<img style="height: auto;" src="{{ asset('template/images/gallery/internet.jpg')}}" alt="" width="100%">
                    </div>
				</div>
				<div class="col-md-4 col-lg-4 col-xl-4 text-center" style="min-height:200px; border:solid 1px rgba(96, 96, 96, 0.933); display:block; padding:20px;">
					<h4>TV</h4>
					<br>
					<p>Nikmati Layanan IPTV Layanan TV interaktif dengan kualitas resolusi 4K</p>
					<img style="height: auto;" src="{{ asset('template/images/gallery/tv.jpg')}}" alt="" width="100%">
				</div>
				<div class="col-md-4 col-lg-4 col-xl-4 text-center" style="min-height:200px; border:solid 1px rgba(96, 96, 96, 0.933); display:block; padding:20px;">
					<h4>Pengadaan Barang & Jasa</h4>
					<br>
					<p>Alat Networking, Infrastruktur Networking, Security System</p>
					<img style="height: auto;" src="{{ asset('template/images/gallery/modem.jpg')}}" alt="" width="75%">
				</div>
				
			</div>
		</div>
	</section>

	<!-- Facility Section -->
    @include('Page.facility')
    <!-- End Facility Section -->

    <section class="about-us" style="padding-top:100px; padding-bottom:100px;">
		<div class="auto-container">
			<div class="row" style="margin-top: 25px; margin-bottom:85px; ">
				<div class="col-md-6 col-lg-6 col-xl-6">
                    <center>
					    <img class="phone-img" src="{{ asset('template/images/gallery/0.png')}}" width="250px" style="float: right;" alt="">
                    </center>
				</div>
				<div class="col-md-6 col-lg-6 col-xl-6 app-download"  style="display: block; margin-top: auto; margin-bottom: auto;"> 
					<img src="{{ asset('template/images/giga_merah.png')}}" alt="" width="250px">
                    <h3 style="margin: 40px 0 40px 0;">Transaksi makin mudah dalam genggaman Anda</h3>
                    <a href="#">Pelajari Gigainternet</a>
                    <br><br>
                    <div class="" style="display: inline-block;">
                        <a href="#">
                            <img src="{{ asset('template/images/playstore.svg')}}" width="136px" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('template/images/appstore.svg')}}" width="136px" alt="">
                        </a>
                    </div>
				</div>
			</div>
		</div>
	</section>

	
	<!-- Clients Section -->
	{{-- @include('layouts.client') --}}
	<!-- End Clients Section / Style Two -->

@endsection