@if($user->id == Auth::id())
@extends('layouts.layout1')

@section('content')
    <section class="reserve-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>{{ $user->name }}さんの書いたレビュー一覧</h4>
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
                          @forelse ($user->reviews as $review)
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                                  <span class="ti-check-box"></span>
                                    <span class="custom-control-description">
                                        <a href="{{ $user->id }}/show/{{ $review->review_id }}">{{ $review->review_title }}</a>
                                    </span>
                                </label> 
                            </div>
                            @empty
                            <a>No reviews yet</a>
                            @endforelse
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@endif
