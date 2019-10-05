@extends('layouts.layout1')

@section('content')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 responsive-wrap">
                    <div class="row detail-filter-wrap">
                        <div class="col-md-4 featured-responsive">
                            <div class="detail-filter-text">
                                <h3>店舗一覧</h3>
                            </div>
                        </div>
                    </div>                    
                    <div class="row light-bg detail-options-wrap">
                        @forelse ($shops as $shop)
                        <div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive">
                            <div class="featured-place-wrap">
                                <a href="/prefecture/{{ $shop->prefecture_id }}/{{ $shop->shop_id }}">
                                    <img src="/storage/images/{{ $shop->shop_img }}" class="img-fluid" alt="#">
                                    <div class="featured-title-box">
                                        <h6>{{ $shop->shop_name}}</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @empty
                        <a>No shops yet</a>
                        @endforelse
                    </div>
                    <div class="pagination justify-content-center">{{ $shops->links() }}</div><br>
                </div>
            </div>
        </div>
    </section>
@endsection