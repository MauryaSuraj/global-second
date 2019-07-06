<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Glaobal Agra Vaishchamber') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script>
        $(window).scroll(function(){
            if ($(this).scrollTop() > 50) {
                $('#dynamic').addClass('newClass');
            } else {
                $('#dynamic').removeClass('newClass');
            }
        });
    </script>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700&display=swap" rel="stylesheet">
</head>

<body>
@include('inc.navigation')
<div class="wrapper" id="app">
    @include('inc.userside')
    <div id="content">
        @yield('content')

    </div>
</div>

</body>

<script>
    $(window).scroll(function(){
        if ($(this).scrollTop() > 50) {
            $('#dynamic').addClass('newClass');
        } else {
            $('#dynamic').removeClass('newClass');
        }
    });
</script>

</html>
