@extends('layouts.app')

@push('style')
	<link rel="stylesheet" href="{{ asset('template/assets/css/flickity.css')}}">
	<link rel="stylesheet" href="{{ asset('template/assets/css/custome.css')}}">
@endpush

@section('content')

    <!-- Page Title -->
    <section class="banner-phome" style="margin-top: 20px;">
		<div class="carousel"
		data-flickity='{ "wrapAround": true }'>
			<div class="carousel-cell">
				<img src="{{ asset('template/images/p-home/promo-1.webp')}}" alt="">
			</div>
			<div class="carousel-cell">
				<img src="{{ asset('template/images/p-home/promo-2.webp')}}" alt="">
			</div>
			<div class="carousel-cell">
				<img src="{{ asset('template/images/p-home/promo-2.webp')}}" alt="">
			</div>
		</div>
	</section>
    <!--End Page Title-->

    

	<!-- Pricing Section Two / Style Three -->
	<section class="pricing-section-two style-three" style="background-image: url({{ asset('template/images/background/pattern-7.png') }})">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="separator"></div>
				<h2>Discover Our Best Plans</h2>
			</div>
			<!-- End Sec Title -->
			
			<!-- Price Block Two -->
			<div class="price-block-two">
				<div class="inner-box">
					<!-- Title Box -->
					<div class="title-box">
						<div class="title">TV + Internet</div>
						<h4><a href="#">Easy Surfing</a></h4>
						<div class="text">Choose from a range of fast, reliable Internet speeds to fit your needs</div>
					</div>
					<!-- End Title Box -->
					
					<!-- Middle Content -->
					<div class="middle-content">
						<div class="middle-inner">
							<ul class="icon-list">
								<li><span class="icon"><img src="{{ asset('template/images/icons/service-1.svg') }}" alt="" /></span></li>
								<li><span class="icon"><img src="{{ asset('template/images/icons/service-2.svg') }}" alt="" /></span></li>
							</ul>
							<ul class="price-list">
								<li>Internet with a 100Mbps</li>
								<li>Connect multiple users</li>
								<li>WiFi router & prevention</li>
								<li>Unlimited devices</li>
							</ul>
						</div>
					</div>
					<!-- End Middle Content -->
					
					<!-- Price Box -->
					<div class="price-box">
						<div class="price">$55.00<span>Per Month</span></div>
						<a href="#" class="theme-btn btn-style-four"><span class="txt">Get Started</span></a>
					</div>
					<!-- End Price Box -->
					
				</div>
			</div>
			<!-- End Price Block Two -->
			
			<!-- Price Block Two -->
			<div class="price-block-two active">
				<div class="inner-box">
					<!-- Title Box -->
					<div class="title-box">
						<div class="title">Internet + Phone</div>
						<h4><a href="#">Home Basic</a></h4>
						<div class="text">Choose from a range of fast, reliable Internet speeds to fit your needs</div>
					</div>
					<!-- End Title Box -->
					
					<!-- Middle Content -->
					<div class="middle-content">
						<div class="middle-inner">
							<ul class="icon-list">
								<li><span class="icon"><img src="{{ asset('template/images/icons/service-1.svg') }}" alt="" /></span></li>
								<li><span class="icon"><img src="{{ asset('template/images/icons/service-3.svg') }}" alt="" /></span></li>
							</ul>
							<ul class="price-list">
								<li>Internet with a 100Mbps</li>
								<li>Connect multiple users</li>
								<li>WiFi router & prevention</li>
								<li>Unlimited devices</li>
							</ul>
						</div>
					</div>
					<!-- End Middle Content -->
					
					<!-- Price Box -->
					<div class="price-box">
						<div class="price">$75.00<span>Per Month</span></div>
						<a href="#" class="theme-btn btn-style-four"><span class="txt">Get Started</span></a>
					</div>
					<!-- End Price Box -->
					
				</div>
			</div>
			<!-- End Price Block Two -->
			
			<!-- Price Block Two -->
			<div class="price-block-two">
				<div class="inner-box">
					<!-- Title Box -->
					<div class="title-box">
						<div class="title">TV + Internet + Phone</div>
						<h4><a href="#">Premium Fast</a></h4>
						<div class="text">Choose from a range of fast, reliable Internet speeds to fit your needs</div>
					</div>
					<!-- End Title Box -->
					
					<!-- Middle Content -->
					<div class="middle-content">
						<div class="middle-inner">
							<ul class="icon-list">
								<li><span class="icon"><img src="{{ asset('template/images/icons/service-1.svg')}}" alt="" /></span></li>
								<li><span class="icon"><img src="{{ asset('template/images/icons/service-2.svg')}}" alt="" /></span></li>
								<li><span class="icon"><img src="{{ asset('template/images/icons/service-3.svg')}}" alt="" /></span></li>
							</ul>
							<ul class="price-list">
								<li>Internet with a 100Mbps</li>
								<li>Connect multiple users</li>
								<li>WiFi router & prevention</li>
								<li>Unlimited devices</li>
							</ul>
						</div>
					</div>
					<!-- End Middle Content -->
					
					<!-- Price Box -->
					<div class="price-box">
						<div class="price">$55.00<span>Per Month</span></div>
						<a href="#" class="theme-btn btn-style-four"><span class="txt">Get Started</span></a>
					</div>
					<!-- End Price Box -->
					
				</div>
			</div>
			<!-- End Price Block Two -->
			
		</div>
	</section>
	<!-- End Pricing Section Two / Style Three -->


@endsection

@push('script')
	<script src="{{ asset('template/assets/js/flickity.js')}}"></script>
@endpush