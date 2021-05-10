<!doctype html>
<html lang="{{ config('app.lang') }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>@yield('title')</title>

    @include('exports.styles', ['format' => $format])
    @include('exports.custom-head-content')
</head>
<body>
@include('exports.header', ['format' => $format])
@include('exports.footer', ['format' => $format])
<div class="page-content">
    @yield('content')
</div>
</body>
</html>