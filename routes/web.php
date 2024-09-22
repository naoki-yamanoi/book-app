<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

// メニュー
Route::get('/', function () {
    return view('index');
});

// 本一覧
Route::get('/books', function () {
    return view('books');
});

// 本登録ページ
Route::get('/book_new', function () {
    return view('book_new');
});

// 本登録
Route::post('/book_new', function () {
    return view('books');
});

// 本詳細ページ
Route::get('/book', function () {
    return view('books');
});

// 本更新
Route::put('/book', function () {
    return view('books');
});

// 本削除
Route::delete('/book', function () {
    return view('books');
});
