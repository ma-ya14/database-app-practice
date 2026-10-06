<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// クエリビルダ（DBファサード）を使用するために読み込み
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * 商品一覧を表示する処理
     */
    public function index()
    {
        // 1. products テーブルから全件データを取得する
        $products = DB::table('products')->get();

        // 2. 取得した商品データを 'products.index' ビューに渡して表示する
        return view('products.index', ['products' => $products]);
    }
}