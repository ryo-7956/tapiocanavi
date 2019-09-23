<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

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
    public function store(Request $request)
    {
        $review = new Review();
        $review->user_id = $request -> user()->id;
        $review->review_shop_id = $request -> shop()->shop_id;
        $review->title = $request->title;
        $review->review_comment = $request->comment;
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
