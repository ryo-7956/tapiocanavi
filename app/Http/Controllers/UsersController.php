<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Review;
use Intervention\Image\Facades\Image;
use App\Services\CheckExtensionServices;
use App\Services\FileUploadServices;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('users.show', compact('user'));
    }

    public function show($id)
    {
        $user = User::findorFail($id);
        
        return view('users.show', compact('user'));
    }
    public function edit($id)
    {
        $user = User::findorFail($id);

        return view('users.edit', compact('user'));
    }

    public function update($id, ProfileRequest $request)
    {

        $user = User::findorFail($id);

        if (!is_null($request['image'])) {
            $file = $request['image'];
            $data_name = str_random(16);
            $path = Storage::disk('s3')
            ->putFileAs('/', $file, now().'_'.$data_name.'.jpg', 'public');

            $user->img_name = Storage::disk('s3')->url($path);
        }
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->sex = $request->sex;
        $user->self_introduction = $request->self_introduction;

        $user->save();

        return redirect()->to('/');
    }

    public function delete(Request $request)
    {
        User::find($request->id)->delete();
        return redirect()->to('/');
    }
}
