<div id="hp-content-list-product">
    <div class="container mt-5">
        @foreach($final_array as $key=>$data)
            <div class="one-category">
                <div class="title-top">
                    <div class="row justify-content-center h-100">
                        <div class="col-md-12 text-center">
                            <h3 class="header-title">
                                <span><a href="{{URL::to('danh-muc/'.$data[0]['category']->path)}}">{{$data[0]['category']->name}}</a></span>
                                <p>Thông tin thêm về thiết bị đèn chiếu sáng ....!</p>
                                <img src="{{URL::asset('images/temp/line-break.png')}}" alt=""
                                     style="width: 60px;height: auto;">
                            </h3>
                        </div>
                        {{--<div class="col-md-7 my-auto">--}}

                        {{--</div>--}}
                        {{--<div class="col-md-2 my-auto">--}}

                        {{--<div class="row h-100">--}}
                        {{--<div class="col-sm-12 my-auto text-right">--}}
                        {{--<div class="card card-block"><a href="{{URL::to('danh-muc/'.$data[0]['category']->path)}}">Xem Tất Cả</a></div>--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        {{--</div>--}}
                    </div>
                </div>
                <div id="list-category">
                    <div class="product-relative">
                        <div class="owl-carousel owl-theme h-p-owl">
                            @foreach($data[0]['list_subMenu'] as $key2=>$data2)
                                <div class="one-product">
                                    <div class="img-wrap">
                                        <a href="{{URL::to('danh-muc/'.$data2->path)}}">
                                            {{ Html::image($data2->image,'',array('class'=>'img-one-category ')) }}</a>
                                    </div>
                                    <div class="info">
                                        <h2 class="title"><a
                                                    href="{{URL::to('danh-muc/'.$data2->path)}}">{{$data2->name}}
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{--<div class="nav-arrow">--}}
                        {{--</div>--}}
                    </div>

                </div>
                <div id="list-product">
                    <div class="row">
                        @foreach($data[0]['list_product'] as $key2=>$data2)
                            <div class="col-md-3 col-6 mb-4 pr-1 pl-1">
                                <div class="card one-product h-100">
                                    <a href="{{URL::to($data2->path)}}">
                                        {{ Html::image($data2->image,'',array('class'=>'img-one-product')) }}
                                    </a>
                                    @if($data2->sale!=0)
                                        <div class="discount">
                                            <div class="ct">
                                                <div class="lb">{{$data2->sale}}%</div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="card-body">
                                        <h2 class="title card-title">{{$data2->name}}</h2>
                                    </div>
                                    <div class="info card-footer">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-md-6 p-0 text-left"><i class="fas fa-gift"></i></div>
                                            <div class="col-md-6 p-0 text-right">
                                                @if($data2->price!=0)
                                                    <span class="price-sale">
                                                    @if($data2->sale!=0)
                                                            {{$data2->price}} ₫
                                                        @endif
                                                    </span>
                                                    <span class="price-original">{{$data2->final_price}}
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
            {{--Nút xem thêm--}}
            @if(count($data[0]['list_product'])>=8)
                <style>
                    div#view_morebtn a {
                        padding: 10px 20px;
                        border-radius: 2px;
                        background: linear-gradient(#06628c, #058ccb);
                        color: white;
                    }
                </style>
                <div class="row mb-5 text-center" id="view_morebtn">
                    <div class="col-md-12 text-center">
                        <a href="{{URL::to('danh-muc/'.$data[0]['category']->path)}}">XEM THÊM</a>
                    </div>
                    {{--<div class="col-md-12 text-center mt-5">--}}
                    {{--<div style="width: 30%;border-bottom: 2px dotted #9a9b9b;margin: auto">--}}

                    {{--</div>--}}
                    {{--</div>--}}
                </div>
            @endif
            {{--ENd Nút xem thêm--}}


            @if($data[0]['category']->id==1)
                <div class="row mb-3">
                    <div class="col-md-12">
                        {{ Html::image('images/uploads/banner/middle_banner.jpg','',array('class'=>'no-style')) }}
                    </div>
                </div>


            @endif
            @if($data[0]['category']->id==2)
                <div class="row mb-3">
                    <div class="col-md-12">
                        {{ Html::image('images/uploads/banner/middle_banner2.jpg','',array('class'=>'no-style')) }}
                    </div>
                </div>
            @endif
        @endforeach


    </div>
</div>
