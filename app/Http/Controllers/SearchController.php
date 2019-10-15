<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shop;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $this->validate($request, [
            'place'  => 'required',
        ]);

        $place = $request->input('place');

        $query = shop::query();
        
        if (!empty($place)) {
            $query->where('shop_address', 'like', '%' . $place . '%')
            ->orWhere('shop_name', 'Like', '%' . $place . '%');
        } 
        $shops = $query->get();
        return view('search')
        ->with('shops', $shops);
    }
}
    
        //$place = $request->input('place');

        //$query = shop::query();
        
        //if (!empty($place)) {
          //  $query->where('shop_address', 'like', '%' . $place . '%')
            //->orWhere('shop_name', 'Like', '%' . $place . '%');
        //} else {
            //return view('welcome');
        //}

        //$shops = $query->get();
        //return view('search')
        //->with('shops', $shops);