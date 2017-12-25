@extends('backend.admin.master')
@section('styles')
    {{ Html::style('css/be.category.css') }}
    {{ Html::style('css/bootstrap-toggle.min.css') }}
@stop
@section('scripts')
    {{ Html::script('js/bootstrap-toggle.min.js',array('async' => 'async') ) }}
    {{ Html::script('js/ulti.js',array('async' => 'async') ) }}
    {{ Html::script('be.catbe.category.jsrray('async' => 'async') ) }}
@stop
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Chỉnh Sửa Loại Sản Phẩm</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('category.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($category,array('route' => ['category.update',$category->id],'method'=>'PATCH')) !!}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <strong>Tên Loại Sản Phẩm:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <span>Hình Đại Diện: </span>
                {!! Form::text('image', url('/').'/'.$category->image, array('class' => 'form-control','id'=>'path')) !!}
                {!! Form::button('Browses', array('id' => 'btnBrowse','class'=>'btn btn-primary')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>Kích Hoạt:</strong>
                <input {{$category->isActive==1?'checked':''}}  name="category_is_active" data-on="Có" data-off="Không"
                       type="checkbox" data-toggle="toggle">
                <div class="form-inline">
                    <strong>Thứ tự:</strong>
                    {!! Form::text('category_order',  $category->order, array('placeholder' => 'Thứ Tự','class' => 'form-control')) !!}
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                {{ Html::image($category->image,'',array('id'=>'showHinhLoaiSanPham','class'=>'showHinhLoaiSanPham'))}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button id="btnDanhMuc" type="submit" class="btn btn-primary">Cập Nhật Loại Sản Phẩm</button>
        </div>
    </div>
    {!! Form::close() !!}
@stop
