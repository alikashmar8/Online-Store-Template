<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <link href={{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet"/>

    <!-- Custom styles for this template -->
    <link href={{ asset("bootstrap/css/sticky-footer-navbar.css") }} rel="stylesheet"/>

    <!-- Optional theme -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
</head>
<body class="antialiased bg-info">
{{--<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">--}}
<div>
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endif
        </div>
    @endif
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Online Shop</a>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
            </ul>
            <span class="navbar-text">Welcome, USERNAME</span>
        </div>
    </nav>
</div>
@yield('content')
</body>
</html>
