@extends('layouts.layout1')

@section('content')
<section class="reserve-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>検索結果</h2>
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
                          @forelse ($shops as $shop)
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                                  <span class="ti-check-box"></span>
                                    <span class="custom-control-description">
                                        <a href="/prefecture/{{ $shop->prefecture_id }}/{{ $shop->shop_id }}">{{ $shop->shop_name}}</a>
                                    </span>
                                </label> 
                            </div>
                            @empty
                            <a>No shops yet
                            @endforelse
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
@endsection
