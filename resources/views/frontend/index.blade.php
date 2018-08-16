@extends('frontend/partials/master')
@section('title', $setting->title_seo)
@section('title_seo', $setting->title_seo)
@section('meta_key', $setting->meta_key)
@section('meta_des', $setting->meta_des)
@section('content')
<h1 style="display: none;">{{ $setting->title_seo }}</h1>
trang chủ
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#abc:first").addClass("del-border");
        });
    </script>
@endsection