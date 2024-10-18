<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Faker\Factory as Faker;

// Halaman kontak
// Route::get('/contact', function () {
//         return view('contact');
//     })->name('contact');
// Route::post('/contact',function () {
// });
Route::post('/contact', function () {
    $contact = [];
    $faker = Faker::create();
    for($i = 1; $i <= 10; $i++){
        $contact[]=[
        'name' => $faker-> name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber]; 
    }
    return view('contact', ['contact' => $contact]);
})->name('contact');
Route::get('/contact', function () {
    $contact = [];
    $faker = Faker::create();
    for($i = 1; $i <= 10; $i++){
        $contact[]=[
        'name' => $faker-> name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber]; 
    }
    return view('contact', ['contact' => $contact]);
})->name('contact');

// Halaman login
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login',function () {
    return view('login');
});

// Halaman register
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::post('/register',function () {
});


