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
    {!! Form::open(array('route' => 'category.search','method'=>'POST','id'=>'formSearchCategory')) !!}
    <div class="col-md-12">
        <div class="row">
            <div class="form-group">
                <div class="col-md-6">
                    <div class="row">
                        {!! Form::text('txtSearch',null, array('class' => 'form-control','id'=>'txtSearch')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    {!! Form::button('Tìm Kiếm', array('id' => 'btnSearchCategory','class'=>'btn btn-primary')) !!}
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
    @if(!empty($keywords))
        <div id="showKeySearch" class="col-md-12">
            <div class="row wrap-search">
                <i class="fa fa-caret-right" aria-hidden="true"></i>{{$keywords}} <a href="{{ route('category.search') }}">X</a>
            </div>
        </div>
        {{ Form::hidden('hdKeyword', $keywords) }}
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