@extends('admin.partials.master')
@section('title', 'Quản lý danh sách cửa hàng')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>Danh sách cửa hàng</h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i>Trang chủ</li>
            <li>Quản lý danh sách cửa hàng</li>
            <li class="active">Danh mục</li>
        </ol>
        <a href="{{ route('admin.support.create') }}" class="btn btn-primary">
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
                                        <table id="datatable_post" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tên</th>
                                                    <th>Danh sách cửa hàng</th>
                                                    <th>Vị trí</th>
                                                    <th>Trạng thái</th>
                                                    <th>Cập nhật</th>
                                                    <th>Xử lý</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($support as $key => $c)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $c->name }}</td>
                                                    <td><?php echo(html_entity_decode($c->getShortDec())) ?></td>
                                                    <td>{{ $c->position }}</td>
                                                    <td>
                                                        @if($c->status == 1)
                                                            <a href="{{ route('support.status.close' ,$c->id) }}"
                                                                class="label label-success" title="Ẩn">Hiện</a>
                                                        @else
                                                            <a href="{{ route('support.status.open' ,$c->id) }}"
                                                                class="label label-danger" title="Hiện">Ẩn</a>
                                                        @endif
                                                    </td>
                                                    <td>{{ $c->updated_at }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.support.update', $c->id)}}">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a href="{{ route('admin.support.destroy', $c->id) }}"
                                                            type="button"
                                                            onclick="return confirm_delete('Bạn có muốn xóa không ?')">
                                                            <i class="fa fa-times-circle"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <th>STT</th>
                                                <th>Tên</th>
                                                <th>Danh sách cửa hàng</th>
                                                <th>Vị trí</th>
                                                <th>Trạng thái</th>
                                                <th>Cập nhật</th>
                                                <th>Xử lý</th>
                                            </tfoot>
                                        </table>
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
    $(function () {
        $("#datatable_post").DataTable();
    });
</script>
@endsection