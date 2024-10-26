<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/course', function () {
    return view('pages.course.index');
});

Route::get('/course/detail', function () {
    return view('pages.course.detail');
});

Route::get('/profile/test', function () {
    return view('pages.profile.index');
});

Route::get('/login', function () {
    return view('pages.auth.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.auth.register');
})->name('register');
