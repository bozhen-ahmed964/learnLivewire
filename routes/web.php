<?php

use App\Livewire\Home;
use Illuminate\Support\Facades\Route;


Route::get('/' , Home::class)->name('homePage');



Route::get('/about', function () {
    return view('livewire.about');
})->name('aboutPage');


Route::get('/contact', function () {
    return view('livewire.contact');
})->name('contactPage');


Route::get('/services', function () {
    return view('livewire.services');
})->name('servicePage');

