<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\Register;
use Illuminate\Support\Facades\Route;


Route::group(['middleware'=>'auth'],function () {
    Route::get('/', Home::class)->name('home');
});




Route::group(['middleware'=>'check_user_login'],function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class);
});

