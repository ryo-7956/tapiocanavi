<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\shop;

class ReviewController extends Controller
{
    // getでreview/にアクセスした時
    public function index()
    {
        $reviews = Review::all();
        return view('review.index', ['reviews' => $reviews]);
    }

    //getでreview/createにアクセスした時
    public function create()
    {
        return view('review.create');
    }

    // postでreview/にアクセスした場合
    public function store(Request $request,$shop_id)
    {
        $review = new Review();
        $review->user_id = $request -> user()->id;
        $review->review_shop_id = $shop_id;
        $review->review_title = $request->review_title;
        $review->review_comment = $request->review_comment;
        $review->review_date = $request->review_date;
        $review->save();
        return redirect('/');
    }

    // getでhello/messageにアクセスされた場合
    //public function show($message)
    //{
        
    //}

    // getでhello/message/editにアクセスされた場合
    //public function edit($message)
    //{
        
    //}

    // putまたはpatchでhello/messageにアクセスされた場合
    //public function update($message)
    //{
        
    //}

    // deleteでhello/messageにアクセスされた場合
    //public function destroy($message)
    //{
        
    //}
}
