<?php

use App\Http\Controllers\AnnounceController;
use App\Http\Controllers\userControllre;
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

// register
Route::get("/register",[userControllre::class,'show'])->name("register");
Route::get("/login",[userControllre::class,'formLogin'])->name("login");
Route::post("/login",[userControllre::class,'login'])->name("login");
Route::post("/register",[userControllre::class,'create'])->name("register");
Route::get("/dashboard",[AnnounceController::class,'store']);
Route::get("/logOut",[userControllre::class,'logOut']);
