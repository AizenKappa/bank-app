<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bank Sys - @yield('title')</title>
    
    
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    @auth
        @include('Auth.navbar')
    @endauth

    
    <div class='container-fluid'>
        @yield('content')
    </div>

</body>

</html>