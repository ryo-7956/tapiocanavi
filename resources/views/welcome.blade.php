@extends('layouts.top')

@section('content')
    <section class="slider d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">                
                <div class="slider-title_box">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-content_wrap">
                                <h1>タピオカ店の口コミサイト</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-10">
                            <form action="{{ url('search') }}" method="get"　class="form-wrap mt-4">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <input type="text" placeholder="場所・店名 [例 東京、Gongcha(ゴンチャ)]" class="btn-group1" name="place">
                                    <button type="submit" class="btn-form"><span class="icon-magnifier search-icon"></span>検索<i class="pe-7s-angle-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </section>
    <section class="main-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                        <h3>場所から探す</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="/prefecture/13">
                        <div class="find-place-img_wrap">
                            <div class="grid">
                                <figure class="effect-ruby">
                                    <img src="images/tokyo.jpg" class="img-fluid" alt="img13" />
                                    <figcaption>
                                        <h5>東京</h5>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <div class="row find-img-align">
                        <a href="/prefecture/14">
                            <div class="col-md-12">
                                <div class="find-place-img_wrap">
                                    <div class="grid">
                                        <figure class="effect-ruby">
                                            <img src="images/kanagawa.jpg" class="img-fluid" alt="img13" />
                                            <figcaption>
                                                <h5>神奈川</h5>          
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row">
                        <a href="/prefecture">
                            <div class="col-md-12">
                                <div class="find-place-img_wrap">
                                    <div class="grid">
                                        <figure class="effect-ruby">
                                            <img src="images/all.jpg" class="img-fluid" alt="img13" />
                                            <figcaption>
                                                <h5>場所一覧</h5>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row find-img-align">
                        <a href="/prefecture/40">
                            <div class="col-md-12">
                                <div class="find-place-img_wrap">
                                    <div class="grid">
                                        <figure class="effect-ruby">
                                            <img src="images/fukuoka.jpg" class="img-fluid" alt="img13" />
                                            <figcaption>
                                                <h5>福岡</h5>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row">
                        <a href="/prefecture/27">
                            <div class="col-md-12">
                                <div class="find-place-img_wrap">
                                    <div class="grid">
                                        <figure class="effect-ruby">
                                            <img src="images/oosaka.jpg" class="img-fluid" alt="img13" />
                                            <figcaption>
                                                <h5>大阪</h5>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-block light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                        <h3>新着店舗</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($shops as $shop)
                    <div class="col-md-4 featured-responsive">
                        <div class="featured-place-wrap">
                            <a href="/prefecture/{{ $shop->prefecture_id }}/{{ $shop->shop_id }}">
                                <img src="{{ $shop->shop_img }}" class="img-fluid" alt="#">
                                <div class="featured-title-box">
                                    <h6>{{ $shop->shop_name }}</h6>
                                    <ul>
                                        <li><span class="icon-link"></span>
                                            <p>{{ str_limit("$shop->shop_address",$limit =20,'…') }}</p>
                                        </li> 
                                        <li><span class="icon-link"></span>
                                            <p>{{ str_limit("$shop->shop_description",$limit =30,'…') }}</p>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="featured-btn-wrap">
                        <a href="/shop/all" class="btn btn-danger">店舗一覧へ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection