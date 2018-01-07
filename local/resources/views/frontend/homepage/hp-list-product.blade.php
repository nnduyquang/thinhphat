<div id="hp-content-list-product" class="col-md-12">
    <div class="row">
        <div class="container">
            <div class="row">
                @foreach($final_array as $key=>$data)
                    <div class="one-category">
                        <div class="title-top">
                            <h3 class="header-title">
                                <span><a href="{{URL::to('danh-muc/'.$data[0]['category']->path)}}">{{$data[0]['category']->name}}</a></span>
                                <ul>
                                    @foreach($data[0]['list_subMenu'] as $key2=>$data2)
                                    <li><a href="{{URL::to('danh-muc/'.$data2->path)}}">{{$data2->name}}</a></li>
                                    @endforeach
                                    <li><a class="view-all" href="#">Xem Tất Cả</a></li>
                                </ul>

                            </h3>
                            {{ Html::image($data[0]['category']->image,'',array('class'=>'no-style')) }}
                        </div>
                        <div class="list-item col-md-12">
                            @foreach($data[0]['list_product'] as $key2=>$data2)
                            <a href="{{URL::to($data2->path)}}">
                                <div class="one-item col-md-3 col-xs-6">
                                    {{ Html::image($data2->image,'',array('class'=>'no-style')) }}
                                    @if($data2->sale!=0)
                                        <span class="discount">Giảm {{$data2->sale}}%</span>
                                    @endif
                                    <div class="item-detail">
                                        <span class="title">{{$data2->name}}</span>
                                        @if($data2->price!=0)
                                            <span class="price-sale">{{$data2->final_price}} VND

                                        </span>
                                            @if($data2->sale!=0)
                                                <span class="price-saving">{{$data2->price}} VND</span>
                                            @endif
                                        @else
                                            <span class="price-contact">Liên Hệ</span>
                                        @endif
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
