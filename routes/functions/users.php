<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/api/users/login', function (Request $request) {
    $data = $request->only([
        'u', 'p',
    ]);

    /* $user = DB::table('user') */
    /* -> where(function ($q) use $(query) { */
    /* 	$q->where( */
    /* 			'username', $usernae) */
    /* 		->orwhere('email', $username) */
    /* }) */
    /* -> where('password', $password); */

    return response()->json([
        'user' => $_GET['u'],
        'password' => $data['p'],
    ]);
});
