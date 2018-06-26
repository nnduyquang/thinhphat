@extends('frontend.master')
@section('title')
    Đẳng Cấp Đèn Chiếu Sáng Thịnh Phát
@stop
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
@stop
@section('description')
    Công Ty Thiết Bị Chiếu Sáng Đẳng Cấp. ☎ Hotline: 0965 322 239
@stop
@section('container')
    {{--<div id="homepage-top-2">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-3">--}}
                    {{--@include('frontend.common.sidebar.category2')--}}
                {{--</div>--}}
                {{--<div class="col-md-9">--}}
                    {{--@include('frontend.common.slider.slider')--}}
                    {{--@include('frontend.homepage.hp-bannermenu')--}}
                    {{--<div id="homepage-content">--}}
                        {{--@include('frontend.homepage.hp-list-product2')--}}
                        {{--@include('frontend.homepage.hp-bottom')--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    @include('frontend.common.slider.slider')
    @include('frontend.homepage.hp-list-top-sale')
    @include('frontend.homepage.hp-list-product')
@stop