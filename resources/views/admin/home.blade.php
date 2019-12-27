@extends('layouts.admin')

@section('content')
    <section class="reserve-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>管理画面</h2>
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
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                                  <span class="ti-check-box"></span>
                                    <span class="custom-control-description">
                                    <a href="/admin/shop">店情報を編集</a>
                                    </span>
                                </label> 
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



{{-- @extends('layouts.layout2')

@section('content')
<div class='usershowPage'>
    <div class='container'>
        <div class='userInfo'>
            <div class='userInfo_name'></div>
        </div>
        <div class='userAction'>
            <div class="userAction_edit userAction_common">
                <span><a href="/admin/shop">情報を編集</a></span>
            </div>
        </div>
    </div>
<div>
@endsection --}}
