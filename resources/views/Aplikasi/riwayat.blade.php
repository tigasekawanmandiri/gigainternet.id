@extends('layouts.aplikasi.app')

@section('content')

<section class="container section section__height">

    <div class="title">
        <p>List Tagihan</p>
    </div>
    <hr>
    <div class="box-request-tagihan">
        <form id="tes_tagihan">
            <input type="hidden" name="nomor" id="nomor_pelanggan">
            <button class="btn btn_show_tagihan">Lihat Tagihan</button>
        </form>
    </div>
    <div class="list_tagihan">
        
    </div>
    

</section>

@push('script')
    <script src="{{ asset('aplikasi/js/riwayat.js')}}"></script>
@endpush
    
@endsection