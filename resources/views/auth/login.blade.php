@extends('layouts.layout2')

@section('content')

<div class='signinPage'>
    <div class='container'>
        <div class='userIcon'>
            <i class="fas fa-user fa-3x"></i>
        </div>
        <h2 class="title">ログイン</h2>
        <form class="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label>メールアドレス</label>
                <input type="email" name="email" class="form-control" placeholder="メールアドレスを入力してください" autofocus>
            </div>
            <div class="form-group">
                <label>パスワード</label>
                <input type="password" name="password" class="form-control" placeholder="パスワードを入力してください">
            </div>
            <div class="form-group text-center">
                <button type="submit" class="loginBtn">ログイン</button>
            </div>
        </form>
        <div class="form-group text-center">
            <form action="{{ route('login') }}" method="POST" class="form">
                {{ csrf_field() }}
                <input type="hidden" name="email" value="test1@test.com">
                <input type="hidden" name="password" value="test1212">
                <button type="submit" class="btn btn-success">テストユーザーでログイン</button>
            </form>
        </div>
        <div class="linkToLogin">
            <a href="{{ route('register') }}">アカウント作成はこちら</a>
        </div>
        <div class="linkToLogin">
            <a href="/">トップページへ戻る</a>
        </div>
    </div>
</div>
@endsection