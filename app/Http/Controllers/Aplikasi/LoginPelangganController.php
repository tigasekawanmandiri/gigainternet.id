<?php

namespace App\Http\Controllers\Aplikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginPelangganController extends Controller
{
    //

    public function index(){
        return view('Aplikasi.login');
    }
}
