@extends('layouts.app')


@section('content')

    <div class="hero" style=" background-image: url(https://image.freepik.com/free-photo/businessman-profile-looking-left_1098-295.jpg);
    " >
        <div class="inner">
            <h1>Plofile</h1>
        </div>
    </div>

    @if(!\Illuminate\Support\Facades\Auth::guest())
        {{--        user loggedin--}}
        @if(\Illuminate\Support\Facades\Auth::user()->role == 0)
            {{--            admin viewing some user--}}
            <div class=" profile">
                <div class="num1">
                    <img class=" img-thumbnail"
                         src="{{url('/storage/user_profile_images/' . $user->profileImg)}}"
                         alt="Profile Image">
                    <p> ID: {{$user->id}}</p>
                </div>
                <div class="num2">

                    <h2>{{$user->name}}</h2>
                    <p> Phone number: {{$user->phoneNumber}}</p>
                    <p>Email: {{$user->email}}</p>
                    <p>Bio: {{$user->bio}}</p>

                    <button class="btn">Edit Profile</button>
                </div>
            </div>
        @else
            @if(\Illuminate\Support\Facades\Auth::id() == $user->id)
                {{--                user viewing his profile                --}}
                <div class=" profile">
                    <div class="num1">
                        <img class=" img-thumbnail"
                             src="{{url('/storage/user_profile_images/' . $user->profileImg)}}"
                             alt="Profile Image">
                        <p> ID: {{$user->id}}</p>
                    </div>
                    <div class="num2">

                        <h2>{{$user->name}}</h2>
                        <p> Phone number: {{$user->phoneNumber}}</p>
                        <p>Email: {{$user->email}}</p>
                        <p>Bio: {{$user->bio}}</p>

                        <button class="btn">Edit Profile</button>
                    </div>
                </div>
            @else
                {{--                ristricted area--}}
                <script type="text/javascript">
                    window.location = "/";
                </script>
            @endif

        @endif

    @endif

@endsection
