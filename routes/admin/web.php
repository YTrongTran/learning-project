<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\ExamAdminController;
use App\Http\Controllers\Voyager\ExamBaseController;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::group(['as' => 'voyager.'], function () {
        Route::group(['middleware' => 'admin.user'], function (){
            $namespacePrefix = 'App\Http\Controllers\Voyager\\';
            Route::resource('adminExams', ExamAdminController::class);
            Route::resource('exams', ExamBaseController::class, ['parameters' => ['exams' => 'id']]);
        });
    });
});

?>