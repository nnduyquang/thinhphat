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
                <h2>Chỉnh Sửa Loại Sản Phẩm</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
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
    {!! Form::model($product,array('route' => ['product.update',$product->id],'method'=>'PATCH')) !!}
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
                    {!! Form::text('product_order', $product->order, array('placeholder' => 'Thứ Tự','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Kích Hoạt:</strong>
                    <input {{$product->isActive==1?'checked':''}}  name="product_is_active" data-on="Có" data-off="Không"
                           type="checkbox" data-toggle="toggle">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Loại Sản Phẩm:</strong><br>
                    {{ Form::hidden('hd-email-receive', $product->category_id) }}
                    @foreach($categories as $key=>$category)
                        @if($category->id===$product->category_id)
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                {{ Form::radio('idCategory', $category->id,true) }}{{ $category->name}}<br>
                            </div>
                        @else
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                {{ Form::radio('idCategory', $category->id,false) }}{{ $category->name}}<br>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <span>Hình Đại Diện: </span>
                    {!! Form::text('image', url('/').'/'.$product->image, array('class' => 'form-control','id'=>'path')) !!}
                    {!! Form::button('Browses', array('id' => 'btnBrowse','class'=>'btn btn-primary')) !!}
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            {{ Html::image($product->image,'',array('id'=>'showHinhSanPham','class'=>'showHinhSanPham'))}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mô Tả:</strong>
                {!! Form::textarea('content-product',$product->content, array('placeholder' => 'Mô Tả','id'=>'content-product','class' => 'form-control','rows'=>'20','style'=>'resize:none')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button id="btnDanhMuc" type="submit" class="btn btn-primary">Tạo Mới Sản Phẩm</button>
        </div>
    </div>
    {!! Form::close() !!}
@stop
