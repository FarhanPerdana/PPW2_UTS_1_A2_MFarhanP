<?php

use App\Http\Controllers\PemainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pemain', [PemainController::class, 'index']);