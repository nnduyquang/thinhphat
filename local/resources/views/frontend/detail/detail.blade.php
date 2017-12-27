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
                <div id="detail-top" class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            @include('frontend.common.sidebar.category')
                        </div>
                        <div class="col-md-8">
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
                                    <span class="price-sale">50000 VND</span>
                                    <span class="price-nosale">Giá Trước Đây: <span> 60000</span></span>
                                    <span class="price-saving">Tiết Kiệm: 30%</span>
                                    <input class="btn-confirm btn" type="button" value="0907468264">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="detail-mid" class="col-md-12">
                    <div id="detail-mid-l" class="col-md-8">
                        <div class="row">
                            <div class="content">
                                {!! $product->description !!}
                            </div>
                        </div>
                    </div>
                    <div id="detail-mid-r" class="col-md-4">
                        <div class="content col-md-12">
                            <h3>Có Thể Bạn Quan Tâm</h3>
                            @foreach($order_product as $key=>$data)
                            <div class="one-item col-md-12">
                                <a href="{{URL::to($data->path)}}">
                                    {{ Html::image($data->image,'',array('class'=>'no-style')) }}
                                    <span class="title">{{$data->name}}</span>
                                    <span class="price-sale">22.000 VND<span class="discount">-33%</span></span>
                                    <span class="price-saving">32.600 VND</span>
                                </a>
                            </div>
                            @endforeach
                            {{--<div class="one-item col-md-12">--}}
                                {{--<a href="">--}}
                                    {{--{{ Html::image('images/temp/temp_hp_item.jpg','',array('class'=>'no-style')) }}--}}
                                    {{--<span class="title">Khăn gội siêu mềm Vinatowel VN 05 33x80cm (Xanh)</span>--}}
                                    {{--<span class="price-sale">22.000 VND<span class="discount">-33%</span></span>--}}
                                    {{--<span class="price-saving">32.600 VND</span>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                            {{--<div class="one-item col-md-12">--}}
                                {{--<a href="">--}}
                                    {{--{{ Html::image('images/temp/temp_hp_item.jpg','',array('class'=>'no-style')) }}--}}
                                    {{--<span class="title">Khăn gội siêu mềm Vinatowel VN 05 33x80cm (Xanh)</span>--}}
                                    {{--<span class="price-sale">22.000 VND<span class="discount">-33%</span></span>--}}
                                    {{--<span class="price-saving">32.600 VND</span>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
                <div id="detail-bottom" class="col-md-12">
                    @include('frontend.homepage.hp-bottom')
                </div>
            </div>
        </div>
    </div>
@stop