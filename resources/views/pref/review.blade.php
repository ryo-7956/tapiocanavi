@extends('layouts.layout2')

@section('content')
    <div class="signupPage">
        <header class="header">
            <div>レビュー作成</div>
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
            <form class="form mt-5" method="POST" action="/review" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>タイトル</label>
                    <input type="text" name="review_titlte" class="form-control">
                </div>
                <div class="form-group">
                    <label>レビュー</label>
                    <textarea class="form-control" name="review_comment" rows="10"></textarea>
                </div>  
                <label for="file_photo" class="rounded-circle userProfileImg">
                    <div class="userProfileImg_description">画像をアップロード</div>
                    <i class="fas fa-camera fa-3x"></i>
                    <input type="file" id="file_photo" name="image">
                    <div class="userImgPreview" id="userImgPreview">
                        <img id="thumbnail" class="userImgPreview_content" accept="image/*" src="">
                        <p class="userImgPreview_text">画像をアップロード済み</p>
                    </div>
                </label>
                <div class="text-center">
                    <button type="submit" class="btn submitBtn">投稿</button>
                </div>
            </form>
        </div>
    </div>
@endsection
