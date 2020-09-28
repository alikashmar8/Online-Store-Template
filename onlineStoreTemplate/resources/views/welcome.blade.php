@extends('layouts.app')

@section('content')

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
            <div class="d-flex flex-column">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        @endif

    @else
        {{--    guest--}}
        <div class="row mt-5 pt-5">
        <div class="d-flex flex-column m-auto ">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </div>
    @endif

@endsection
