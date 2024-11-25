<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{ asset('aplikasi/assets/css/styles.css') }}">

        <title>Aplikasi Pelanggan GIGA</title>
        
        @stack('style')

    </head>
    <body>
        <!--=============== HEADER ===============-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Hallo, <span id="nama_pelanggan"></span></a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="{{ route('home.aplikasi')}}" class="nav__link {{ Request::is('/aplikasi-home') ? 'active-link' : '' }}">
                                <i class='bx bx-home-alt nav__icon'></i>
                                <span class="nav__name">Home</span>
                            </a>
                        </li>
                        
                        <li class="nav__item">
                            <a href="{{ route('home.riwayat')}}" class="nav__link {{ Request::is('/aplikasi-riwayat') ? 'active-link' : '' }}">
                                <i class='bx bx-user nav__icon'></i>
                                <span class="nav__name">History</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="{{ route('home.bantuan')}}" class="nav__link {{ Request::is('/aplikasi-bantuan') ? 'active-link' : '' }}">
                                <i class='bx bx-briefcase-alt nav__icon'></i>
                                <span class="nav__name">Bantuan</span>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="{{ route('home.profile')}}" class="nav__link {{ Request::is('/aplikasi-profile') ? 'active-link' : '' }}">
                                <i class='bx bx-message-square-detail nav__icon'></i>
                                <span class="nav__name">Profile</span>
                            </a>
                        </li>

                    </ul>
                </div>

                <img src="{{ asset('aplikasi/assets/img/perfil.png') }}" alt="" class="nav__img">
            </nav>
        </header>

        <main>
			@yield('content')
        </main>
        

        <!--=============== MAIN JS ===============-->
        {{-- <script src="{{ asset('aplikasi/assets/js/main.js') }}"></script> --}}
        <script src="{{ asset('template/js/jquery.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @stack('script')

        @if ($errors->any()) 
        @foreach ($errors->all() as $error) 
        <script>
            Swal.fire({
            position: "top-end",
            icon: "success",
            title: '{{ $error }}',
            showConfirmButton: false,
            timer: 1500
            });
        </script> 
        @endforeach
        @endif 

        @if (session()->get('error')) 
        <script>
            Swal.fire({
            icon: "error",
            title: '{{ session()->get('error') }}',
            showConfirmButton: false,
            timer: 1500
            });
        </script> 
        @endif

        @if (session()->get('success')) 
        <script>
            Swal.fire({
            icon: "success",
            title: '{{ session()->get('success') }}',
            showConfirmButton: false,
            timer: 1500
            });
        </script> 
        @endif

        <script>
            var token = localStorage.getItem('user_token');
            var id = localStorage.getItem('id');
            var nomor = localStorage.getItem('nomor');
            var otp = localStorage.getItem('otp');
            var pelanggan = localStorage.getItem('pelanggan');

            if (window.location.pathname == '/login-pelanggan' ) {
                if(token != null ){
                    window.open('/aplikasi-home','_self');
                    $("#nama_pelanggan").html(pelanggan);
                }
            } else {
                if(token == null){
                    window.open('/login-pelanggan','_self');
                }
            }

            $("#nama_pelanggan").html(pelanggan);

        </script>
    </body>
</html>