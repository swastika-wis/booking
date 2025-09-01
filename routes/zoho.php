<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {  return view('zoho/login'); })->name('zoho-home');
Route::post('login',[LoginController::class,"login"])->name('admin-login');


Route::get('dashboard',[LoginController::class,"dashboard"])->name('zoho.dashboard');