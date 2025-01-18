<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/login-2', function () {
    return view('pages.login_2');
});
Route::get('/login-3', function () {
    return view('pages.login_3');
});
?>