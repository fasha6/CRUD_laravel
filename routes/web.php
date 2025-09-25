<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\SessionController;
use App\Http\Middleware\iniLogin;
use App\Http\Middleware\iniTamu;
use App\Http\Controllers\KaryawanController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

route::resource('departemen', App\Http\Controllers\DepartemenController::class)->Middleware(iniLogin::class);
route::resource('karyawan',KaryawanController::class)->Middleware(iniLogin::class);
route::get('/login',[SessionController::class,'index'])->Middleware(iniTamu::class);
route::get('/sesi',[SessionController::class,'index'])->Middleware(iniTamu::class);
route::post('/sesi/login',[SessionController::class,'login'])->Middleware(iniTamu::class);
route::get('/sesi/logout',[SessionController::class,'logout']);
