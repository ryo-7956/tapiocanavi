@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                @forelse ($shops as $shop)
                </div>
                <h6>{{ $shop->shop_name}}</h6>
            </div>
            @empty
                        <a>No shops yet</a>
                        @endforelse
        </div>
    </div>
</div>
@endsection
