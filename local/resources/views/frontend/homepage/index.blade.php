@extends('frontend.master')
@section('title')
    Thế Giới Đèn Led
@stop
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
@stop
@section('description')
    Thế Giới Đèn Led. ☎ Hotline: 0914 348 131
@stop
@section('container')
    <div id="homepage-top" class="col-md-12">
        <div class="row">
            <div class="container">
                <div class="col-md-3">
                    @include('frontend.common.category.category')
                </div>
                <div class="col-md-9">
                    @include('frontend.common.slider.slider')
                </div>
            </div>
        </div>
    </div>
    <div id="homepage-content" class="col-md-12">
        <div class="row">
            <div class="container">
                @include('frontend.homepage.hp-top')
                @include('frontend.homepage.hp-list-product')
            </div>
        </div>
    </div>
@stop