@extends('frontend.master')
@section('title')
    {{$catalogue->seo_title}}
@stop
@section('description')
    {{--Thế Giới Đèn Led. ☎ Hotline: 0914 348 131--}}
    {!! $catalogue->seo_description !!}
@stop
@section('container')
    <div id="catalogue">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    @include('frontend.common.sidebar.category2')
                </div>
                <div class="col-md-8">
                    <div class="title-top">
                        <h3 class="header-title">
                            <span>{{$catalogue->title}}</span>
                        </h3>
                        <p class="description">
                            {!! $catalogue->description !!}
                        </p>
                    </div>
                    <div class="content-catalogue">
                        {!! $catalogue->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop