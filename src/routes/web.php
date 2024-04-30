<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;




Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
//Route::get('/contacts', [ContactController::class, 'store']);
Route::post('/thanks', [ContactController::class, 'store']);


//Route::middleware('auth')->group(function () {
//Route::get('/admin', [AuthController::class, 'index']);});
