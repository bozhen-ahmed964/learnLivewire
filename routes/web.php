<?php

use App\Livewire\Contact;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;


Route::get('/' , Home::class)->name('homePage');


Route::get('/contact' , Contact::class)->name('contactPage');




Route::get('/about', function () {
    return view('livewire.about');
})->name('aboutPage');



Route::get('/services', function () {
    return view('livewire.services');
})->name('servicePage');

