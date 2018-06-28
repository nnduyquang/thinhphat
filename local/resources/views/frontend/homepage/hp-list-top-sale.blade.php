<div id="hp-list-top-sale">
    <div class="container">
        <h3 class="title"><i class="fab fa-gripfire"></i>Sản Phẩm Bán Chạy</h3>
        <div id="list-product">
            <div class="row">
                @foreach($bestSaleProduct as $key=>$data)
                    <div class="col-md-2 col-6 mb-4 pr-1 pl-1">
                        <div class="card one-product h-100">
                            <a href="{{URL::to('san-pham/'.$data->categoryproduct->path.'/'.$data->path)}}">
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
                                    <div class="col-md-6 p-0 text-left"><i class="fas fa-gift"></i></div>
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