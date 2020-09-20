@extends('app')

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
        @endif
    @endif

@endsection
