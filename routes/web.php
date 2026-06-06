<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

Route::get('/{any?}', function () {
    return view('app');
})->where('any', '.*');

// Keeping the upload store route if needed, but usually it would be an API route now
Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');
