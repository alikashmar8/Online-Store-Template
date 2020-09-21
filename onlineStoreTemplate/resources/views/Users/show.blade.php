@extends('app')

@section('content')

    @if(!\Illuminate\Support\Facades\Auth::guest())
        {{--        user loggedin--}}
        @if(\Illuminate\Support\Facades\Auth::user()->role == 0)
            {{--            admin viewing some user--}}
            <div class="container bg-white">
                <div class="row"><img class="d-block img-thumbnail" style="width: 100px; height: 100px;"
                                      src="{{url('/storage/user_profile_images/' . $user->profileImg)}}"
                                      alt="Profile Image"></div>
                <div class="row">{{$user->id}}</div>
                <div class="row">{{$user->name}}</div>
                <div class="row">{{$user->phoneNumber}}</div>
                <div class="row">{{$user->email}}</div>
            </div>
        @else
            @if(\Illuminate\Support\Facades\Auth::id() == $user->id)
                {{--                user viewing his profile                --}}
                <div class="container bg-white">
                    <div class="row"><img class=" img-thumbnail" style="height: 100px; width: 100px;"
                                          src="{{url('/storage/user_profile_images/' . $user->profileImg)}}"
                                          alt="Profile Image"></div>
                    <div class="row">{{$user->id}}</div>
                    <div class="row">{{$user->name}}</div>
                    <div class="row">{{$user->phoneNumber}}</div>
                    <div class="row">{{$user->email}}</div>

                    <button class="btn btn-outline-warning">Edit Profile</button>
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
