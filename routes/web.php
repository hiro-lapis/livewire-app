<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});


/**
 * 以下のルーティングはFortifyで定義されている
 * /register        ユーザー登録
 * /login           ログイン
 * /forgot-password パスワードリセット
 * */
// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
