<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\ExamAdminController;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['middleware' => 'admin.user'], function (){
    Route::resource('adminExams', ExamAdminController::class);
});

?>