<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::get('/test-step-1', function () {
    return view('pages.test_step_1');
});
Route::get('/test-step-2', function () {
    return view('pages.test_step_2');
});
Route::get('/test-step-3', function () {
    return view('pages.test_step_3');
});
Route::get('/test/{quiz}', [QuizController::class, 'index'])->name('quiz');

Route::get('/test-toeic/{quiz}', [QuizController::class, 'toeic'])->name('quiz.toeic');
?>