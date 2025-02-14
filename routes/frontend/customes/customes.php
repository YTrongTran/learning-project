<?php

use App\Http\Controllers\CustomsController;
use Illuminate\Support\Facades\Route;


Route::post('/get-code', [CustomsController::class, 'call_code'])->name('customes.getcode');
Route::get('/add-infor', [CustomsController::class, 'create'])->name('customes.addinfor');
Route::post('/add-infor', [CustomsController::class, 'store'])->name('customes.addinfor');


//

