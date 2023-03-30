<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>Laravel</title>
</head>

<body>
    @yield('content')

    <footer>
        <p>Copyright 2022 Pizza House</p>
    </footer>
</body>
</html>
