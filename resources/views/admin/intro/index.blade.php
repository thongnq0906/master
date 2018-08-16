@extends('admin.partials.master')
@section('title', 'Quản lý giới thiệu')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>Giới thiệu</h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i>Trang chủ</li>
            <li>Quản lý Giới thiệu</li>
            <li class="active">Danh mục</li>
        </ol>
        <a href="{{ route('admin.intro.create') }}" class="btn btn-primary">
            <i class=" fa fa-fw fa-plus"></i>
            Thêm mới
        </a>
    </section>
    <section class="content-header">
        <div class="static-content-wrapper">
            <div class="static-content">
                <div class="page-content">
                    @include('errors.message')
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="options">
                                        </div>
                                    </div>
                                    <div class="panel-body" style="overflow-x:auto;">
                                        <table class="table table-striped table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tên</th>
                                                    <th>Trạng thái</th>
                                                    <th>Cập nhật</th>
                                                    <th>Xử lý</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($intro as $key => $c)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $c->name }}</td>
                                                    <td>
                                                        @if($c->status == 1)
                                                            <a href="#" title="Ẩn" id="status" data-id="{{ $c->id }}">
                                                                <span id="status{{ $c->id }}"><span class="label label-success">Hiện</span></span>
                                                            </a>
                                                        @else
                                                            <a href="#" title="Hiện" id="status" data-id="{{ $c->id }}">
                                                                <span id="status{{ $c->id }}"><span class="label label-danger">Ẩn</span></span>
                                                            </a>
                                                        @endif
                                                    </td>
                                                    <td>{{ $c->updated_at }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.intro.update', $c->slug)}}">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a href="{{ route('admin.intro.destroy', $c->id) }}"
                                                            type="button"
                                                            onclick="return confirm_delete('Bạn có muốn xóa không ?')">
                                                            <i class="fa fa-times-circle"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{ $intro->links() }}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div><!-- /.content-wrapper -->
@endsection
@section('script')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).on('click', '#status', function(){
        var id = $(this).data('id');
        $.post('{{ route('admin.intro.status') }}', {id:id}, function(data){
            if (data.status == 1)
            {
                $('#status'+id).html('<span class="label label-success">Hiện</span>');
            } else {
                $('#status'+id).html('<span class="label label-danger">Ẩn</span>');
            }
        });
    });
    // $('#read-data').on('click', function(){
    //     $.get("", function(data){
    //         $('#data').empty().html(data);
    //     });
    // });

    // $('#create-intro').on('submit', function(e){
    //     e.preventDefault();
    //     var data = $(this).serialize();
    //     $.ajax({
    //         type : "POST",
    //         url:"",
    //         data : data,
    //         dataTy : 'json',
    //         success:function(data){
    //             data = JSON.parse(data);
    //             var tr = '';
    //             tr += '<tr id="d'+data.id+'">';
    //             tr += '<td>'+data.id+'</td>';
    //             tr += '<td>'+data.name+'</td>';
    //             if(data.status == 1){
    //                 tr += '<td><a href="" class="label label-success" title="Ẩn">Hiện</a></td>';
    //             }else{
    //                 tr += '<td><a href="" class="label label-danger" title="Ẩn">Ẩn</a></td>';
    //             }

    //             tr += '<td>'+data.created_at+'</td>';
    //             tr += '<td><a href="#" id="edit" data-id="'+data.id+'">Edit</a> <a href="#" id="del" data-id="'+data.id+'">delete</a></td>';
    //             tr += '</tr>';
    //             $('#data').append(tr);
    //         }
    //     });
    // });
    // $(document).on("click", "#del",function(){
    //     var id = $(this).data('id');
    //     $.post('intro/delete', {id:id},function(){
    //         $('#data #d'+id).remove();
    //     });
    // });

    // $(document).on("click", "#edit",function(){
    //     var id = $(this).data('id');
    //     $.get("", {id:id}, function(data){
    //         $('#update-intro').find('#update-name').val(data.name);
    //         $('#update-intro').find('#update-position').val(data.position);
    //         $('#myModal2').modal('show');
    //     });
    // });

    // $('#update-intro').on('submit', function(e){
    //     e.preventDefault();
    //     var data = $(this).serialize();
    //     $.ajax({
    //         type : "POST",
    //         url:"",
    //         data : data,
    //         dataTy : 'json',
    //         success:function(data){
    //             data = JSON.parse(data);
    //             var tr = '';
    //             tr += '<tr id="d'+data.id+'">';
    //             tr += '<td>'+data.id+'</td>';
    //             tr += '<td>'+data.name+'</td>';
    //             if(data.status == 1){
    //                 tr += '<td><a href="" class="label label-success" title="Ẩn">Hiện</a></td>';
    //             }else{
    //                 tr += '<td><a href="" class="label label-danger" title="Ẩn">Ẩn</a></td>';
    //             }

    //             tr += '<td>'+data.created_at+'</td>';
    //             tr += '<td><a href="#" id="edit" data-id="'+data.id+'">Edit</a> <a href="#" id="del" data-id="'+data.id+'">delete</a></td>';
    //             tr += '</tr>';
    //             $('#data').append(tr);
    //         }
    //     });
    // });
</script>
@endsection