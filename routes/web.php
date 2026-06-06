<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register-upload', function () {
    return view('upload');
})->name('upload.view');

Route::get('/file/{id}', function ($id) {
    return view('file');
})->name('file.view');

Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');

Route::get('/testing', function () {

    DB::table('users')->insert([
        'name' => 'testmode',
    ]);

    $user = DB::table('users')->where('id', 1)->first();
    if ($user) {
        return response()->json($user);
    }

    return response()->json([
        'error' => 'No user found',
    ]);
});

Route::get('/user', function () {
    return response()->json([
        'user' => 'name',
    ]);
});
