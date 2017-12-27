@extends('frontend.master')
@section('title')
    {{$category->seo_title}}
@stop
@section('description')
    {{--Thế Giới Đèn Led. ☎ Hotline: 0914 348 131--}}
    {!! $category->seo_description !!}
@stop
@section('container')
    <div id="category" class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="category-breadcrumb">
                                <div class="col-md-12">
                                    <ul>
                                        <li><a href="#">Trang Chủ ></a></li>
                                        <li><a href="#">{{$category->name}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="category-top col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        @include('frontend.common.sidebar.category')
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="title-top">
                                                <h3 class="header-title">
                                                    <span>{{$category->name}}</span>
                                                </h3>
                                                <p class="description">
                                                    {!! $category->description !!}
                                                </p>
                                            </div>
                                            @if($sub_Category)
                                                <div id="list-category" class="col-md-12">
                                                    <div class="row">
                                                        @foreach($sub_Category as $key=>$data)
                                                            <div class="col-md-3 col-xs-6">
                                                                <a href="{{URL::to('danh-muc/'.$data->path)}}">{{ Html::image($data->image,'',array('class'=>'no-style')) }}</a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="list-item col-md-12">
                                                <div class="row">
                                                    @foreach($list_product as $key=>$data)
                                                        <a href="{{URL::to($data->path)}}">
                                                            <div class="one-item col-md-3 col-xs-6">
                                                                <div class="row">
                                                                    {{ Html::image($data->image,'',array('class'=>'no-style')) }}
                                                                    <div class="item-detail">
                                                                        <span class="title">{{$data->name}}</span>
                                                                        @if($data->price!=0)
                                                                            <span class="price-sale">{{$data->final_price}} VND
                                                                                @if($data->sale!=0)
                                                                                    <span class="discount">Giảm {{$data->sale}}%</span>
                                                                                @endif
                                        </span>
                                                                            @if($data->sale!=0)
                                                                                <span class="price-saving">{{$data->price}} VND</span>
                                                                            @endif
                                                                        @else
                                                                            <span class="price-contact">Liên Hệ</span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="category-bottom col-md-12">
                                @include('frontend.homepage.hp-bottom')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop