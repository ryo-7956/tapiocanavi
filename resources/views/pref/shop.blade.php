@extends('layouts.layout1')

@section('content')
    <section class="reserve-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>{{ $shop->shop_name }}</h5>
                </div>
                <div class="col-md-6">
                    <div class="reserve-seat-block">
                        @auth
                        <div class="review-btn">
                            <a href="/{{ $shop->shop_id }}/review" class="btn btn-outline-danger">この店のレビューを書く</a>
                        </div>
                        @endauth
                        @guest
                        <div class="review-btn">
                            <a href="/login" class="btn btn-outline-danger">ログインしてこの店のレビューを書く</a>
                        </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="light-bg booking-details_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8 responsive-wrap">
                    <div class="booking-checkbox_wrap">
                        <div class="booking-checkbox_wrap mt-4">
                            <h5>この店のレビュー</h5>
                            <hr>
                            @forelse ($shop->reviews as $review)
                                <div class="customer-review_wrap">
                                    <div class="customer-img">
                                        <img src="{{ $review->user->img_name }}" class="img-fluid-user" alt="#">
                                        <p>{{ $review->user->name }}</p>
                                    </div>
                                    <div class="customer-content-wrap">
                                        <div class="customer-content">
                                            <div class="customer-review">
                                                <h6>{{ $review->review_title }}</h6>
                                                <p>投稿日</p><p>{{ $review->created_at }}</p>
                                            </div>
                                        </div>
                                        <p class="customer-text">{{ $review->review_comment }}</p>
                                        <ul>
                                            <li><img src="{{ $review->review_date }}" class="img-fluid-revi" alt="#"></li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                            @empty
                            <h6>まだこの店に対するレビューはありません。</h6>
                            @endforelse 
                        </div>
                    </div>
                </div>
                    <div class="col-md-4 responsive-wrap">
                        <div class="contact-info">
                            <img src="{{ $shop->shop_img }}" class="img-fluid" alt="#">
                            <div class="address">
                                <span class="icon-location-pin"></span>
                                <p>【場所】</p>
                                <p>{{ $shop->shop_address }}</p>
                            </div>
                            <div class="address">
                                <span class="icon-link"></span>
                                <p>【店情報】</p>
                                <p>{{ $shop->shop_description}}</p>
                            </div>
                        </div> 
                    </div>
                
            </div>
        </div>
    </section>
@endsection