@extends('backend.admin.master')
@section('styles')
    {{ Html::style('css/be.product.css') }}
    {{ Html::style('css/bootstrap-toggle.min.css') }}
@stop
@section('scripts')
    {{ Html::script('js/bootstrap-toggle.min.js',array('async' => 'async') ) }}
    {{ Html::script('js/ulti.js',array('async' => 'async') ) }}
    {{ Html::script('js/be.product.js',array('async' => 'async') ) }}
@stop
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tạo Mới Sản Phẩm</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Úi!</strong> Hình Như Có Gì Đó Sai Sai.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('route' => 'product.store','method'=>'POST')) !!}
    <div class="row">
        <div class="col-md-6">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Tên Loại Sản Phẩm:</strong>
                    {!! Form::text('name', null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Thứ tự:</strong>
                    {!! Form::text('product_order', null, array('placeholder' => 'Thứ Tự','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Kích Hoạt:</strong>
                    <input name="product_is_active" data-on="Có" data-off="Không" type="checkbox" data-toggle="toggle">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Loại Sản Phẩm:</strong><br>
                    @foreach($categories as $key=>$category)
                            <div class="col-md-6">
                                {{ Form::radio('idCategory', $category->id) }}{{ $category->name}}</br>
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hình Đại Diện: </strong>
                    {!! Form::text('image', null, array('class' => 'form-control','id'=>'path')) !!}
                    {!! Form::button('Browses', array('id' => 'btnBrowse','class'=>'btn btn-primary')) !!}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            {{ Html::image('','',array('id'=>'showHinhSanPham','class'=>'showHinhSanPham'))}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mô Tả:</strong>
                {!! Form::textarea('content-product',null, array('placeholder' => 'Mô Tả','id'=>'content-product','class' => 'form-control','rows'=>'20','style'=>'resize:none')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button id="btnDanhMuc" type="submit" class="btn btn-primary">Tạo Mới Sản Phẩm</button>
        </div>
    </div>
    {!! Form::close() !!}
@stop