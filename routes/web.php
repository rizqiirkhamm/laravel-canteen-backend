<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::get('/home', function () {
    return view('pages.dashboard');
});


//routing auth dipindahin ke app/providers/fortifyserviceprovider

// Route::get('/login', function () {
//     return view('pages.auth.login');
// })->name('login');

// Route::get('/register', function () {
//     return view('pages.auth.register');
// })->name('register');



