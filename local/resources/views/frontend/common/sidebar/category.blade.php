<div id="menu-category" class="col-md-12 hidden-sm hidden-xs">
    <div class="row">
        <h3><span>Danh Mục Sản Phẩm</span></h3>
        <ul>
            {{--@foreach($categories as $key=>$data)--}}
                {{--<li><a href="{{URL::to('san-pham/'.$data->path)}}">{{$data->name}}</a></li>--}}
            <a href="{{URL::to('category')}}"><li>Đèn Phòng Ngủ</li></a>
            <a href="{{URL::to('category')}}"><li>Đèn Gian Bếp</li></a>
            <a href="{{URL::to('category')}}"><li>Đèn Hành Lang</li></a>
            <a href="{{URL::to('category')}}"><li>Đèn Showroom - Nhà Hàng</li></a>
            <a href="{{URL::to('category')}}"><li>Thiết Bị Khác</li></a>
            {{--@endforeach--}}
        </ul>
    </div>
</div>