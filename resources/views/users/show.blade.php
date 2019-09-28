@extends('layouts.layout')

@section('content')
<div class="dark-bg sticky-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="/">タピオカなび</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            @guest
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="nav-link">ログイン</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link">新規登録</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a href="/users/show/{{ Auth::user()->id }}" class="nav-link" >
                                    マイページ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" class="nav-link">
                                        ログアウト
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
    

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
      @if($user->id == Auth::id())
        <div class="userAction_edit userAction_common">
          
        
          <a href="/users/edit/{{$user->id}}"><i class="fas fa-edit fa-2x"></i></a>
          
          <span>情報を編集</span>
          
        </div>
      @endif
        <div class='userAction_logout userAction_common'>
        <a href="/users/review/{{ $user->id }}"><i class="fas fa-cog fa-2x"></i></a>
          <span>書いたレビュー</span>
      </div>
    
  </div>
</div>

@endsection