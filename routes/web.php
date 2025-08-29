<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\WebinarController;
use App\Http\Controllers\ZohoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
     return view('login');
});


Route::get('/register', function () {
    return view('register');
})->name('register');


Route::get('/login', function () {
    return view('login');
});


Route::get('start-conference',[WebinarController::class,"start_conference"])->name('start-conference');

Route::post('/login',[LoginController::class,"login"])->name('login');


// auth checking
Route::get('/dashboard',[LoginController::class,"dashboard"])->name('dashboard');


// ZOHO

Route::get('/start-conference/', [ZohoController::class, 'getAccessToken']);
Route::get('/zoho/access_token', [ZohoController::class, 'getAccessToken']);
Route::get('/zoho/connect', [ZohoController::class, 'redirectToZoho']);
Route::get('/zoho/callback', [ZohoController::class, 'handleCallback']);
Route::get('/zoho/webinars', [ZohoController::class, 'listWebinars']);
Route::get('/zoho/webinars/create', [ZohoController::class, 'createWebinar']);
