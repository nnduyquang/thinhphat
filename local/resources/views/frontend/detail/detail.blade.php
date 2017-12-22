@extends('frontend.master')
@section('title')
    Đèn Phòng NGủ
@stop
@section('description')
    Thế Giới Đèn Led. ☎ Hotline: 0914 348 131
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
                                    <li><a href="#">Đèn Phòng Ngủ</a></li>
                                </ul>
                            </div>
                            <div class="detail-content">
                                <div class="col-md-6">
                                    <div class="row">
                                        {{ Html::image('images/temp/temp_detail_product.jpg','',array('class'=>'no-style')) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1>Nước rửa tay Lifeboy 500ml</h1>
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
                                Giới thiệu sản phẩm Bộ 3 khăn tắm, khăn mặt, khăn lau tóc cao cấp (xanh thỏ) -
                                (BQ246-XANHTHO)
                                Set 3 khăn tắm cho mẹ và bé bao gồm:

                                - 1 khăn tắm: 100cm x 50cm + 1 khăn lau đầu: 35cm x 70cm + 1 Khăn mặt dài: 25cm x 50cm

                                Màu sắc: xanh họa tiết thỏ

                                Bộ 3 khăn tắm ngộ nghĩnh cho mẹ và bé 1

                                Sản phẩm có in hình ngộ nghĩnh, đáng yêu, phù hợp cho mẹ và bé. Chất liệu sợi microfiber
                                cực mềm để đảm bảo không làm hại da, mềm mại, khả năng thấm hút, kháng khuẩn tốt, mang
                                đến cảm giác êm ái, nhẹ nhàng khi dùng cho da, kể cả da khô và da nhạy cảm.

                                Bộ 3 Khăn tắm Thái Lan siêu mềm 5

                                Họa tiết khăn xinh xắn đáng yêu

                                - Sợi lông nhẹ nhưng dày có tác dụng giữ nhiệt cực tốt.

                                - Giặt siêu nhanh khô: phơi nơi khô ráo chỉ 3h là khô.

                                - Giúp bảo vệ cơ thể gia đình bạn luôn khô thoáng và sạch sẽ mỗi ngày.

                                - Được dùng để lau khô làn da, đầu tóc và cơ thể sau khi tắm gội.

                                - Không xù lông, không sổ chỉ sau thời gian sử dụng.

                                Bộ 3 Khăn tắm Thái Lan siêu mềm 9

                                Khăn mềm mại và an toàn cho làn da.

                                Bộ 3 Khăn tắm Thái Lan siêu mềm 10

                                Bộ 3 khăn tắm ngộ nghĩnh cho mẹ và bé 5Màu sắc nổi bật nhưng cũng rất tinh tế. Khăn mềm
                                mại và an toàn cho làn da
                            </div>
                        </div>
                    </div>
                    <div id="detail-mid-r" class="col-md-4">
                        <div class="content col-md-12">
                            <h3>Có Thể Bạn Quan Tâm</h3>
                            <div class="one-item col-md-12">
                                <a href="">
                                    {{ Html::image('images/temp/temp_hp_item.jpg','',array('class'=>'no-style')) }}
                                    <span class="title">Khăn gội siêu mềm Vinatowel VN 05 33x80cm (Xanh)</span>
                                    <span class="price-sale">22.000 VND<span class="discount">-33%</span></span>
                                    <span class="price-saving">32.600 VND</span>
                                </a>
                            </div>
                            <div class="one-item col-md-12">
                                <a href="">
                                    {{ Html::image('images/temp/temp_hp_item.jpg','',array('class'=>'no-style')) }}
                                    <span class="title">Khăn gội siêu mềm Vinatowel VN 05 33x80cm (Xanh)</span>
                                    <span class="price-sale">22.000 VND<span class="discount">-33%</span></span>
                                    <span class="price-saving">32.600 VND</span>
                                </a>
                            </div>
                            <div class="one-item col-md-12">
                                <a href="">
                                    {{ Html::image('images/temp/temp_hp_item.jpg','',array('class'=>'no-style')) }}
                                    <span class="title">Khăn gội siêu mềm Vinatowel VN 05 33x80cm (Xanh)</span>
                                    <span class="price-sale">22.000 VND<span class="discount">-33%</span></span>
                                    <span class="price-saving">32.600 VND</span>
                                </a>
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
@stop