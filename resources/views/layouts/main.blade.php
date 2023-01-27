<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('VIDEOCLUB') }}</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/menu_book.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('/img/shop.png') }}">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('/css/material-dashboard.css?v=2.1.1') }}" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>


<!--El body esta dividido en dos partes el auth  usuario logueado y el guest usuario no logueado-->

<body class="{{ $class ?? '' }}">
    {{-- Llamamos toda la parte de un usuario logueado llamamos la ventana 
        layouts.page_templates.auth para que haga parte de esta--}}

    @auth()
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @include('layouts.page_templates.auth')
    @endauth

    
    {{-- Llamamos toda la parte de un usuario invitado y  llamamos la ventana 
        layouts.page_templates.guest para que haga parte de esta y pueda traer sus componentes--}}

    @guest()
    @include('layouts.page_templates.guest')
    @endguest
    <!--   Core JS Files   -->
    <script src="{{ asset('/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('/js/core/bootstrap-material-design.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>

    @stack('js')
</body>

</html>