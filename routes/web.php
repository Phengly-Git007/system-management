<?php

use App\Http\Controllers\HomeController;
use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// for back to home after logout
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// for goto dashboard while register new user
Route::get('/home',Home::class)->name('home')->middleware('auth');
Route::post('/locale', [HomeController::class,'localization'])->name('locale');
