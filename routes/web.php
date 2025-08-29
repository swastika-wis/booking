<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\WebinarController;
use App\Http\Controllers\WebUserController;
use App\Http\Controllers\ZohoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('index');})->name('index');
Route::get('/login', function () { return view('login');})->name('login');

Route::get('/thankyou', function () { return view('thankyou');})->name('thankyou');


//Route::get('/login', function () { return view('login');})->name('login');
Route::get('/register', function () { return view('register'); })->name('register');

Route::post('/register-webinar', [WebUserController::class, 'store'])->name('register-webinar');
Route::post('/login-aouth',[WebUserController::class,"user_login"])->name('user-login');


//Route::get('start-conference',[WebinarController::class,"start_conference"])->name('start-conference');

//Route::post('/login',[LoginController::class,"login"])->name('login');


Route::middleware(['webuserGroup'])->group(function () {
    // auth checking
    Route::get('/dashboard',[LoginController::class,"dashboard"])->name('dashboard');
});


Route::get('/logout',[LoginController::class,"logout"])->name('logout');

// ZOHO

Route::get('/start-conference/', [ZohoController::class, 'getAccessToken']);
Route::get('/zoho/access_token', [ZohoController::class, 'getAccessToken']);
Route::get('/zoho/connect', [ZohoController::class, 'redirectToZoho']);
Route::get('/zoho/callback', [ZohoController::class, 'handleCallback']);
Route::get('/zoho/webinars', [ZohoController::class, 'listWebinars']);
Route::get('/zoho/webinars/create', [ZohoController::class, 'createWebinar']);


Route::get('/users/dashboard', function () { return view('users.dashboard');})->name('users-dashboard');
