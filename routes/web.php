<?php

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\SubdistrictController;
use App\Http\Controllers\Page\AboutController;
use App\Http\Controllers\Page\AreaController;
use App\Http\Controllers\Page\BlogController;
use App\Http\Controllers\Page\ContactController;
use App\Http\Controllers\Page\HomeController;
use App\Http\Controllers\Page\ProductController;
use App\Http\Controllers\Page\PromoController;
use App\Http\Controllers\Page\RegisterController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/zpyuw',[LoginController::class,'index'])->name('login.index');
Route::post('/login-post',[LoginController::class,'loginpost'])->name('login.post');
Route::post('/logout',[LoginController::class,'destroy'])->name('logout.post');

Route::resource('/',HomeController::class);
Route::resource('/About',AboutController::class);
Route::resource('/Contact',ContactController::class);
Route::resource('/Product',ProductController::class);
Route::get('/Product-Home',[ProductController::class,'phome'])->name('phome');
Route::get('/Product-Office',[ProductController::class,'poffice'])->name('poffice');
Route::get('/Product-Dedicated',[ProductController::class,'pdedicated'])->name('pdedicated');
Route::resource('/Promo',PromoController::class);
Route::resource('/Blog',BlogController::class);
Route::resource('/Area',AreaController::class);

Route::get('/Pendaftaran',[RegisterController::class,'index'])->name('pendaftaran.index');
Route::post('/Pendaftaran-store',[RegisterController::class,'store'])->name('pendaftaran.store');


Route::resource('/dashboard',DashboardController::class)->middleware(Authenticate::class);
Route::resource('/package',PackageController::class)->middleware(Authenticate::class);
Route::resource('/subdistrict',SubdistrictController::class)->middleware(Authenticate::class);
Route::resource('/client',ClientController::class)->middleware(Authenticate::class);

