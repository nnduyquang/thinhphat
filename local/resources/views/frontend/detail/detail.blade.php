@extends('frontend.master')
@section('title')
    {{$product->seo_title}}
@stop
@section('description')
    {!! $product->seo_description !!}
@stop
@section('container')
    <div id="detail">
        <div class="container">
            <div id="detail-top">
                <div class="row">
                    <div class="col-md-8">

                        <div class="detail-top-breadcrumb">
                            <ul>
                                <li><a href="{{URL::to('/')}}">Trang Chủ </a></li>
                                <li>
                                    <a href="{{URL::to('danh-muc/'.$product->categoryproduct->path)}}">{{$product->categoryproduct->name}}</a>
                                </li>
                                <li><a href="#">{{$product->name}}</a></li>
                            </ul>
                        </div>

                        <div class="detail-content">
                            <div class="row">
                                <div class="col-md-6">
                                    {{ Html::image($product->image,'',array('class'=>'no-style')) }}
                                </div>
                                <div class="col-md-6">
                                    <h1>{{$product->name}}</h1>
                                    @if($product->price!=0)
                                        <span class="price-sale">{{$product->final_price}} VND</span>
                                        @if($product->sale!=0)
                                            <p class="price-nosale">Giá Trước Đây: <span> {{$product->price}}
                                                    VND</span></p>

                                            <span class="price-saving">Tiết Kiệm: {{$product->sale}}%</span>
                                        @endif
                                    @else
                                        <span class="price-contact">Liên Hệ</span>
                                    @endif
                                    <div class="short-desciption mt-3"><p>
                                            Check information lossrem ausom check inffomtation test for anything showw
                                            of on thiss
                                            content.

                                            check information lossrem ausom check inffomtation test for anything showw
                                            of on thiss
                                            content.


                                        </p></div>
                                    <input class="btn-confirm btn" type="button" value="Liên Hệ : 0965322239">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-4 mb-3 text-center position-relative">
                                <div style="width: 99%;margin: auto"
                                     class="p-2 d-flex align-items-center justify-content-between tkiem-nluong-hor">
                                    {{ Html::image('images/uploads/icon/F400024953-FIL-global-001.png','',array('style'=>'width:76px;height:auto')) }}
                                    <span>TIẾT KIỆN <span class="text-danger">80%</span> ĐIỆN NĂNG</span>
                                </div>
                                <div class="tkiem-nluong-hor-sha"></div>
                            </div>

                            <div class="col-md-4 mb-3 text-center">
                                <div style="width: 99%;margin: auto"
                                     class="p-2 d-flex align-items-center justify-content-between tkiem-nluong-hor">
                                    {{ Html::image('images/uploads/icon/F400024953-FIL-global-002.png','',array('style'=>'width:76px;height:auto')) }}
                                    <span>CHẤT LƯỢNG CAO</span>
                                </div>
                                <div class="tkiem-nluong-hor-sha"></div>
                            </div>


                            <div class="col-md-4 mb-3 text-center">
                                <div style="width: 99%;margin: auto"
                                     class="p-2 d-flex align-items-center justify-content-between tkiem-nluong-hor">
                                    {{ Html::image('images/uploads/icon/led-energy.png','',array('style'=>'width:76px;height:auto')) }}
                                    <span>PHONG CÁCH HIỆN ĐẠI</span>
                                </div>
                                <div class="tkiem-nluong-hor-sha"></div>
                            </div>
                        </div>

                        <div id="detail-mid">
                            <div id="detail-mid-l">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-12 p-0">
                                            <p class="d-block bg-light p-2 mt-1">MÔ TẢ SẢN PHẨM</p>
                                        </div>
                                        <div class="col-md-12">
                                            {!! $product->description !!}
                                        </div>
                                        <div class="col-md-12 mt-3 mb-3">
                                            Cái nội dung dưới đây viết cái gì cũng được.
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="detail-mid-r">
                            <div class="content">
                                <p class="d-block bg-light p-2 mt-1">SẢN PHẨM LIÊN QUAN</p>
                                <div class="product-relative">
                                    <div class="owl-carousel owl-theme p-d-owl">
                                        @foreach($order_product as $key=>$data)
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
                                                        <div class="col-md-6 p-0 text-left"><i
                                                                    class="fas fa-gift"></i></div>
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
                                        @endforeach
                                    </div>
                                    @if(count($order_product)>4)
                                        <div class="nav-arrow">

                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">

                    </div>
                </div>
            </div>
            <div id="detail-bottom">
                @include('frontend.homepage.hp-bottom')
            </div>
        </div>
    </div>
@stop