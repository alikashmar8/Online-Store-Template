<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Real Estate</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{--    Scripts--}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{--    leafletMap--}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    {{--    <link href={{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet"/>--}}

<!-- Custom styles for this template -->
    {{--    <link href={{ asset("bootstrap/css/sticky-footer-navbar.css") }} rel="stylesheet"/>--}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Optional theme -->
    {{--    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">--}}

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css"/>


</head>

<body class="bg-css">
<div>
    <nav class="navbar navbar-expand-lg navbar-inverse navbar-static-top navbar-dark bg-blue">
        <a class="navbar-brand navbar-margin" href="/">Real Estate</a>
{{--        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">--}}

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarsExample05" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navbar-margin" id="navbarSupportedContent">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                </li>
                {{--                <li class="nav-item">--}}
                {{--                    <a class="nav-link" href="/categories">Categories</a>--}}
                {{--                </li>--}}
                @if(!\Illuminate\Support\Facades\Auth::guest())
                    {{--                    user is logged in--}}
                    @if(\Illuminate\Support\Facades\Auth::user()->role == 0)
                        {{--                    admin menu option--}}
                        <li class="nav-item">
                            <a class="nav-link" href="/acceptedProperties">All Ads</a>
                        </li>
                    @else
                        {{--                        user menu options--}}
                        <li class="nav-item">
                            <a class="nav-link" href="/properties/buy">Buy</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/properties/rent">Rent</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/properties/create">Sell</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/properties/myProperties">My Properties</a>
                        </li>
                    @endif
                @endif
                @if(\Illuminate\Support\Facades\Auth::guest())
                    {{--                    guest only menu options--}}
                    <li class="nav-item">
                        <a class="nav-link" href="/properties/buy">Buy</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/properties/rent">Rent</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Sell</a>
                    </li>
                @endif
            </ul>

            {{--right side of nav--}}
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/users/{{ Auth::id() }}">
                            {{--                            id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre--}}
                            {{--                           data-toggle="dropdown" --}}
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li class="nav-tabs m-3"></li>
                    <li>
                        <a class="btn btn-outline-danger text-danger" role="button" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>

                        <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                            {{--                            <a class="dropdown-item text-white" href="{{ route('logout') }}"--}}
                            {{--                               onclick="event.preventDefault();--}}
                            {{--                                                     document.getElementById('logout-form').submit();">--}}
                            {{--                                {{ __('Logout') }}--}}
                            {{--                            </a>--}}

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
</div>

<main class="py-4">
    @yield('content')
</main>


</body>
</html>
