<?php

use Illuminate\Support\Facades\Route;

Route::get('/news', function () {
    return view('pages.news');
})->name('news');
