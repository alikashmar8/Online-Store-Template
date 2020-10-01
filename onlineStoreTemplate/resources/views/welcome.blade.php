@extends('layouts.app')

@section('content')
    <div class="hero" style=" background-image: url(https://img.freepik.com/free-photo/sea-view-dining-living-room-luxury-summer-beach-house-with-swimming-pool-near-wooden-terrace_42251-141.jpg?size=626&ext=jpg&ga=GA1.2.1536601498.1589793154);
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
                        <button class=" btn btn-primary1" style=" border-radius: 2rem;" type="submit">Search</button>
                        </div>
                    </form>
                </div>
                </div>
            @endif
        </div>
    </div>
@endsection
