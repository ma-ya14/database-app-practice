<?php

use Illuminate\Support\Facades\Route;
// 今回作成した ProductController をこのファイル内で使うために読み込む
use App\Http\Controllers\ProductController;

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

// トップページ（http://localhost/）にアクセスした時の処理
Route::get('/', function () {
    return view('welcome');
});

// http://localhost/products にアクセスがあった場合、ProductController の index メソッドを実行する
Route::get('/products', [ProductController::class, 'index']);