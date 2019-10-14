<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Prefecture;
use Intervention\Image\Facades\Image;
use App\Services\CheckExtensionServices;
use App\Services\FileUploadServices;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::orderBy('shop_id', 'desc')->paginate(3);
        return view('welcome', compact('shops'));
    }

    public function all()
    {
        $shops = Shop::orderBy('shop_id', 'desc')->paginate(15);
        return view('shop.all', compact('shops'));
    }

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

    public function create()
    {
        $prefs = config('pref');
        return view('admin.shop_create')->with(['prefs' => $prefs]);
    }

    public function store(Request $request)
    {
        $file = $request['shop_img'];
        $data_name = str_random(16);
        $path = Storage::disk('s3')
        ->putFileAs('/', $file, now().'_'.$data_name.'.jpg', 'public');

        $shop = new Shop();
        $shop->shop_name = $request->shop_name;
        $shop->prefecture_id = $request->prefecture_id;
        $shop->shop_address = $request->shop_address;
        $shop->shop_description = $request->shop_description;
        $shop->shop_img = Storage::disk('s3')->url($path);
        $shop->admin_id = $request->user()->id;
        $shop->save();
        return redirect('/');
    }

    public function edit($shop_id)
    {
        $shop = shop::findOrFail($shop_id);
        $prefectures = Prefecture::all();
        return view('admin.shop_edit', compact('shop', 'prefectures'));
    }

    public function update(Request $request, $shop_id)
    {
        $shop = Shop::findOrFail($shop_id);

        if (!is_null($request['shop_img'])) {
            $file = $request['shop_img'];
            $data_name = str_random(16);
            $path = Storage::disk('s3')
            ->putFileAs('/', $file, now().'_'.$data_name.'.jpg', 'public');

            $shop->shop_img= Storage::disk('s3')->url($path);

        }

        $shop->shop_name = $request->shop_name;
        $shop->prefecture_id = $request->prefecture_id;
        $shop->shop_address = $request->shop_address;
        $shop->shop_description = $request->shop_description;

        $shop->save();

        return redirect()->to('/');
    }

    public function delete(Request $request)
    {
        Shop::find($request->shop_id)->delete();
        return redirect()->to('/admin/shop');
    }
}
