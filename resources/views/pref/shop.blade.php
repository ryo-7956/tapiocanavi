@extends('layouts.pref')

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
                        <div class="booking-checkbox">
                            <p>{{ $shop->shop_description}}</p>
                            <hr>
                        </div>
                    <div class="booking-checkbox_wrap mt-4">
                        <h5></h5>
                        <hr>
                        <div class="customer-review_wrap">
                            <div class="customer-img">
                            @forelse ($shop->reviews as $review)
                                        <h6>{{ $review->review_comment }}</h6>
                            @empty
                            <a>No reviews yet</a>
                            @endforelse



                                <img src="images/customer-img1.jpg" class="img-fluid" alt="#">
                                <p></p>
                            </div>
                            <div class="customer-content-wrap">
                                <div class="customer-content">
                                    <div class="customer-review">
                                        <h6></h6>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span class="round-icon-blank"></span>
                                        <p></p>
                                    </div>
                                
                                </div>
                                <p class="customer-text">
                                </p>
                                <p class="customer-text">
                                </p>
                                <ul>
                                    <li><img src="images/review-img1.jpg" class="img-fluid" alt="#"></li>
                                    <li><img src="images/review-img2.jpg" class="img-fluid" alt="#"></li>
                                    <li><img src="images/review-img3.jpg" class="img-fluid" alt="#"></li>
                                </ul>
                                <a href="#"><span class="icon-like"></span>Helpful</a>
                            </div>
                        </div>
                        <hr>
                        
                            
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection