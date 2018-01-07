<div id="menu-category-2" class="col-md-12 hidden-sm hidden-xs">
    <div class="row">
        @for($i=0;$i<count($menu_sidebar);$i++)
            @if($menu_sidebar[$i]->level==0)
                <div class="one-category col-md-12">
                    <h3><a href="{{URL::to('danh-muc/'.$menu_sidebar[$i]->path)}}">{{$menu_sidebar[$i]->name}}</a></h3>
                    <ul class="list-sub-item">
                        @foreach($menu_sidebar as $key=>$data)
                            @if($data->level==1 &&$data->parent_id==$menu_sidebar[$i]->id)
                                <li><a href="{{URL::to('danh-muc/'.$data->path)}}">{{$data->name}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            @endif
        @endfor
    </div>
</div>