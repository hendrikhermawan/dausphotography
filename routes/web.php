<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages/home');
});



// route dari App/Http/controller/HomeController
Route::get('/', [HomeController::class, 'index']);