<style>
    ul.fe_contact li{
        padding: 2px 0;
    }
</style>
<div id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h3>{{ Html::image('images/uploads/logo2f.png','',array('style'=>'width:80%;height:auto;margin-top:-28px')) }}</h3>
                    <ul class="fe_contact">

                        <li><a href="#"><i class="fas fa-map-marker"></i><span>ĐỊA CHỈ : 55/4 KP3 Hà Huy Giáp, Q.12, TPHCM</span></a>
                        </li>
                        <li><a href="#"><i class="fas fa-users"></i><span>LIÊN HỆ : 0965322239 </span></a></li>
                        <li><a href=""><i
                                        class="far fa-clock"></i><span>Từ 8h00-17h00 các ngày thứ 2 đến thứ 7</span></a>
                        </li>
                        <li><a href="#"><i class="far fa-envelope"></i><span>dentrangtrithinhphat@gmail.com</span></a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 mb-3">
                    <h3>BẢN ĐỒ <span>HƯỚNG DẨN</span></h3>
                    <iframe
                            width="100%"
                            height="186px"
                            frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCz9f8H5wjJIac5LrePbowoDN8Vp2FEEZ8
    &q=145%20l%C3%AA%20quang%20%C4%91%E1%BB%8Bnh&zoom=17" allowfullscreen>
                    </iframe>
                </div>


                <div class="col-md-4 mb-3 text-right">
                    <h3 class="mb-4">DANH SÁCH <span>SẢN PHẨM</span></h3>
                    <ul>
                        @foreach($menu_horizon as $key=>$data)
                            <li style="padding: 2px 0px">
                                <a href="{{URL::to('danh-muc/'.$data->path)}}">
                                    {{$data->name}}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>


            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <span>Copyright © 2018 Smartlinks.vn . All Rights Reserved.</span>
        </div>
    </div>
</div>