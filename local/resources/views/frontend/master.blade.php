<!DOCTYPE Html>
<Html lang="en-US" class="lang-en_US" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<meta http-equiv="content-type" content="text/Html;charset=UTF-8"/>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="">
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width">
    {{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"--}}
          {{--integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">--}}
    <link rel="stylesheet" type="text/css" href="font/flaticon.css">
    <link rel="shortcut icon" href="{{URL::to('images/icon/logo_ico.ico')}}">
    {{ Html::style('css/core.common.css') }}
    {{ Html::style('css/core.frontend.css') }}
    {{ Html::style('css/frontend.css') }}
    @yield('styles')
</head>
<body>
<header id="header">

</header>
<div id="blurrMe">
    @include('frontend.common.menu.loi-m-menu')
    @include('frontend.common.menu.menu')
    @yield('slider')
    @yield('container')
    <div class="footer">
        @include('frontend.common.footer.footer')
    </div>
</div>
@include('frontend.common.menu.m-sidebar')

{{ Html::script('js/core.common.js') }}
{{ Html::script('js/core.frontend.js') }}
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield('scripts')
{{ Html::script('js/scripts.js') }}
<div class="callback hidden-lg hidden-md">
    <div class="phone_animation">
        <div class="phone_animation_circle"></div>
        <div class="phone_animation_circle_fill"></div>
        <a href="tel:0965322239" class="phone_animation_circle_fill_img"><i class="fa fa-phone" aria-hidden="true"></i></a>
    </div>
</div>
<!--End of Tawk.to Script-->

<!-- Global Site Tag (gtag.js) - Google Analytics -->
{{--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-105806900-1"></script>--}}
{{--<script>--}}
{{--window.dataLayer = window.dataLayer || [];--}}
{{--function gtag(){dataLayer.push(arguments)};--}}
{{--gtag('js', new Date());--}}

{{--gtag('config', 'UA-105806900-1');--}}
{{--</script>--}}

</body>

</Html>