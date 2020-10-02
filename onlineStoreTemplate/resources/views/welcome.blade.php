@extends('layouts.app')

@section('content')
    <div class="hero" style=" background-image: url(https://webside.xyz/MK/img/m.jpg); height: 500px;
    background-position: 50% 15%;
    " >
        <div class="inner">
            @if(!\Illuminate\Support\Facades\Auth::guest())
                {{--        if user logged in--}}
                @if(\Illuminate\Support\Facades\Auth::user()->role == 0)
                    {{--            admin home page--}}
                    <div class="row container">
                        <div class="col-md-1"></div>

                        <div class="col-md-5 bg-white p-2">
                            <h2>Apartments waiting for confirmation = {{ count($notAcceptedProperties) }}</h2>
                            <a href="/acceptProperties">Check Now</a>
                        </div>

                        <div class="col-md-1"></div>

                        <div class="col-md-5 bg-white p-2">
                            <h2>New User Last 24 Hrs: {{ count($recentUsers) }}</h2>
                            <a href="/users">See Users</a>

                        </div>

                    </div>
                @else
                    {{--            user logged in--}}

                    <div class="row mt-5 pt-5">
                        <div class="d-flex flex-column m-auto ">
                        <form class="form-inline my-2 my-lg-0">
                            <div class="form-label-group">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search">
                            <button class="btn btn-primary1" style=" border-radius: 2rem;"  type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                    </div>
                @endif

            @else
                {{--    guest--}}
                <div class="row mt-5 pt-5">
                <div class="d-flex flex-column m-auto ">
                    <form class="form-inline my-2 my-lg-0">
                        <div class="form-label-group">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search">
                        <button class="  btn-primary1" style=" " type="submit">Search</button>
                        </div>
                    </form>
                </div>
                </div>
            @endif
        </div>
    </div>

    <div class="main1">
        <div>
            <h1> <i class="fas fa-laptop-house"></i></h1>
            <p> Buy, Rent, Share, or Sell your property online</p>
        </div>
        <div>
            <h1> <i class="fas fa-search-dollar"></i></h1>
            <p> Find what you are looking with the best price</p>
        </div>
        <div>
            <h1> <i class="fas fa-user-clock"></i></h1>
            <p> Save time and enjoy our online services </p>
        </div>

    </div>
    <div class="main-content">

        <div class="main2">
            <div class="container bg-white">
                <h2>Welcome Text</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


                </p>
            </div>
            <div class="container bg-white">
                <h2>About Us</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


                </p>
            </div>
            <div class="container bg-white">
                <h2>Contact Us</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


                </p>
            </div>
        </div>

        <div class="main3">
            <div class="container">


            </div>

        </div>

    </div>
@endsection
