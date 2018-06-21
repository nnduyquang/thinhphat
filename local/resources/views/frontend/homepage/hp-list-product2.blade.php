<div id="hp-content-list-product2">

    @foreach($final_array as $key=>$data)
        <div class="one-category">
            <div class="title-top">
                <h3 class="header-title">
                    <span><a href="{{URL::to('danh-muc/'.$data[0]['category']->path)}}">{{$data[0]['category']->name}}</a></span>
                </h3>
            </div>
            <div id="list-product-content">
                <div class="demo-flex">

                    <div class="list-item">
                        <div class="m-list-product col-md-12 d-md-none d-lg-none">
                            <div class="row">
                                @foreach($data[0]['list_subMenu'] as $key2=>$data2)
                                    <div class="col-xs-6">
                                        <div class="row">
                                            <a href="{{URL::to('danh-muc/'.$data2->path)}}">{{$data2->name}}</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                @foreach($data[0]['list_product'] as $key2=>$data2)

                                    <div class="one-item col-md-4 col-xs-6">
                                        <a href="{{URL::to($data2->path)}}">
                                            <div class="d-flex justify-content-center" style="width:100%;text-align: center;height: 200px;overflow: hidden;">
                                            {{ Html::image($data2->image,'',array('style'=>'max-width:80%;width:auto;max-height:200px;margin:auto;overflow:hidden')) }}
                                            </div>
                                            @if($data2->sale!=0)
                                                <span class="discount">- {{$data2->sale}}
                                                    %</span>
                                            @endif
                                            <div class="item-detail">
                                                <span class="title">{{$data2->name}}</span>
                                                @if($data2->price!=0)
                                                    <div class="d-flex align-items-center justify-content-between" style="width: 100%">
                                                    @if($data2->sale!=0)
                                                        <span class="price-saving float-left">{{$data2->price}}
                                                            ₫</span>
                                                    @endif
                                                    <span class="price-sale">{{$data2->final_price}}
                                                        ₫</span>
                                                    </div>
                                                @else
                                                    <span class="price-contact">Liên Hệ</span>
                                                @endif
                                            </div>
                                        </a>
                                    </div>

                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-12 hp-one-item-more">
                            <span><a href="">XEM THÊM</a></span>
                        </div>



                    </div>
                </div>



            </div>
        </div>
    @endforeach

        <div class="row mb-3">
            <div class="col-md-12">
                {{ Html::image('images/uploads/banner/middle_banner.jpg','',array('class'=>'no-style')) }}
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                {{ Html::image('images/uploads/banner/middle_banner2.jpg','',array('class'=>'no-style')) }}
            </div>
        </div>
</div>

