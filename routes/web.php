<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
