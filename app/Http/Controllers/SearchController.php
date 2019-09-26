<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shop;

class SearchController extends Controller
{
    public function search(Request $request) {
        //キーワードを取得
        $place = $request->input('place');
        $name = $request->input('shop');

        $query = shop::query();

        //もしキーワードが入力されている場合
        if(!empty($place)|!empty($name)){   
            //shopsテーブルのshop_addressから検索
            $query->where('shop_address', 'like', '%'.$place.'%');
            $query->where('shop_name', 'like', '%'.$name.'%');
        }

        $shops = $query->get();
        //検索フォームへ
        return view('search')
        ->with('shops',$shops);

        //else{//キーワードが入力されていない場合
            //return view('welcome');
        
        //}
        
    }
}
