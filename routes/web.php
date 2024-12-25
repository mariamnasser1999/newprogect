<?php

use App\Http\Controllers\themecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/',[themecontroller::class,'index']);
Route::get('/services',[themecontroller::class,'services'])->name('services');
// Route::get('/contact',[themecontroller::class,'contact']);

Route::controller(themecontroller::class)->name('theme.')->group(function(){

    Route::get('/about','about')->name('about');
    // Route::get('/services','services')->name('services');
    Route::get('/contact','contact')->name('contact');
    Route::post('/store','store')->name('store');



});