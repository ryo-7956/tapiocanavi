
@extends('layouts.layout1')

@section('content')
<section class="reserve-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5></h5>
                </div>
                <div class="col-md-6">
                    <div class="reserve-seat-block">
                    
                    <div class="review-btn">
                        <a href="/review/edit/{{ $review->review_id }}" class="btn btn-outline-danger">このレビューを編集する</a>
                    </div>
                    <div class="review-btn">
                        <form method="post" action="/review/delete/{{ $review->review_id }}">
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
                            <p>{{ $review->review_title}}</p>
                            <hr>
                        </div>
                    <div class="booking-checkbox_wrap mt-4">
                        <h5></h5>
                        <hr>
                        <div class="customer-review_wrap">
                            <div class="customer-img">
                            
                                        <h6>{{ $review->review_comment }}</h6>
                            
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