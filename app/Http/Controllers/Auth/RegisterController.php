<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Services\CheckExtensionServices;
use App\Services\FileUploadServices;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'image' => 'file|image|mimes:jpeg,png,jpg,gif|max:2000',
            'self_introduction' => 'string|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $file = $data['image'];
        $data_name = str_random(16);
        $path = Storage::disk('s3')->putFileAs('/', $file, now().'_'.$data_name.'.jpg', 'public');

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'self_introduction' => $data['self_introduction'],
            'sex' => $data['sex'],
            'img_name' => Storage::disk('s3')->url($path),
        ]);
    }
}


        //$file = $data['image'];

        // 画像の名前を取得
        //$filename = $data['image']->getClientOriginalName();
        // 画像の拡張子を取得
        //$extension = $data['image']->getClientOriginalExtension();
        //オリジナル名作成
        //$fileNameToStore = $filename . '_' . time();

        // 画像をリサイズ
        //$resize_img = Image::make($file)->resize(400, 400)->encode($extension);

        // s3のuploadsファイルに追加
        //$path = Storage::disk('s3')->putFileAs('/' .$resize_img,$fileNameToStore, 'public');

        //$imagefile = $data['image'];

        //$list = FileUploadServices::fileUpload($imageFile); 

        //その画像の拡張子、ファイル名_時間_拡張子、画像ファイル
        //list($extension, $fileNameToStore, $fileData) = $list;

        
        //$filename = $data['image']->getClientOriginalName();
        
        //$resize_img = Image::make($file)->resize(400, 400)->encode($extension);

        //('/'  .画像の名前,リサイズした画像、'public')
        //$path = Storage::disk('s3')->put('/' .$filename,(string)$resize_img, 'public');

        //return User::create([
            //'name' => $data['name'],
            //'email' => $data['email'],
            //'password' => bcrypt($data['password']),
            //'self_introduction' => $data['self_introduction'],
            //'sex' => $data['sex'],
            //'img_name' => $path,