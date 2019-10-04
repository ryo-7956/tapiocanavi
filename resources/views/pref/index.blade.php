@extends('layouts.layout1')

@section('content')
    <section class="reserve-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>場所一覧から探す</h2>
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
                          <div class="row">
                          @foreach ($prefectures as $prefecture)
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                                  <span class="ti-check-box"></span>
                                    <span class="custom-control-description">
                                        <a href="/prefecture/{{ $prefecture->id }}">{{ $prefecture->name }}</a>
                                    </span>
                                </label> 
                            </div>
                            @endforeach
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection