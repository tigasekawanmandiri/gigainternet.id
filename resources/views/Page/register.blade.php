@extends('layouts.app')

@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{ asset('template/images/background/page.png') }})">
        <div class="auto-container">
            <h2>Registrasi GIGA</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li>Registrasi</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
    	<div class="auto-container">
        	<div class="row clearfix">
				
            </div>
        
			<!-- Contact Form Box -->
			<div class="contact-form-box">
				<!-- Form Title Box -->
				<div class="form-title-box">
					<h3>Registrasi</h3>
				</div>

				<div>
					@if (count($errors) > 0)
					<div class="alert alert-danger" role="alert">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif

					@if(session('success'))
					<div class="alert alert-success text-center" role="alert">
						{{ session('success') }}
						<br>
						<br>
						<a href="https://wa.me/+628112113311?text=Halo%20Admin%2C%20%0Asaya%20sudah%20melakukan%20registrasi%20melalui%20Website%20Official%20Gigainternet.id%20%0A%0ATerima%20kasih%2C%0A">
							<button class="theme-btn btn-style-five"><span class="txt">Hubungi Langsung Ke WA</span></button>
						</a>
					</div>
					@endif

				</div>
				
				<!-- Contact Form -->
				<div class="contact-form">
					<form method="post" action="{{ route('pendaftaran.store')}}" enctype="multipart/form-data">
                        @csrf
						<div class="row clearfix">
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<select name="package_id" id="package_id" class="form-control-lg" required>
                                    <option>Pilih Paket Giga</option>
                                    @foreach ($packages as $p)
										<option value="{{$p->id}}" @selected(old('package_id') == $p->id)>{{$p->package_name}} {{$p->speeds}}Mbps | Rp{{number_format($p->price,0,',','.')}}</option>    
									@endforeach
                                </select>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Nama Sesuai KTP" required>
							</div>

                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="number" class="form-control" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==16) return false;" name="nik" value="{{old('nik')}}" placeholder="NIK" required>
							</div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="file" class="form-control" name="documents" required>
                                <span style="color: red; font-size:10px;">Upload Foto KTP dengan format jpeg/png/pdf dengan ukuran file max 1mb.</span>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email Address" required>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="number" class="form-control" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==13) return false;" name="phone_1" value="{{old('phone_1')}}" placeholder="Telepon 1" required>
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 form-group">
								<input type="number" class="form-control" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==13) return false;" name="phone_2" value="{{old('phone_2')}}" placeholder="Telepon 2" required>
							</div>

							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<textarea class="form-control" name="address" placeholder="Alamat Lengkap Lokasi" rows="5" cols="10">{{old('address')}}</textarea>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<input class="form-control" name="sharelok" placeholder="Link Lokasi Gmaps" value="{{old('sharelok')}}">
							</div>

							<div class="col-lg-12 col-md-12 col-sm-12 form-group">
								<textarea class="form-control" name="catatan" placeholder="Catatan"  rows="5" cols="10">{{old('catatan')}}</textarea>
							</div>
							
							<div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
								<button class="theme-btn btn-style-four" type="submit"><span class="txt">Kirim</span></button>
							</div>
							
						</div>
					</form>
				</div>
				
			</div>
			<!-- End Contact Form Box -->
			
		</div>
    </section>
    <!-- End Contact Page Section -->

@endsection