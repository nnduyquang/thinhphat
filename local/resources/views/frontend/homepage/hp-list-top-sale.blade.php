<div id="hp-list-top-save">
    <div class="container">
        <h3 class="title"><i class="fab fa-gripfire"></i>Sản Phẩm Bán Chạy</h3>
        <div id="list-product">
            <div class="row">
                @for($i=0;$i<=8;$i++)
                    <div class="col-md-2 mb-4 pr-1 pl-1">
                        <div class="card one-product h-100">
                            <a href="#"> {{ Html::image('images/temp/temp_hp_item.jpg','',array('class'=>'img-one-product')) }}</a>
                            <div class="card-body">
                                <h2 class="title card-title">Title</h2>
                            </div>
                            <div class="info card-footer">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-md-6 p-0 text-left"><i class="fas fa-gift"></i></div>
                                    <div class="col-md-6 p-0 text-right">
                                        {{--<span class="price-sale">100.000đ</span>--}}
                                        {{--<span class="price-original">200.000đ</span>--}}
                                        <span class="price-contact">Liên Hệ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>