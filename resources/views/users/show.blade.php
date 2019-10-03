@if($user->id == Auth::id())
@extends('layouts.layout1')

@section('content')
    <div class='usershowPage'>
        <div class='container'>
            <div class='userInfo'>
                <div class='userInfo_img'>
                    <img src="/storage/images/{{$user -> img_name}}">
                </div>
                <div class='userInfo_name'>{{ $user -> name }}</div>
                    <div class='userInfo_selfIntroduction'>{{ $user -> self_introduction }}</div>
                </div>
                <div class='userAction'>
                    <div class="userAction_edit userAction_common">
                        <a href="/users/edit/{{$user->id}}"><i class="fas fa-edit fa-2x"></i></a>          
                        <span>情報を編集</span>
                    </div>
                    <div class='userAction_logout userAction_common'>
                        <a href="/users/review/{{ $user->id }}"><i class="fas fa-cog fa-2x"></i></a>
                        <span>書いたレビュー</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@endif