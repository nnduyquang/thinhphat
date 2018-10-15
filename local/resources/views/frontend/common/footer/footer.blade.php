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

                        <li><a href="#"><i class="fas fa-map-marker"></i><span>ĐỊA CHỈ : {{$dataConfig['config-address']}}</span></a>
                        </li>
                        <li><a href="#"><i class="fas fa-users"></i><span>LIÊN HỆ : {{$dataConfig['config-phone']}} </span></a></li>
                        <li><a href=""><i
                                        class="far fa-clock"></i><span>Từ 8h00-17h00 các ngày thứ 2 đến thứ 7</span></a>
                        </li>
                        <li><a href="#"><i class="far fa-envelope"></i><span>dentrangtrithinhphat@gmail.com</span></a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 mb-3">
                    <h3>BẢN ĐỒ <span>HƯỚNG DẨN</span></h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.3249366789546!2d106.63012575078301!3d10.862871592224957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529f433b302c7%3A0x85d2b4c95f4c1de7!2zMTYgVMOibiBDaMOhbmggSGnhu4dwIDEwLCBUw6JuIENow6FuaCBIaeG7h3AsIFF14bqtbiAxMiwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1539597511695" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>


                <div class="col-md-4 mb-3 text-right">
                    <h3 class="mb-4">DANH SÁCH <span>SẢN PHẨM</span></h3>
                    <ul>
                        @foreach($listMenu['menu_horizon'] as $key=>$data)
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