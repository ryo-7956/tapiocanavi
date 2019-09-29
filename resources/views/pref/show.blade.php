@extends('layouts.pref')

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
                                <a href="/users/show/{{ Auth::user()->id }}" class="nav-link" >マイページ</a>
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

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 responsive-wrap">
                    <div class="row detail-filter-wrap">
                        <div class="col-md-4 featured-responsive">
                            <div class="detail-filter-text">
                                <h3>{{ $prefecture->name }}</h3>
                            </div>
                        </div>
                    </div>                    
                    <div class="row light-bg detail-options-wrap">
                        @forelse ($prefecture->shops as $shop)
                        <div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive">
                            <div class="featured-place-wrap">
                                <a href="/prefecture/{{ $prefecture->id }}/{{ $shop->shop_id }}">
                                    <img src="/images/featured1.jpg" class="img-fluid" alt="#">
                                    <div class="featured-title-box">
                                        <h6>{{ $shop->shop_name}}</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @empty
                        <a>No shops yet</a>
                        @endforelse
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </section>
@endsection

    