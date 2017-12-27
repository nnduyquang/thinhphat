@extends('backend.master')
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Quản Lý Loại Sản Phẩm</h2>
            </div>
            <div class="pull-right">
                @permission(('category-create'))
                <a class="btn btn-success" href="{{ route('category.create') }}"> Tạo Mới Loại Sản Phẩm</a>
                @endpermission
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Tên Loại Sản Phẩm</th>
            <th>Path</th>
            <th>Hình Đại Diện</th>
            <th>Sắp Xếp</th>
            <th>Kích Hoạt</th>
            <th>Người Đăng</th>
            <th>Ngày Đăng</th>
            <th>Ngày Cập Nhật</th>
            <th>Tình Trạng</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($categories as $key => $category)
            <td>{{ $category->name }}</td>
            <td>{{ $category->path }}</td>
            <td>{{ Html::image($category->image,'',array('id'=>'showHinhLoaiSanPham','class'=>'show-image-index'))}}</td>
            <td>{{ $category->order }}</td>
            <td>{{ $category->isActive }}</td>
            <td>{{ $category->users->name }}</td>
            <td>{{ $category->created_at }}</td>
            <td>{{ $category->updated_at }}</td>
            <td>{{$category->isActive}}</td>
            <td>
                @permission(('category-edit'))
                <a class="btn btn-primary" href="{{ route('category.edit',$category->id) }}">Cập Nhật</a>
                @endpermission
                @permission(('category-delete'))
                {!! Form::open(['method' => 'DELETE','route' => ['category.destroy', $category->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                @endpermission
            </td>
            </tr>
        @endforeach
    </table>
    {{--{!! $categories->links() !!}--}}
@stop