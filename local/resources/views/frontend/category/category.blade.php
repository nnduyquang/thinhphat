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
            <div class="category-top">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row mt-3" id="category_banner">
                            <div class="col-md-12">
                                {{ Html::image('images/uploads/banner/Zino-banner.jpg','',array('class'=>'no-style')) }}
                                <p>{{$category->name}} <br>
                                    <span>Thời trang - Sang trọng - Đẳng cấp</span>
                                </p>
                                <div class="category-banner-blur"></div>
                            </div>

                        </div>

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
                                    <div class="col-md-2 col-6 mb-4 pr-1 pl-1">
                                        <div class="card one-product h-100">
                                            <a href="{{URL::to($data->path)}}">
                                                {{ Html::image($data->image,'',array('class'=>'img-one-product')) }}
                                            </a>
                                            @if($data->sale!=0)
                                                <div class="discount">
                                                    <div class="ct">
                                                        <div class="lb">{{$data->sale}}%</div>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="card-body">
                                                <h2 class="title card-title">{{$data->name}}</h2>
                                            </div>
                                            <div class="info card-footer">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-md-6 p-0 text-left"><i class="fas fa-gift"></i>
                                                    </div>
                                                    <div class="col-md-6 p-0 text-right">
                                                        @if($data->price!=0)
                                                            <span class="price-sale">
                                                    @if($data->sale!=0)
                                                                    {{$data->price}} ₫
                                                                @endif
                                                    </span>
                                                            <span class="price-original">{{$data->final_price}}
                                                                ₫</span>

                                                        @else
                                                            <span class="price-contact">Liên Hệ</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="category-bottom">
                        @include('frontend.homepage.hp-bottom')
                    </div>
                </div>
            </div>

        </div>

    </div>
@stop