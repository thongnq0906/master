@extends('frontend.partials.master')
@section('title', 'Tìm kiếm')
@section('content')
<div class="content">
    <div class="container">
        <h3>Kết quả tìm kiếm: {{ $input }}</h3>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                @foreach($search as $p)
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
                                <a href="{{ url('chi-tiet/'.$p->slug)}}.html"><h4 class="">{{ $p->name }}</h4></a>
                                <br>
                                {{$p->getShortDec()}}
                                <br>
                                <a href="{{ url('chi-tiet/'.$p->slug)}}.html" class="chi-tiet-tin">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $search->links() }}
            </div>
            @include('frontend.partials.sidebar')
        </div>
    </div>
</div>
@endsection