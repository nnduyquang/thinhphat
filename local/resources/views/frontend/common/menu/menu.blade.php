<div id="menu" class="container-fluid p-0 d-none d-md-block">
    <div id="menu-top">
        <div class="container">
            <div class="row">
                <div class="menu-top-l col-md-8">
                    {{ Html::image('images/uploads/logo2.png','',array('class'=>'no-style')) }}
                    <ul class="menu-list-r">
                        <li><a href="#" id="clickSearch"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        <li>
                            {!! Form::open(array('method'=>'POST','id'=>'formSearch')) !!}
                            {!! Form::text('key-search', '', array('placeholder' => 'Tìm Kiếm','class' => 'form-control','id'=>'searchInput')) !!}
                            {!! Form::close() !!}
                        </li>
                    </ul>
                </div>
                <div class="menu-top-r col-md-4 text-right ">
                    <ul>
                        <li><span><i class="fa fa-phone" aria-hidden="true"></i> 0965.322.239 - 0901.196.676</span></li>
                        <li><span>
                                    {{ Html::image('images/uploads/icon/placeholder.png','',array('style'=>'with:15px;height:15px')) }}
                                55/4 KP3 HÀ HUY GIÁP, Q.12, TPHCM</span></li>
                    </ul>


                </div>
            </div>
        </div>
    </div>

    <div id="menu-list" class="col-md-12">
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <ul class="menu-list-l">
                        <li class="active"><a href="{{URL::to('/')}}"><i class="fa fa-home" aria-hidden="true"></i>Trang
                                chủ</a></li>
                        <li class="sub-menu"><i class="fa fa-lightbulb-o" aria-hidden="true"></i><a href="#">Danh Mục
                                Sản Phẩm</a>
                            <ul>
                                @foreach($menu_horizon as $key=>$data)
                                    <li><a href="{{URL::to('danh-muc/'.$data->path)}}">{{$data->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i>Khuyến Mãi</a>
                        <li class="sub-menu"><i class="fa fa-gift" aria-hidden="true"></i><a href="#">Báo Giá Và
                                Catalogue</a>
                            <ul>
                                @foreach($catalogues as $key=>$data)
                                    <li><a href="{{URL::to('catalogue/'.$data->path)}}">{{$data->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i>Thiết Kế Thi Công</a>
                        </li>
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Liên Hệ</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>