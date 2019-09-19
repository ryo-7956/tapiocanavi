<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shop;

class ShopController extends Controller
{
    public function index($shop_id) {
        $shop = Shop::findorFail($shop_id);
        return view('shop.index', compact('shop'));
    }
}
