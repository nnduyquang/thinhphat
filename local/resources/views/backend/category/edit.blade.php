@extends('backend.master')
@section('styles')
@stop
@section('scripts')
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
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Tên Loại Sản Phẩm:</strong>
                    {!! Form::text('name',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <strong>Mô Tả Ngắn:</strong>
                    {!! Form::textarea('description',null,array('placeholder' => '','id'=>'description','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                </div>
                <div class="form-group">
                    <strong>Menu Cấp</strong>
                    <select class="form-control" name="parent">'
                        @foreach($dd_categories as $key=>$data) {
                        @if($data['index']===$category->parent_id)
                            <option value="{{$data['index']}}" selected>{{$data['value']}}</option>
                        @else
                            <option value="{{$data['index']}}">{{$data['value']}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>

                <div class="line-break"></div>
                <h3>SEO</h3>
                <div class="form-group">
                    <strong>Tiêu Đề (title):</strong>
                    {!! Form::text('seo_title',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <strong>Mô Tả (description):</strong>
                    {!! Form::textarea('seo_description',null,array('placeholder' => '','id'=>'seo-description','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                </div>
                <div class="form-group">
                    <strong>Kích Hoạt:</strong>
                    <input {{$category->isActive==1?'checked':''}}  name="category_is_active" data-on="Có"
                           data-off="Không"
                           type="checkbox" data-toggle="toggle">
                </div>
                <div class="form-group">
                    <div class="form-inline">
                        <strong>Thứ tự:</strong>
                        {!! Form::text('order', $category->order, array('placeholder' => 'Thứ Tự','class' => 'form-control')) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Hình Đại Diện: </strong>
                    {!! Form::text('image', url('/').'/'.$category->image, array('class' => 'form-control','id'=>'pathImageLoaiSanPham')) !!}
                    <br>
                    {!! Form::button('Tìm', array('id' => 'btnBrowseImageLoaiSanPham','class'=>'btn btn-primary')) !!}
                </div>
                <div class="form-group">
                    {{ Html::image($category->image,'',array('id'=>'showHinhLoaiSanPham','class'=>'show-image'))}}
                </div>
            </div>
            <div class="col-md-12" style="text-align:  center;">
                <button id="btnDanhMuc" type="submit" class="btn btn-primary">Cập Nhật Loại Sản Phẩm</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop
