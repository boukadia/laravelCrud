<?php

use App\Http\Controllers\AnnounceController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index',[AnnounceController::class,"store"]);
Route::post('/create',[AnnounceController::class,"create"])->name("create");
Route::get('{id}/edit',[AnnounceController::class,"edit"])->name("edit");
Route::post('{id}/update',[AnnounceController::class,"update"])->name("update");
Route::get('{announce}/delete',[AnnounceController::class,"destroy"])->name("delete");
Route::get('/form',[AnnounceController::class,"form"]);
