<?php

use Illuminate\Support\Facades\Route;

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/blog-detail-1', function () {
    return view('pages.blog-detail');
})->name('blog.detail-1');

?>