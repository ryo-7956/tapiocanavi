
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
