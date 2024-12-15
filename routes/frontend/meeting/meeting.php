<?php

use App\Http\Controllers\MeetingController;
use Illuminate\Support\Facades\Route;

Route::get('/schedule-a-meeting', [MeetingController::class, 'index'])->name('meeting.index');
Route::post('/meeting', [MeetingController::class, 'createMeeting'])->name('meeting.createMeeting');
Route::get('/meeting-confirm', [MeetingController::class, 'confirm'])->name('meeting.confirm');
?>