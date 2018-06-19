<div id="menu-category" class="hidden-sm hidden-xs">
        <h3><span>Danh Mục Đèn Trang Trí</span></h3>
        <ul class="main-list-item">
            @for($i=0;$i<count($menu_sidebar);$i++)
                @if($menu_sidebar[$i]->level==0)
                    <li class="sub-menu">
                        <a class="main-link" href="{{URL::to('danh-muc/'.$menu_sidebar[$i]->path)}}">{{$menu_sidebar[$i]->name}}
                            @if($i==count($menu_sidebar)-1)
                                @break
                            @else
                                @if($menu_sidebar[$i+1]->parent_id==$menu_sidebar[$i]->id)
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                @endif
                            @endif
                        </a>
                        @if($i==count($menu_sidebar)-1)
                            @break
                        @else
                            @if($menu_sidebar[$i+1]->parent_id==$menu_sidebar[$i]->id)
                                <div class="nav-sub">
                                        <h3>{{$menu_sidebar[$i]->name}}</h3>
                                        <ul class="sub-menu-item">
                                            @foreach($menu_sidebar as $key=>$dataSubmenu)
                                                @if($dataSubmenu->level==1 && $menu_sidebar[$i]->id==$dataSubmenu->parent_id)
                                                    <li><a href="{{URL::to('danh-muc/'.$dataSubmenu->path)}}">{{$dataSubmenu->name}}</a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                            @endif
                        @endif
                    </li>
                @endif
            @endfor
        </ul>
</div>