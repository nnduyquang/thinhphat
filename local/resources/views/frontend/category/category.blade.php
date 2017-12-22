@extends('frontend.master')
@section('title')
    Đèn Phòng NGủ
@stop
@section('description')
    Thế Giới Đèn Led. ☎ Hotline: 0914 348 131
@stop
@section('container')
    <div id="category" class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="category-breadcrumb">
                        <div class="col-md-12">
                            <ul>
                                <li><a href="#">Trang Chủ ></a></li>
                                <li><a href="#">Đèn Phòng Ngủ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="category-top">
                        <div class="col-md-4">
                            @include('frontend.common.sidebar.category')
                        </div>
                        <div class="col-md-8">
                            <div class="title-top">
                                <h3 class="header-title">
                                    <span>Đèn Phòng Ngủ</span>
                                </h3>
                                <p class="description">
                                    Kiến trúc biệt thự cổ điển nổi bật là biệt thự Pháp ở Việt Nam được biết đến với các
                                    khái niệm như: Biệt thự cổ điển, biệt thự tân cổ điển, biệt thự phong cách Pháp,
                                    biệt thự kiểu Pháp hay biệt thự phong cách Châu Âu. Trong 5 năm trở lại đây Kiến
                                    Trúc Á Đông được biết đến với thương hiệu thiết kế kiến trúc cổ điển và biệt thự tân
                                    cổ điển dành cho người đẳng cấp. Với niềm cảm hứng bất tận từ kiến trúc Châu Âu
                                    chúng tôi đã mang tới cho khách hàng ở Việt Nam những mẫu biệt thự cổ điển đẳng cấp
                                    - hoành tráng - sang trọng - vĩnh cửu. Xin mời quý khách hàng khám phá các mẫu thiết
                                    kế biệt thự tân cổ điển kiểu Pháp: 2 tầng, 3 tầng, 4 tầng, 5 tầng mới nhất.
                                    <br>Ưu đãi lớn: Tặng 5 chuyến du lịch Nha Trang cho 5 chủ nhân may đăng ký thiết kế
                                    biệt thự tháng 12 Xem tại đây
                                </p>
                            </div>
                            <div class="list-item">
                                <a href="{{URL::to('category/detail')}}">
                                    <div class="one-item col-md-3 col-xs-6">
                                        {{ Html::image('images/temp/temp_hp_item.jpg','',array('class'=>'no-style')) }}
                                        <div class="item-detail">
                                            <span class="title">Bút Bi Thiên Long</span>
                                            <p class="price">1.000.000</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="one-item col-md-3 col-xs-6">
                                        {{ Html::image('images/temp/temp_hp_item.jpg','',array('class'=>'no-style')) }}
                                        <div class="item-detail">
                                            <span class="title">Bút Bi Thiên Long</span>
                                            <p class="price">1.000.000</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="one-item col-md-3 col-xs-6">
                                        {{ Html::image('images/temp/temp_hp_item.jpg','',array('class'=>'no-style')) }}
                                        <div class="item-detail">
                                            <span class="title">Bút Bi Thiên Long</span>
                                            <p class="price">1.000.000</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="one-item col-md-3 col-xs-6">
                                        {{ Html::image('images/temp/temp_hp_item.jpg','',array('class'=>'no-style')) }}
                                        <div class="item-detail">
                                            <span class="title">Bút Bi Thiên Long</span>
                                            <p class="price">1.000.000</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="one-item col-md-3 col-xs-6">
                                        {{ Html::image('images/temp/temp_hp_item.jpg','',array('class'=>'no-style')) }}
                                        <div class="item-detail">
                                            <span class="title">Bút Bi Thiên Long</span>
                                            <p class="price">1.000.000</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="one-item col-md-3 col-xs-6">
                                        {{ Html::image('images/temp/temp_hp_item.jpg','',array('class'=>'no-style')) }}
                                        <div class="item-detail">
                                            <span class="title">Bút Bi Thiên Long</span>
                                            <p class="price">1.000.000</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="one-item col-md-3 col-xs-6">
                                        {{ Html::image('images/temp/temp_hp_item.jpg','',array('class'=>'no-style')) }}
                                        <div class="item-detail">
                                            <span class="title">Bút Bi Thiên Long</span>
                                            <p class="price">1.000.000</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="one-item col-md-3 col-xs-6">
                                        {{ Html::image('images/temp/temp_hp_item.jpg','',array('class'=>'no-style')) }}
                                        <div class="item-detail">
                                            <span class="title">Bút Bi Thiên Long</span>
                                            <p class="price">1.000.000</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="category-bottom">
                        @include('frontend.homepage.hp-bottom')
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop