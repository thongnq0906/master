@extends('admin.partials.master')
@section('title', 'Sửa sản phẩm')
@section('content')
<div class="content-wrapper">
<section class="content-header">
    <div class="static-content-wrapper">
        <div class="static-content">
            <div class="page-content">
                <div class="page-heading">
                    <h1>Sửa sản phẩm</h1>
                    <div class="options">
                        <div class="btn-toolbar">
                        </div>
                    </div>
                </div>
                <ol class="breadcrumb">
                    <li>Trang chủ</li>
                    <li>Quản lý sản phẩm</li>
                    <li>Sản phẩm</li>
                    <li class="active">Sửa</li>
                </ol>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                </div>
                                @include('errors.message')
                                <div class="panel-body">
                                    <form role="form" class="form-horizontal" method="POST"
                                    action="{{ route('admin.product.postUpdate', $product->slug) }}"
                                    enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Tên sản phẩm: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control"
                                                    placeholder="Nhập tên" name="name" value="{{ $product->name }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Ảnh bìa: </label>
                                                <div class="col-md-8">
                                                    <input type="file" class="form-control" name="image">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-8">
                                                    <img src="{{ asset($product->image) }}"
                                                    style="height: 50px; width: 50px">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-md-3 control-label">Ảnh chi tiết sản phẩm: </label>
                                                <div class="col-md-8">
                                                    @foreach($img_detail as $i)
                                                        <div class="image">
                                                            <img src="{{ asset($i->name) }}" style="height: 50px; width: 50px">
                                                            <label><span class="btn btn-danger delImage" id="data-1" data-id="{{ $i->id }}"> X </span></label>
                                                        </div>
                                                    @endforeach
                                                    <a class="btn btn-primary btn-sm addimg" style="margin-top: 2px; margin-left: 0">+ Thêm ảnh</a>
                                                </div>
                                            </div>

                                            <div class="form-group" id="contentimg">
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Giá: </label>
                                                <div class="col-md-8">
                                                    <input type="number" class="form-control"
                                                    placeholder="Nhập giá" name="price" value="{{ $product->price }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Trạng thái: </label>
                                                <label class="switch">
                                                    <input type="checkbox" name="status"
                                                    {{ ($product->status) ? 'checked': '' }}>
                                                    <span class="slider round"></span>
                                                    <input type="hidden" name="id" value="1">
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">SP trang chủ: </label>
                                                <label class="switch">
                                                    <input type="checkbox" name="is_home"
                                                    {{ ($product->is_home) ? 'checked': '' }}>
                                                    <span class="slider round"></span>
                                                    <input type="hidden" name="id" value="1">
                                                </label>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Vị trí: </label>
                                                <div class="col-md-8">
                                                    <input type="number" class="form-control"
                                                    placeholder="Nhập vị trí" name="position"
                                                    value="{{ $product->position }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Giới thiệu: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" placeholder="Giới thiệu"
                                                    name="title"  value="{{ $product->title }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Miêu tả: </label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" placeholder="Miêu tả"
                                                    name="description" id="editor1">
                                                        {{ $product->description }}
                                                    </textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Title_SEO: </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" placeholder="Title SEO"
                                                    name="title_seo" value="{{ $product->title_seo }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Meta_key: </label>
                                                <div class="col-md-8">
                                                    <textarea type="text" class="form-control" placeholder="Meta_key"
                                                    name="meta_key">{{ $product->meta_key }}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Meta_des: </label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" placeholder="Meta_Des"
                                                    name="meta_des">{{ $product->meta_des }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <button class="btn-success btn">Lưu</button>
                                                    <a class="btn-default btn"
                                                    href="{{ route('admin.product.create') }}">
                                                        Hủy
                                                    </a>
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
</div>
@endsection
@section('script')
<script>
    CKEDITOR.replace( 'editor1', {
        filebrowserBrowseUrl: '{{ route('ckfinder-customer') }}',
    } );

    $(document).ready(function() {
        $('.addimg').on('click', function(){
            $('#contentimg').append('<label class="col-md-3 control-label"></label><div class="col-md-8"><input type="file" class="form-control" name="img[]"></div>');
        });
        $('.delImage').on('click',function(){
            id = $(this).data('id');
            if(confirm('Bạn có muốn xóa ?')){
                flag = $(this).parent('label').parent('div.image').hide();
                $.get('http://master.qt/admin/product/delImage/', {id:id},function(data){
                });
            }
        });
    });
</script>
@endsection