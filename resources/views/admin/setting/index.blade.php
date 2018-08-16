@extends('admin.partials.master')
@section('title', 'Cấu hình web')
@section('content')
<div class="content-wrapper">
<section class="content-header">
    <div class="static-content-wrapper">
        <div class="static-content">
            <div class="page-content">
                <div class="page-heading">
                    <h1>Cấu hình web</h1>
                    <div class="options">
                        <div class="btn-toolbar">
                        </div>
                    </div>
                </div>
                <ol class="breadcrumb">
                    <li>Trang chủ</li>
                    <li class="active">Cấu hình</li>
                </ol>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                </div>
                                <div class="panel-body">
                                    <form role="form" class="form-horizontal" method="get"
                                    action="{{ route('admin.setting.update') }}"
                                    enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Tên công ty: </label>
                                                <div class="col-md-8">
                                                        <input type="text" class="form-control"
                                                        placeholder="Tên công ty" name="name" value="{{ $settings->name }}">
                                                    @if($errors->has('name'))
                                                        <strong>
                                                            <span class="help-block">
                                                                {{ $errors->first('name') }}
                                                            </span>
                                                        </strong>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
                                                <label class="col-md-3 control-label">Email: </label>
                                                <div class="col-md-8">
                                                        <input type="email" class="form-control"
                                                        placeholder="Email" name="email" value="{{ $settings->email }}">
                                                    @if($errors->has('email'))
                                                        <strong>
                                                            <span class="help-block">
                                                                {{ $errors->first('email') }}
                                                            </span>
                                                        </strong>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('address') ? 'has-error' : '' }}">
                                                <label class="col-md-3 control-label">Địa chỉ: </label>
                                                <div class="col-md-8">
                                                        <input type="text" class="form-control"
                                                        placeholder="Địa chỉ" name="address" value="{{ $settings->address }}">
                                                    @if($errors->has('address'))
                                                        <strong>
                                                            <span class="help-block">
                                                                {{ $errors->first('address') }}
                                                            </span>
                                                        </strong>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('phone') ? 'has-error' : '' }}">
                                                <label class="col-md-3 control-label">Điện thoại: </label>
                                                <div class="col-md-8">
                                                        <input type="text" class="form-control"
                                                        placeholder="Điện thoại" name="phone" value="{{ $settings->phone }}">
                                                    @if($errors->has('phone'))
                                                        <strong>
                                                            <span class="help-block">
                                                                {{ $errors->first('phone') }}
                                                            </span>
                                                        </strong>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('hotline') ? 'has-error' : '' }}">
                                                <label class="col-md-3 control-label">Hotline: </label>
                                                <div class="col-md-8">
                                                        <input type="text" class="form-control"
                                                        placeholder="Hotline" name="hotline" value="{{ $settings->hotline }}">
                                                    @if($errors->has('hotline'))
                                                        <strong>
                                                            <span class="help-block">
                                                                {{ $errors->first('hotline') }}
                                                            </span>
                                                        </strong>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('website') ? 'has-error' : '' }}">
                                                <label class="col-md-3 control-label">website: </label>
                                                <div class="col-md-8">
                                                        <input type="text" class="form-control"
                                                        placeholder="website" name="website" value="{{ $settings->website }}">
                                                    @if($errors->has('website'))
                                                        <strong>
                                                            <span class="help-block">
                                                                {{ $errors->first('website') }}
                                                            </span>
                                                        </strong>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('thead') ? 'has-error' : '' }}">
                                                <label class="col-md-3 control-label">Thẻ head: </label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" placeholder="Meta_Des"
                                                    name="thead" id="thead">{{ $settings->thead }}</textarea>
                                                    @if($errors->has('thead'))
                                                        <strong>
                                                            <span class="help-block">
                                                                {{ $errors->first('thead') }}
                                                            </span>
                                                        </strong>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('tbody') ? 'has-error' : '' }}">
                                                <label class="col-md-3 control-label">Thẻ body: </label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" placeholder="Meta_Des"
                                                    name="tbody" id="tbody">{{ $settings->tbody }}</textarea>
                                                    @if($errors->has('tbody'))
                                                        <strong>
                                                            <span class="help-block">
                                                                {{ $errors->first('tbody') }}
                                                            </span>
                                                        </strong>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('robot') ? 'has-error' : '' }}">
                                                <label class="col-md-3 control-label">File-robot: </label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" placeholder="Meta_Des"
                                                    name="robot" id="robot">{{ $file }}</textarea>
                                                    @if($errors->has('robot'))
                                                        <strong>
                                                            <span class="help-block">
                                                                {{ $errors->first('robot') }}
                                                            </span>
                                                        </strong>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('title_seo') ? 'has-error' : '' }}">
                                                <label class="col-md-3 control-label">Title_SEO: </label>
                                                <div class="col-md-8">
                                                        <input type="text" class="form-control" placeholder="Title SEO"
                                                        name="title_seo" value="{{ $settings->title_seo }}">
                                                    @if($errors->has('title_seo'))
                                                        <strong>
                                                            <span class="help-block">
                                                                {{ $errors->first('title_seo') }}
                                                            </span>
                                                        </strong>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('meta_key') ? 'has-error' : '' }}">
                                                <label class="col-md-3 control-label">Meta_key: </label>
                                                <div class="col-md-8">
                                                        <textarea type="text" class="form-control" placeholder="Meta_key"
                                                        name="meta_key">{{ $settings->meta_key }}</textarea>
                                                    @if($errors->has('meta_key'))
                                                        <strong>
                                                            <span class="help-block">
                                                                {{ $errors->first('meta_key') }}
                                                            </span>
                                                        </strong>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group{{ $errors->has('meta_des') ? 'has-error' : '' }}">
                                                <label class="col-md-3 control-label">Meta_des: </label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" placeholder="Meta_Des"
                                                    name="meta_des">{{ $settings->meta_des }}</textarea>
                                                    @if($errors->has('meta_des'))
                                                        <strong>
                                                            <span class="help-block">
                                                                {{ $errors->first('meta_des') }}
                                                            </span>
                                                        </strong>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <button class="btn-success btn">Lưu</button>
                                                    <a class="btn-default btn" href='javascript:goback()'>Quay lại</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main content -->
</div><!-- /.content-wrapper -->
@endsection
