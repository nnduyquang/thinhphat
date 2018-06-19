@extends('frontend.master')
@section('title')
    {{$category->seo_title}}
@stop
@section('description')
    {{--Thế Giới Đèn Led. ☎ Hotline: 0914 348 131--}}
    {!! $category->seo_description !!}
@stop
@section('container')
    <div id="category">
        <div class="container">

            <div class="category-breadcrumb">

                <ul>
                    <li><a href="#">Trang Chủ ></a></li>
                    <li><a href="#">{{$category->name}}</a></li>
                </ul>

            </div>
            <div class="category-top">
                <div class="row">
                    <div class="col-md-3">
                        @include('frontend.common.sidebar.category2')
                    </div>
                    <div class="col-md-8">
                        <div class="title-top">
                            <h3 class="header-title">
                                <span>{{$category->name}}</span>
                            </h3>
                            <p class="description">
                                {!! $category->description !!}
                            </p>
                        </div>
                        @if($sub_Category)
                            <div id="list-category">
                                <div class="row">
                                    @foreach($sub_Category as $key=>$data)
                                        <div class="col-md-3 col-xs-6">
                                                {{--<a href="{{URL::to('danh-muc/'.$data->path)}}">{{ Html::image($data->image,'',array('class'=>'no-style')) }}</a>--}}
                                                <a href="{{URL::to('danh-muc/'.$data->path)}}"><span>{{$data->name}}</span></a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <div class="list-item">
                            <div class="row">
                                @foreach($list_product as $key=>$data)
                                    <div class="one-item col-md-3 col-xs-6">
                                        <a href="{{URL::to($data->path)}}">
                                            {{ Html::image($data->image,'',array('class'=>'no-style')) }}
                                            @if($data->sale!=0)
                                                <span class="discount">{{$data->sale}}%</span>
                                            @endif
                                            <div class="item-detail">
                                                <span class="title">{{$data->name}}</span>
                                                @if($data->price!=0)
                                                    <span class="price-sale">{{$data->final_price}}₫</span>
                                                    @if($data->sale!=0)
                                                        <span class="price-saving">{{$data->price}}₫</span>
                                                    @endif
                                                @else
                                                    <span class="price-contact">Liên Hệ</span>
                                                @endif
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="category-bottom">
                @include('frontend.homepage.hp-bottom')
            </div>
        </div>

    </div>
@stop