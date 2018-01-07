@extends('frontend.master')
@section('title')
    {{$product->seo_title}}
@stop
@section('description')
    {!! $product->seo_description !!}
@stop
@section('container')
    <div id="detail" class="col-md-12">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div id="detail-top" class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                @include('frontend.common.sidebar.category2')

                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="detail-top-breadcrumb col-md-12">
                                        <ul>
                                            <li><a href="#">Trang Chủ ></a></li>
                                            <li><a href="#">{{$product->name}}</a></li>
                                        </ul>
                                    </div>
                                    <div class="detail-content">
                                        <div class="col-md-6">
                                            <div class="row">
                                                {{ Html::image($product->image,'',array('class'=>'no-style')) }}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h1>{{$product->name}}</h1>
                                            @if($product->price!=0)
                                                <span class="price-sale">{{$product->final_price}} VND</span>
                                                @if($product->sale!=0)
                                                    <span class="price-nosale">Giá Trước Đây: <span> {{$product->price}}
                                                            VND</span></span>

                                                    <span class="price-saving">Tiết Kiệm: {{$product->sale}}%</span>
                                                @endif
                                            @else
                                                <span class="price-contact">Liên Hệ</span>
                                            @endif
                                            <input class="btn-confirm btn" type="button" value="0965322239">
                                        </div>
                                    </div>
                                    <div id="detail-mid" class="col-md-12">
                                        <div class="row">
                                            <div id="detail-mid-l" class="col-md-12">
                                                <div class="row">
                                                    <div class="content">
                                                        {!! $product->description !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="detail-mid-r" class="col-md-12">
                                        <div class="row">
                                            <div class="content col-md-12">
                                                <h3>Có Thể Bạn Quan Tâm</h3>
                                                @foreach($order_product as $key=>$data)
                                                    <div class="one-item col-md-3">
                                                        <a href="{{URL::to($data->path)}}">

                                                            {{ Html::image($data->image,'',array('class'=>'no-style')) }}
                                                            @if($data->sale!=0)
                                                                <span class="discount">- {{$data->sale}}%</span>
                                                            @endif
                                                            <span class="title">{{$data->name}}</span>
                                                            @if($data->price!=0)
                                                                @if($data->sale!=0)
                                                                    <span class="price-saving">{{$data->price}} ₫</span>
                                                                @endif
                                                                <span class="price-sale">{{$data->final_price}} ₫</span>
                                                            @else
                                                                <span class="price-contact">Liên Hệ</span>
                                                            @endif

                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="detail-bottom" class="col-md-12">
                        @include('frontend.homepage.hp-bottom')
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop