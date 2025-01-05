<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/khoa-hoc/khoa-hoc-thieu-nhi', [CourseController::class, 'childCourse'])->name('child-course');
?>