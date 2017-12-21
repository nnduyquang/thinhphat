<div id="menu" class="col-md-12">
    <div class="row">
        <div id="menu-top" class="col-md-12">
            <div class="row">
                <div class="container">
                    <div class="menu-top-l">
                        <span>Liên Hệ: 0907468264</span>
                    </div>
                    <div class="menu-top-r">
                        <span>Địa Chỉ: </span>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu-banner" class="col-md-12">
            <div class="row">
                <div class="container">
                    {{ Html::image('images/temp/temp_banner_menu.jpg','',array('class'=>'no-style')) }}
                </div>
            </div>
        </div>
        <div id="menu-list" class="col-md-12">
            <div class="row">
                <div class="container">
                    <div class="col-md-12">
                        <ul class="menu-list-l">
                            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>Trang chủ</a></li>
                            <li class="sub-menu"><i class="fa fa-lightbulb-o" aria-hidden="true"></i><a href="#">Đèn
                                    Trang Trí</a>
                                <ul>
                                    <li><a href="#">Đèn Phòng Ngủ</a></li>
                                    <li><a href="#">Đèn Gian Bếp</a></li>
                                    <li><a href="#">Đèn Hành Lang</a></li>
                                    <li><a href="#">Đèn Showroom - Nhà Hàng</a></li>
                                    <li><a href="#">Thiết Bị Khác</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-gift" aria-hidden="true"></i>Khuyến Mãi</a></li>
                            <li><a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i>Xu Hướng Đèn 2018</a>
                            </li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Liên Hệ</a></li>
                        </ul>
                        <ul class="menu-list-r">
                            <li><a href="#" id="clickSearch"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            <li>
                                {!! Form::open(array('method'=>'POST','id'=>'formSearch')) !!}
                                {!! Form::text('key-search', '', array('placeholder' => 'Tìm Kiếm','class' => 'form-control','id'=>'searchInput')) !!}
                                {!! Form::close() !!}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>