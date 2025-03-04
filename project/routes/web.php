<?php

use App\Http\Controllers\AnnounceController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index',[AnnounceController::class,"store"]);
Route::post('/create',[AnnounceController::class,"create"])->name("create");
Route::get('/form',[AnnounceController::class,"form"]);
