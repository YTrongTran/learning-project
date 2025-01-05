<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::get('/thi-thu', function () {
    return view('pages.practice-test');
});
Route::get('/thi-thu/{quiz}', [QuizController::class, 'index'])->name('quiz');
?>