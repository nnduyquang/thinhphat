@extends('backend.admin.master')
@section('styles')
    {{ Html::style('css/be.product.css') }}
@stop
@section('scripts')
    {{ Html::script('js/be.product.js',array('async' => 'async') ) }}
@stop
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Quản Lý Sản Phẩm</h2>
            </div>
            <div class="pull-right">
                @permission(('product-create'))
                <a class="btn btn-success" href="{{ route('product.create') }}"> Tạo Mới Sản Phẩm</a>
                @endpermission
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    {!! Form::open(array('route' => 'product.search','method'=>'POST','id'=>'formSearchProduct')) !!}
    <div class="col-md-12">
        <div class="row">
            <div class="form-group">
                <div class="col-md-6">
                    <div class="row">
                        {!! Form::text('txtSearch',null, array('class' => 'form-control','id'=>'txtSearch')) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    {!! Form::button('Tìm Kiếm', array('id' => 'btnSearchProduct','class'=>'btn btn-primary')) !!}
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
    @if(!empty($keywords))
        <div id="showKeySearch" class="col-md-12">
            <div class="row wrap-search">
                <i class="fa fa-caret-right" aria-hidden="true"></i>{{$keywords}} <a href="{{ route('product.search') }}">X</a>
            </div>
        </div>
        {{ Form::hidden('hdKeyword', $keywords) }}
    @endif
    <table class="table table-bordered">
        <tr>
            <th>TT</th>
            <th>Tên Sản Phẩm</th>
            <th>Path</th>
            <th>Loại Sản Phẩm</th>
            <th>Hình Đại Diện</th>
            <th>Kích Hoạt</th>
            <th>Người Đăng</th>
            <th>Ngày Đăng</th>
            <th>Ngày Cập Nhật</th>
            <th>Tình Trạng</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $key => $product)
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->path }}</td>
            <td>{{ $product->category->name }}</td>
            <td>{{ Html::image($product->image,'',array('id'=>'showHinhSanPham','class'=>'showHinhSanPham'))}}</td>
            <td>{{ $product->isActive }}</td>
            <td>{{ $product->users->name }}</td>
            <td>{{ $product->created_at }}</td>
            <td>{{ $product->updated_at }}</td>
            <td>{{$product->isActive}}</td>
            <td>
                @permission(('product-edit'))
                <a class="btn btn-primary" href="{{ route('product.edit',$product->id) }}">Cập Nhật</a>
                @endpermission
                @permission(('product-delete'))
                {!! Form::open(['method' => 'DELETE','route' => ['product.destroy', $product->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
                @endpermission
            </td>
            </tr>
        @endforeach
    </table>
    {!! $products->links() !!}
@stop