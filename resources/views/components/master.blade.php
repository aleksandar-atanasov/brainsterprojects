<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{$adminCss ?? ''}}
    @if (!str_contains(request()->path(), 'admin'))
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endif
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>

    <div id="app">
       {{$slot}}


       @include('inc._footer')
    </div>



    <!-- Scripts -->
    <script src="{{ asset('/bower_components/jquery/dist/jquery.js') }}"></script>
     <!-- Jquery-Validation -->
     <script src="{{ asset('/bower_components/jquery-validation/dist/jquery.validate.min.js') }}"></script>
     <script src="{{ asset('/bower_components/jquery-validation/dist/additional-methods.min.js') }}"></script>
    {{$adminScripts ?? ''}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
