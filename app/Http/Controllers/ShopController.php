<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Prefecture;

class ShopController extends Controller
{
    public function shop() 
    {
        $shops = Shop::all();
        return view('admin.shop', compact('shops'));
    }
    
    public function show($shop_id)
    {
        $shop = shop::findOrFail($shop_id);
        return view('admin.shop_show', compact('shop'));
    }

    public function edit($shop_id)
    {
        $shop = shop::findOrFail($shop_id);
        $prefectures = Prefecture::all();
        return view('admin.shop_edit', compact('shop','prefectures'));
    }

    public function update(Request $request)
    {
        
    }

}
