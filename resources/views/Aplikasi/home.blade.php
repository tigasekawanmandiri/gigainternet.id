@extends('layouts.aplikasi.app')

@section('content')

<section class="container box">
    <div class="box-home">
        
    </div>
</section>

<section class="container section section__height">
    <h2 class="section__title">Selamat datang pelanggan Giga</h2>
    <p>Kami mohon maaf atas keterlambatan dalam penyelesaian aplikasi yang sedang kami kembangkan. Kami menyadari bahwa hal ini dapat menyebabkan ketidaknyamanan, dan kami sangat menghargai kesabaran Anda. Tim kami sedang bekerja keras untuk menyelesaikan aplikasi ini secepat mungkin dengan kualitas terbaik.</p>
</section>

{{ Auth::user()}}
    
@endsection