<?php

namespace App\Http\Controllers\Aplikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    //
    public function index(){
        return view('Aplikasi.pembayaran');
    }
}
