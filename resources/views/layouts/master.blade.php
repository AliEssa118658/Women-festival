<!DOCTYPE html>

<html >



<head>
    <title>Womeen Festival</title>
    <link rel="icon" href="/images/svg/Logo-head.svg" type="image/x-icon">

    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <link href="/css/main.css?v={{ time() }}" rel="stylesheet">
    <link href="/css/respo.css?v={{ time() }}" rel="stylesheet">
    <link href="/css/swiper-bundle.min.css?v={{ time() }}" rel="stylesheet">
	{{--<link href="/css/cookies.css?v=8" rel="stylesheet"> --}}
    {{-- swiper slider --}}

    {{-- @if(app()->getLocale() === 'ar')
    <link rel="stylesheet" type="text/css" href="/css/rtl.css?v={{ time() }}" />
    @endif --}}
    @if(app()->getLocale() === 'ar')
    <link rel="stylesheet" type="text/css" href="/css/rtl.css?v={{ time() }}" />
    @endif


    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">

</head>

<body   onload="captchaimage()" style="background-color: #FBFBFB">
    <!--  Header Area Start  -->
    @include('layouts.header')
    <!-- Page Content  -->
    @yield('content')
    <!--  Footer Area Start  -->
    @include('layouts.footer')
    <!--  Footer Area End  -->
    <!-- Extra JS ------>
    @yield('extra')

    <!-- End Extra JS -->



</body>


</html>
