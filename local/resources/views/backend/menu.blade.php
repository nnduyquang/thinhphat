<ul class="sidebar-menu" data-widget="tree">
    <li class="header">HEADER</li>
    <!-- Optionally, you can add icons to the links -->
    <li><a href="#"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
    @if(Auth::user()->hasRole('admin')||Auth::user()->can('user-list'))
        <li><a href="{{ route('users.index') }}"><i class="fa fa-link"></i> <span>Người Dùng</span></a>
        </li>
    @endif
    @if(Auth::user()->can('role-list'))
        <li><a href="{{ route('roles.index') }}"><i class="fa fa-link"></i> <span>Quyền</span></a></li>
    @endif
    <li><a href="{{ route('category.index') }}"><i class="fa fa-link"></i> <span>Loại Sản Phẩm</span></a></li>
    <li><a href="{{ route('product.index') }}"><i class="fa fa-link"></i> <span>Sản Phẩm</span></a></li>
</ul>