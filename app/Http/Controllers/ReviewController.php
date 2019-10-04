<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\shop;
use App\User;
use Intervention\Image\Facades\Image;
use App\Services\CheckExtensionServices;
use App\Services\FileUploadServices;

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

    public function store(Request $request,$shop_id)
    {
        $imageFile = $request['review_date'];

        $list = FileUploadServices::fileUpload($imageFile); 

        list($extension, $fileNameToStore, $fileData) = $list; 

        $data_url = CheckExtensionServices::checkExtension($fileData, $extension);
        
        $review_date = Image::make($data_url);
        
        $review_date->resize(400,400)->save(storage_path() . '/app/public/images/' . $fileNameToStore );

        $review = new Review();
        $review->user_id = $request -> user()->id;
        $review->review_shop_id = $shop_id;
        $review->review_title = $request->review_title;
        $review->review_comment = $request->review_comment;
        $review->review_date = $request->review_date;
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

        if(!is_null($request['review_date'])){
            $imageFile = $request['review_date'];

            $list = FileUploadServices::fileUpload($imageFile);
            list($extension, $fileNameToStore, $fileData) = $list;
            
            $data_url = CheckExtensionServices::checkExtension($fileData, $extension);
            $image = Image::make($data_url);        
            $image->resize(400,400)->save(storage_path() . '/app/public/images/' . $fileNameToStore );

            $review->review_date = $fileNameToStore;
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
