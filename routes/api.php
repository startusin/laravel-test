<?php

use App\Http\Controllers\SubmissionController;
use Illuminate\Support\Facades\Route;

Route::post('/submit', [SubmissionController::class, 'store'])->name('submission-store');
