<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('layouts.css');
</head>
<body>
    @include('layouts.Navbar');

    @yield('content');

    @include('layouts.js');
    
</body>
</html>