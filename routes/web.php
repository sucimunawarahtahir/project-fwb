<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [Dashboard::class, 'Index'])->name('index'); 
    Route::get('/logout',[Dashboard::class,'logout'])->name('logout');   
});



Route::get('/', [Dashboard::class, 'Login'])->name('login');
Route::post('/loginPost',[Dashboard::class,'loginPost'])->name('login.post');


Route::get('/register',[Dashboard::class,'register'])->name('register');
Route::post('/registerPost',[Dashboard::class,'registerPost'])->name('register.post');
