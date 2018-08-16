@extends('frontend.partials.master')
@section('title', 'Trang chủ')
@section('content')

    <div class="container">
        <div class="row">
            @include('frontend.partials.sidebar')
            <div class="col-md-9">
                <div class="row">
                    @foreach($product as $p)
                    <div class="col-md-4">
                        <img src="{{ asset($p->image) }}" alt="">
                        <h4><a href="{{ route('detail_product', $p->slug) }}">{{ $p->name }}</a></h4>
                        <h4>{{ $p->price }}</h4>
                        <a href="{{ route('add-cart', $p->id) }}">add-cart</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
