<div id="menu" class="container-fluid p-0 d-none d-md-block">
    <div id="menu-top">
        <div class="container">
            <div class="row">
                <div class="menu-top-l col-md-8">
                    <a href="{{URL::to('/')}}">{{ Html::image('images/uploads/logo2.png','',array('class'=>'no-style')) }}
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
                    <ul class="list-unstyled">
                        <li><span><i class="fa fa-phone" aria-hidden="true"></i> 0965.322.239 - 0901.196.676</span></li>
                        <li><span>
                                <i class="fas fa-map-marker"></i>
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
                        <li class="active has-dropdown-item"><a href="#" data-toggle="dropdown"><i
                                        class="fa fa-home" aria-hidden="true"></i>Danh Sách Sản Phẩm</a>
                            <ul>
                                <div class="arround">
                                    @for($i=0;$i<count($listMenu['menu_sidebar']);$i++)
                                        @if($listMenu['menu_sidebar'][$i]->level==0)
                                            <li class="has-left-item"><a
                                                        href="{{URL::to('danh-muc/'.$listMenu['menu_sidebar'][$i]->path)}}">{{$listMenu['menu_sidebar'][$i]->name}}</a>
                                                <div class="list-sub-menu">
                                                    <div class="row h-100">
                                                        <div class="col-md-8">
                                                            <ul>
                                                                @foreach($listMenu['menu_sidebar'] as $key=>$data)
                                                                    @if($data->level==1 &&$data->parent_id==$listMenu['menu_sidebar'][$i]->id)
                                                                        <li><a href="{{URL::to('danh-muc/'.$data->path)}}">{{$data->name}}</a></li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-4 h-100">
                                                            {{ Html::image($listMenu['menu_sidebar'][$i]->image,'',array('class'=>'h-100 w-100')) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endif
                                    @endfor
                                </div>
                            </ul>


                        </li>
                        <li><a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i>Khuyến Mãi</a>
                        <li class="sub-menu"><a href="#" data-toggle="dropdown"><i
                                        class="fa fa-home" aria-hidden="true"></i>Báo Giá Và Catalogue</a>
                            <ul>
                                @foreach($listMenu['catalogues'] as $key=>$data)
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