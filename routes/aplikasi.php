<?php

use App\Http\Controllers\Aplikasi\BantuanController;
use App\Http\Controllers\Aplikasi\HomeController;
use App\Http\Controllers\Aplikasi\PembayaranController;
use App\Http\Controllers\Aplikasi\RiwayatController;
use App\Http\Controllers\Aplikasi\LoginPelangganController;
use App\Http\Controllers\Aplikasi\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/login-pelanggan',[LoginPelangganController::class,'index'])->name('login.pelanggan');
Route::post('/login-pelanggan-post',[LoginPelangganController::class,'reqLoginPelanggan'])->name('login.pelanggan.req');


Route::get('/aplikasi-home',[HomeController::class,'index'])->name('home.aplikasi');
Route::get('/aplikasi-riwayat',[RiwayatController::class,'index'])->name('home.riwayat');
Route::get('/aplikasi-bantuan',[BantuanController::class,'index'])->name('home.bantuan');
Route::get('/aplikasi-profile',[ProfileController::class,'index'])->name('home.profile');
Route::get('/aplikasi-pembayaran',[PembayaranController::class,'index'])->name('home.pembayaran');