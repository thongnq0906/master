@extends('frontend.partials.master')
@if($intro)
    @section('title', $intro->title_seo)
    @section('title_seo', $intro->title_seo)
    @section('meta_key', $intro->meta_key)
    @section('meta_des', $intro->meta_des)
    @section('content')
    <div class="container">
        {!! $intro->description !!}
    </div>
    @endsection
@endif