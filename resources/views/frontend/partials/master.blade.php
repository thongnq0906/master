<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_des')">
    <meta name="author" content="Nguyễn Quốc Thông - 01639277272">
    <meta name="keywords" content="@yield('meta_key')">
    <meta name="twitter:card" content="summary" />
    <meta property="og:site_name" content="CODOBYE" />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('title_seo')" />
    <meta name="twitter:description" content="@yield('meta_des')" />
    <meta name="twitter:title" content="@yield('title_seo')" />
    <title>@yield('title')</title>
    <link rel="canonical" href="@yield('canonical')"/>
    <link href={{ asset('bootstrap/css/bootstrap.min.css') }} rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href={{ asset('frontend/css/style.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('css/fontawesome-all.css') }}>
    {!! $setting->thead !!}
</head>
<body>
    @include('frontend.partials.header')
    @yield('content')
    @include('frontend.partials.footer')

    <script src={{ asset('js/jquery-3.3.1.min.js') }}></script>
    <script src={{ asset('bootstrap/js/bootstrap.min.js') }}></script>
    <script src={{ asset('frontend/js/menu.js') }}></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
    @yield('script')

</body>
</html>
