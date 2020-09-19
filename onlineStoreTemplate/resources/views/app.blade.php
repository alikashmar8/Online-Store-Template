<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{--    Scripts--}}
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link href={{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet"/>

    <!-- Custom styles for this template -->
    <link href={{ asset("bootstrap/css/sticky-footer-navbar.css") }} rel="stylesheet"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css"/>




</head>
<body class="antialiased bg-info"
      style="background-image: url('data:image/jpeg;base64,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');">
<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Online Shop</a>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
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
                            <a class="nav-link" href="/acceptedApartments">All Ads</a>
                        </li>
                    @else
{{--                        user menu options--}}
                        <li class="nav-item">
                            <a class="nav-link" href="/apartments/buy">Buy</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/apartments/rent">Rent</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/apartments/create">Sell</a>
                        </li>
                    @endif
                @endif
                @if(\Illuminate\Support\Facades\Auth::guest())
{{--                    guest only menu options--}}
                    <li class="nav-item">
                        <a class="nav-link" href="/apartments/buy">Buy</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/apartments/rent">Rent</a>
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
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-white" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

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
