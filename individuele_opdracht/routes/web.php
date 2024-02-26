<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LedController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [LedController::class, "index"]);
Route::get('/toggle_led', [LedController::class, "toggle_led"]);