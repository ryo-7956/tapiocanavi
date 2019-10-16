{{-- @extends('layouts.layout2')

@section('content')
<div class="signupPage">
  <header class="header">
    <div>レビュー作成</div>
  </header>
  <div class='container'>

    <form class="form mt-5" method="POST" action="/{{ $shop->shop_id }}/review/create" enctype="multipart/form-data">
    {{ csrf_field() }}
      <div class="form-group">
        <label>タイトル</label>
        <input type="text" name="review_title" class="form-control">
  
    </div>
      <div class="form-group">
        <label>レビュー</label>
        <textarea class="form-control" name="review_comment" rows="10"></textarea>
        </div>  
    </div>
    <label for="file_photo" class="rounded-circle userProfileImg">
        <div class="userProfileImg_description">画像をアップロード</div>
        <i class="fas fa-camera fa-3x"></i>
        <input type="file" id="file_photo" name="review_date">
      </label>
        <div class="userImgPreview" id="userImgPreview">
        <img id="thumbnail" class="userImgPreview_content" accept="image/*" src="">
        <p class="userImgPreview_text">画像をアップロード済み</p>
      </div>
      <div class="text-center">
      <button type="submit" class="btn submitBtn">投稿</button>
      </div>
    </form>
  </div>
</div>
@endsection --}}

