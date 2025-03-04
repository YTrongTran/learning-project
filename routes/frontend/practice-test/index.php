<?php

use App\Http\Controllers\Quiz\QuizAjaxController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;


Route::get('/quiz-step-1', [QuizController::class, 'step1'])->name('quiz.step1');
Route::get('/quiz-step-2', [QuizController::class, 'step2'])->name('quiz.step2');
Route::post('/register-infor', [QuizController::class, 'registerInfor'])->name('quiz.registerInfor');
Route::post('/quiz-step-3', [QuizController::class, 'step3'])->name('quiz.step3');

Route::get('/quiz-superkids/{id}', [QuizController::class, 'superkids'])->name('quiz.superkid');
// Route::post('/quiz-submit-superkids', [QuizController::class, 'submitQuizEnglishHub'])->name('quiz.englishHub');

Route::get('/quiz-teen/{id}', [QuizController::class, 'teen'])->name('quiz.teen');
Route::get('/quiz-elderly/{id}', [QuizController::class, 'communicate'])->name('quiz.elderly');


Route::get('/quiz-toeic/{id}', [QuizController::class, 'toeic'])->name('quiz.toeic');
Route::post('/quiz-submit-toeic', [QuizController::class, 'submitQuizToeic'])->name('quiz.submitToeic');

Route::get('/quiz-ielts/{id}', [QuizController::class, 'quizIelts'])->name('quiz.ielts');
Route::post('/quiz-submit-ielts', [QuizController::class, 'submitQuizIelts'])->name('quiz.submitIelts');

// call ajax
Route::group([
	'as' => 'quiz.',
	'prefix' => 'ajax',
	'namespace' => 'Quiz',
], function() {
    Route::post('/quiz-submit-superkids', [QuizAjaxController::class, 'submitQuizSuperkids'])->name('superkids');
    Route::post('/quiz-submit-elderly', [QuizAjaxController::class, 'submitQuizElderly'])->name('elderlys');
    Route::post('/quiz-submit-teen', [QuizAjaxController::class, 'submitQuizTeen'])->name('teens');
    //code otp
    Route::post('/get-code', [QuizAjaxController::class, 'callCode'])->name('getcode');
});


