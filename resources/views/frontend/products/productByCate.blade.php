@extends('frontend.partials.master')
@section('title', 'Trang chủ')
@section('content')

    <div class="container">
        <h1>{{ $cate_product->name }}</h1>
        <div class="row">
            @include('frontend.partials.sidebar')
            <div class="col-md-9">
                <div class="row">
                    @foreach($product as $p)
                    <div class="col-md-4">
                        <img src="{{ asset($p->image) }}" alt="">
                        <h4>{{ $p->name }}</h4>
                        <h4>{{ $p->price }}</h4>
                        <a href="">add-cart</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection