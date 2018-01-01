@extends('backend.master')
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tạo Mới Catalogue</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('catalogue.index') }}"> Back</a>
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
    {!! Form::open(array('route' => 'catalogue.store','method'=>'POST')) !!}
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Tên Catalogue:</strong>
                    {!! Form::text('title',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <strong>Mô Tả Ngắn:</strong>
                    {!! Form::textarea('description',null,array('placeholder' => '','id'=>'description-catalogue','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                </div>
                <div class="form-group">
                    <strong>Nội Dung Catalogue:</strong>
                    {!! Form::textarea('content',null,array('placeholder' => '','id'=>'content-catalogue','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                </div>

                <div class="line-break"></div>
                <h3>SEO</h3>
                <div class="form-group">
                    <strong>Tiêu Đề (title):</strong>
                    {!! Form::text('seo_title',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <strong>Mô Tả (description):</strong>
                    {!! Form::textarea('seo_description',null,array('placeholder' => '','id'=>'seo-description-catalogue','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                </div>
                <div class="form-group">
                    <strong>Kích Hoạt:</strong>
                    <input name="page_is_active" data-on="Có" data-off="Không" type="checkbox" data-toggle="toggle">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Hình Đại Diện: </strong>
                    {!! Form::text('image', null, array('class' => 'form-control','id'=>'pathImageCatalogue')) !!}
                    <br>
                    {!! Form::button('Tìm', array('id' => 'btnBrowseImageCatalogue','class'=>'btn btn-primary')) !!}
                </div>
                <div class="form-group">
                    {{ Html::image('','',array('id'=>'showHinhCatalogue','class'=>'show-image'))}}
                </div>
            </div>
            <div class="col-md-12" style="text-align:  center;">
                <button id="btnDanhMuc" type="submit" class="btn btn-primary">Tạo Mới Catalogue</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop