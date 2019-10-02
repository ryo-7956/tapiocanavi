<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\shop;
use App\User;

class ReviewController extends Controller
{
    
    //public function index($id)
    //{
        //$user_id = $id;
        //$reviews = Review::findorFail($user_id);
        //return view('review.index', ['reviews' => $reviews]);
    //}

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

    
    public function show($id,$review_id)
    {
        
        $review = Review::findorFail($review_id);
        return view('review.show', compact('review')); 
    }

    
    public function edit($review_id)
    {

        $review = Review::findorFail($review_id);
        return view('review.edit', compact('review'));    
    }

    public function update($review_id, Request $request)
    {
        $review = Review::findOrFail($review_id);
        $review->review_title = $request->review_title;
        $review->review_comment = $request->review_comment;
        $review->review_date = $request->review_date;

        $review->save();
        return redirect()->to('/users/review/{id}');
    }

    
    public function delete(Request $request)
    {
        Review::find($request->review_id)->delete();
        return redirect()->to('/users/review/{id}');
    }
}
