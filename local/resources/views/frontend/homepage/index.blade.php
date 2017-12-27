@extends('frontend.master')
@section('title')
    Thiết Bị Văn Phòng
@stop
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
@stop
@section('description')
    Thiết Bị Văn Phòng. ☎ Hotline: 0999 999 999
@stop
@section('container')
    <div id="homepage-top" class="col-md-12">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        @include('frontend.common.sidebar.category')
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            @include('frontend.common.slider.slider')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="homepage-content" class="col-md-12">
        <div class="row">
            <div class="container">
                <div class="row">
                    @include('frontend.homepage.hp-top')
                    @include('frontend.homepage.hp-list-product')
                    @include('frontend.homepage.hp-bottom')
                </div>
            </div>
        </div>
    </div>
@stop