@extends('layouts.layout2')

@section('content')
    <div class="signupPage">
        <header class="header">
            <div>店情報を編集</div>
        </header>
        <div class='container'>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="form mt-5" method="POST" action="/admin/shop/update/{{ $shop->shop_id }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label for="file_photo" class="rounded-circle userProfileImg">
                    <div class="userProfileImg_description">画像をアップロード</div>
                    <i class="fas fa-camera fa-3x"></i>
                    <input type="file" id="file_photo" name="shop_img">
                </label>
                <div class="userImgPreview" id="userImgPreview">
                    <img id="thumbnail" class="userImgPreview_content" accept="image/*" src="">
                    <p class="userImgPreview_text">画像をアップロード済み</p>
                </div>
                <div class="form-group">
                    <label>店名</label>
                    <input type="text" name="shop_name" class="form-control" value="{{ $shop->shop_name }}">
                </div>
                <div class="form-group">
                    <div><label>都道府県番号</label></div>
                    <select name="prefecture_id">
                    <option selected>{{ $shop->prefecture_id }}</option>
                    @foreach($prefectures as $prefecture )
                    <option>{{ $prefecture->id }}.{{ $prefecture->name }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>店住所</label>
                    <input type="text" name="shop_address" class="form-control" value="{{ $shop->shop_address }}">
                </div>
                <div class="form-group">
                    <label>店詳細</label>
                    <textarea class="form-control" name="shop_description" rows="6">{{ $shop->shop_description }}</textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn submitBtn">変更する</button>
                    <div class="linkToLogin">
                        <a href="/">トップページへ戻る</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection