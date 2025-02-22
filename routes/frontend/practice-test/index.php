<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::get('/quiz-step-1', [QuizController::class, 'step1'])->name('quiz.step1');
Route::post('/quiz-step-2', [QuizController::class, 'step2'])->name('quiz.step2');
Route::post('/quiz-step-3', [QuizController::class, 'step3'])->name('quiz.step3');

Route::get('/quiz-superkids/{quiz}', [QuizController::class, 'superkids'])->name('quiz.superkids');
//call ajax submit form superkids
Route::post('/quiz-submit-english-hub', [QuizController::class, 'submitQuizEnglishHub'])->name('quiz.englishHub');

Route::get('/quiz-toeic/{quiz}', [QuizController::class, 'toeic'])->name('quiz.toeic');
Route::post('/quiz-submit-toeic', [QuizController::class, 'submitQuizToeic'])->name('quiz.submitToeic');

Route::get('/quiz-ielts/{quiz}', [QuizController::class, 'quizIelts'])->name('quiz.ielts');
Route::post('/quiz-submit-ielts', [QuizController::class, 'submitQuizIelts'])->name('quiz.submitIelts');


