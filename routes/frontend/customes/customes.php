<?php

use App\Http\Controllers\CustomsController;
use Illuminate\Support\Facades\Route;


Route::post('/get-code', [CustomsController::class, 'call_code'])->name('customes.getcode');



//

