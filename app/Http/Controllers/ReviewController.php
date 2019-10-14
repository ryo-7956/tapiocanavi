<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\shop;
use App\User;
use Intervention\Image\Facades\Image;
use App\Services\CheckExtensionServices;
use App\Services\FileUploadServices;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    
    public function index($id)
    {
        $user = user::findorFail($id);
        return view('review.index', compact('user'));
    }

    public function show($review_id)
    {
        $review = Review::findorFail($review_id);
        return view('review.show', compact('review'));
    }
    
    public function create()
    {
        return view('review.create');
    }

    public function store(Request $request, $shop_id)
    {
        $file = $request['review_date'];
        $data_name = str_random(16);
        $path = Storage::disk('s3')
        ->putFileAs('/', $file, now().'_'.$data_name.'.jpg', 'public');

        $review = new Review();
        $review->user_id = $request -> user()->id;
        $review->review_shop_id = $shop_id;
        $review->review_title = $request->review_title;
        $review->review_comment = $request->review_comment;
        $review->review_date = Storage::disk('s3')->url($path);
        $review->save();
        return redirect('/');
    }
    
    public function edit($review_id)
    {
        $review = Review::findorFail($review_id);
        return view('review.edit', compact('review'));
    }

    public function update($review_id, Request $request)
    {
        $review = Review::findOrFail($review_id);

        if (!is_null($request['review_date'])) {
            $file = $request['review_date'];
            $data_name = str_random(16);
            $path = Storage::disk('s3')
            ->putFileAs('/', $file, now().'_'.$data_name.'.jpg', 'public');

            $review->review_date = Storage::disk('s3')->url($path);
        }

        $review->review_title = $request->review_title;
        $review->review_comment = $request->review_comment;

        $review->save();
        return redirect()->to('/');
    }

    
    public function delete(Request $request)
    {
        Review::find($request->review_id)->delete();
        return redirect()->to('/');
    }
}
