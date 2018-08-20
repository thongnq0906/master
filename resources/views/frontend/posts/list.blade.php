@extends('frontend.partials.master')
@section('title', $cate_post->title_seo)
@section('title_seo', $cate_post->title_seo)
@section('meta_key', $cate_post->meta_key)
@section('meta_des', $cate_post->meta_des)
@section('canonical')
{{ URL::current() }}
@stop
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                @foreach($post as $p)
                    <div class="hic">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                <div class="img-post">
                                    <a class="" href="#">
                                       <img src="{{ asset($p->image) }}">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                                <div class="detail-post">
                                    <a href="{{ url('/'.$p->slug)}}.html"><h1 class="">{{ $p->name }}</h1></a>
                                    <br>
                                    {{$p->getShortDec()}}
                                    <br>
                                    <a href="{{ url('/'.$p->slug)}}.html" class="chi-tiet-tin">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $post->links() }}
            </div>
            @include('frontend.partials.sidebar')
        </div>
    </div>
</div>
@endsection