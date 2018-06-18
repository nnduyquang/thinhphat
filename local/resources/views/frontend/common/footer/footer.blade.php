<div id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>THINHPHATLIGHTING.COM</h3>
                    <ul>

                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span>55/4 KP3 Hà Huy Giáp, Q.12, TPHCM</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span>Chăm sóc khách hàng: </br>
                                    0965322239</br>
                                    Từ 8h00-17h00 các ngày thứ 2 đến thứ 7</span></a></li>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span>dentrangtrithinhphat@gmail.com</span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Danh Sách Sản Phẩm</h3>
                    <ul>
                        @foreach($menu_horizon as $key=>$data)
                            <li><a href="{{URL::to('danh-muc/'.$data->path)}}">{{$data->name}}</a></li>
                        @endforeach
                        {{--<li><a href="#">Đèn Gian Bếp</a></li>--}}
                        {{--<li><a href="#">Đèn Hành Lang</a></li>--}}
                        {{--<li><a href="#">Đèn Showroom - Nhà Hàng</a></li>--}}
                        {{--<li><a href="#">Thiết Bị Khác</a></li>--}}
                    </ul>
                </div>
                {{--<div class="col-md-3">--}}
                {{--<h3>Giới Thiệu</h3>--}}
                {{--<ul>--}}
                {{--<li><a href="#">Về Chúng Tôi</a></li>--}}
                {{--<li><a href="#">Liên Hệ</a></li>--}}
                {{--</ul>--}}
                {{--</div>--}}

                <div class="col-md-4">
                    <h3>Facebook</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <span>Designed by Smartlinks.vn</span>
        </div>
    </div>
</div>