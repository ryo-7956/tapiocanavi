@extends('layouts.layout1')

@section('content')
    <section class="reserve-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="/prefecture/{{ $review->shop->prefecture_id }}/{{ $review->shop->shop_id }}">              
                        <h6>{{ $review->shop->shop_name }}へのレビュー</h6>
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="reserve-seat-block">
                        <div class="review-btn">
                            <a href="/users/review/edit/{{ $review->review_id }}" class="btn btn-outline-danger">このレビューを編集する</a>
                        </div>
                        <div class="review-btn">
                            <form method="post" action="/users/review/delete/{{ $review->review_id }}">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <input type="submit" value="レビュー削除" class="btn btn-outline-danger" onclick='return confirm("マジで削除すんの？");'>
                            </form>
                        </div>       
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
                            <h4>{{ $review->review_title}}</h4>
                            <hr>
                        </div>
                        <div class="booking-checkbox_wrap mt-4">
                            <div class="customer-review_wrap">
                            <p class="customer-text">
                                {{ $review->review_comment }}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <img src="/storage/images/{{ $review->review_date }}" class="img-fluid" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
