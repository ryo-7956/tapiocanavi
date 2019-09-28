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
                                    <img src="images/find-place1.jpg" class="img-fluid" alt="img13" />
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
                                            <img src="images/find-place2.jpg" class="img-fluid" alt="img13" />
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
                                            <img src="images/find-place3.jpg" class="img-fluid" alt="img13" />
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
                                            <img src="images/find-place4.jpg" class="img-fluid" alt="img13" />
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
                                            <img src="images/find-place5.jpg" class="img-fluid" alt="img13" />
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
                        <h3>新着口コミ</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 featured-responsive">
                    <div class="featured-place-wrap">
                        <a href="detail.html">
                            <img src="images/featured1.jpg" class="img-fluid" alt="#">
                            <span class="featured-rating-orange">6.5</span>
                            <div class="featured-title-box">
                                <h6>Burger & Lobster</h6>
                                <p>Restaurant </p> <span>• </span>
                                <p>3 Reviews</p> <span> • </span>
                                <p><span>$$$</span>$$</p>
                                <ul>
                                    <li><span class="icon-location-pin"></span>
                                        <p>1301 Avenue, Brooklyn, NY 11230</p>
                                    </li>
                                    <li><span class="icon-screen-smartphone"></span>
                                        <p>+44 20 7336 8898</p>
                                    </li>
                                    <li><span class="icon-link"></span>
                                        <p>https://burgerandlobster.com</p>
                                    </li>

                                </ul>
                                <div class="bottom-icons">
                                    <div class="closed-now">CLOSED NOW</div>
                                    <span class="ti-heart"></span>
                                    <span class="ti-bookmark"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 featured-responsive">
                    <div class="featured-place-wrap">
                        <a href="detail.html">
                            <img src="images/featured2.jpg" class="img-fluid" alt="#">
                            <span class="featured-rating-green">9.5</span>
                            <div class="featured-title-box">
                                <h6>Joe’s Shanghai</h6>
                                <p>Restaurant </p> <span>• </span>
                                <p>3 Reviews</p> <span> • </span>
                                <p><span>$$$</span>$$</p>
                                <ul>
                                    <li><span class="icon-location-pin"></span>
                                        <p>1301 Avenue, Brooklyn, NY 11230</p>
                                    </li>
                                    <li><span class="icon-screen-smartphone"></span>
                                        <p>+44 20 7336 8898</p>
                                    </li>
                                    <li><span class="icon-link"></span>
                                        <p>https://burgerandlobster.com</p>
                                    </li>

                                </ul>
                                <div class="bottom-icons">
                                    <div class="closed-now">CLOSED NOW</div>
                                    <span class="ti-heart"></span>
                                    <span class="ti-bookmark"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 featured-responsive">
                    <div class="featured-place-wrap">
                        <a href="detail.html">
                            <img src="images/featured3.jpg" class="img-fluid" alt="#">
                            <span class="featured-rating">3.2</span>
                            <div class="featured-title-box">
                                <h6>Tasty Hand-Pulled Noodles</h6>
                                <p>Restaurant </p> <span>• </span>
                                <p>3 Reviews</p> <span> • </span>
                                <p><span>$$$</span>$$</p>
                                <ul>
                                    <li><span class="icon-location-pin"></span>
                                        <p>1301 Avenue, Brooklyn, NY 11230</p>
                                    </li>
                                    <li><span class="icon-screen-smartphone"></span>
                                        <p>+44 20 7336 8898</p>
                                    </li>
                                    <li><span class="icon-link"></span>
                                        <p>https://burgerandlobster.com</p>
                                    </li>

                                </ul>
                                <div class="bottom-icons">
                                    <div class="open-now">OPEN NOW</div>
                                    <span class="ti-heart"></span>
                                    <span class="ti-bookmark"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="featured-btn-wrap">
                        <a href="/review" class="btn btn-danger">他のレビューも見てみる</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection