<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prefecture;

class PrefectureController extends Controller
{
    public function index() {
        $prefectures = Prefecture::all();
        //dd($prefectures->toArray());
        return view('pref.index', ['prefectures' => $prefectures]);
}
}