@extends('layouts.app')

@section('content')
    <!-- Page Title -->
    {{-- <section class="page-title" style="background-image: url({{ asset('template/images/background/page.png') }})">
        <div class="auto-container">
			<h2>Contact us</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html">Home</a></li>
				<li>Contact us</li>
			</ul>
        </div>
    </section> --}}
    <!-- End Page Title -->
	
	<!-- Contact Page Section -->
    <section class="contact-page-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<h4>Contact Details</h4>
						</div>
						<div class="lower-box">
							<ul class="info-list">
								<li>
									<span class="icon flaticon-map"></span>
									Jl. Surya Kencana No. 71, <br> Sawahgede, Cianjur 43212
								</li>
								<li>
									<span class="icon flaticon-call"></span>
									<a href="tel:+622632262111">Call (0263) 2262111</a><br>
                    				<a href="tel:+62817200017">Customer Service 0817 200 017</a><br>
								</li>
								<li>
									<span class="icon flaticon-email-1"></span>
									<a href="mailto:marketing@gigainternet.id">marketing@gigainternet.id</a><br>
                    				<a href="www.gigainternet.id">www.gigainternet.id</a>
								</li>
							</ul>
							<div class="timing"></div>
							<!-- Social Box -->
							<ul class="social-box">
								<li class="facebook"><a href="#" class="fa-brands fa-square-facebook"></a></li>
								<li class="twitter"><a href="#" class="fa-brands fa-youtube"></a></li>
								<li class="google"><a href="#" class="fa-brands fa-square-instagram"></a></li>
								<li class="dribbble"><a href="#" class="fa-brands fa-tiktok"></a></li>
							</ul>
							
						</div>
					</div>
				</div>
				
				<!-- Map Column -->
				<div class="map-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<!--Map Outer-->
						<div class="map-outer">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15846.215557400725!2d107.1325538!3d-6.8239826!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68531c1f73a0ad%3A0x29949d8a4d7560bf!2sGigainternet.id!5e0!3m2!1sen!2sid!4v1709316689033!5m2!1sen!2sid" allowfullscreen=""></iframe>
						</div>
					</div>
				</div>
				
            </div>
        
			<!-- Contact Form Box -->
			{{-- <div class="contact-form-box">
				<!-- Form Title Box -->
				<div class="form-title-box">
					<h3>Send a Message</h3>
				</div>
				
				<!-- Contact Form -->
				<div class="contact-form">
					<form method="post" action="sendemail.php">
						<div class="row clearfix">
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="username" placeholder="Name" required>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="email" name="email" placeholder="Email Address" required>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="company" placeholder="Company" required>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" name="phone" placeholder="Phone" required>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<textarea class="darma" name="message" placeholder="Write Your Message..."></textarea>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
								<button class="theme-btn btn-style-four" type="submit" name="submit-form"><span class="txt">Submit Now</span></button>
							</div>
							
						</div>
					</form>
				</div>
				
			</div> --}}
			<!-- End Contact Form Box -->
			
		</div>
    </section>
    <!-- End Contact Page Section -->
@endsection