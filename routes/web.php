<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UserControler;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
})->name('home')->middleware('auth');

Route::view('login', 'auth.login')->name('login')->middleware('guest');
Route::post('login', [AuthController::class, 'login'])->middleware('guest');
Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::middleware('auth')->group(function(){
    Route::singleton('profile',ProfileController::class);
    Route::resource('user',UserControler::class)->middleware('can:admin');
    Route::resource('pelanggan', PelangganController::class);
    Route::resource('kategori', KategoriController::class)->middleware('can:admin');
});

