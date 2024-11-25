@extends('layouts.aplikasi.app')

@section('content')

<div class="page-wrapper">
  <section class="contact-page-section" style="padding: 50px 0px 25px;">
    <div class="area">
      <div class="row clearfix"></div>
      <div class="">
        <img src="{{ asset('template/images/giga_merah.png')}}" class="rounded mx-auto d-block" width="220px" alt="">
      </div>
      <!-- Contact Form Box -->
      <div class="contact-form-box">
        <!-- Form Title Box -->
        <div class="form-title-box">
          <h3>Masuk Aplikasi Giga</h3>
        </div>
        <div> @if (count($errors) > 0) <div class="alert alert-danger" role="alert">
            <ul> @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach </ul>
          </div> @endif @if(session('success')) <div class="alert alert-success text-center" role="alert">
            {{ session('success') }}
            <br>
            <br>
          </div> @endif </div>
        <!-- Contact Form -->
        <div class="contact-form">
          <form id="login-form">
            <div class="row clearfix"></div>
              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                <input type="text" class="form-control" name="username" value="5110274" placeholder="Nomor ID Pelanggan" required>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                <input type="password" class="form-control" name="password" value="55jn29" placeholder="Password" required>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                <button class="theme-btn btn-style-four" type="submit">
                  <span class="txt">Masuk</span>
                </button>
              </div>
          </form>
        </div>
        </div>
      </div>
      <!-- End Contact Form Box -->
    </div>
  </section>
</div>
    
@push('script')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="{{ asset('aplikasi/js/auth.js')}}"></script>
@endpush

@endsection
