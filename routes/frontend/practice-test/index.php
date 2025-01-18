<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::get('/test', function () {
    return view('pages.test');
});
Route::get('/test-step-2', function () {
    return view('pages.test_step_2');
});
Route::get('/test-step-3', function () {
    return view('pages.test_step_3');
});
Route::get('/thi-thu/{quiz}', [QuizController::class, 'index'])->name('quiz');
?>