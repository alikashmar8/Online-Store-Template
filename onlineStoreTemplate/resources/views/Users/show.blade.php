@extends('layouts.app')


@section('content')

    <div class="hero" style=" background-image: url(https://webside.xyz/MK/hackathon/imagaga123/images1/profile.jpg);
    " >
        <div style="position: absolute; width:100%;top: 0;height: 20px; background-image: linear-gradient(#df0505, transparent); ">

        </div>
        <div class="inner">
            <h1>Profile</h1>
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

                    <button class="btn-primary1">Edit Profile</button>
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

                        <button class="btn-primary1" data-toggle="modal" data-target="#exampleModal">Edit Profile
                        </button>
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


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/users/edit" method="post" id="editForm">

                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" value="{{ $user->id }}" name="id">
                            <label for="name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" required">
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber" class="col-form-label">Phone Number:</label>
                            <input type="text" class="form-control" name="phoneNumber" value="{{ $user->phoneNumber }}"
                                   required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" value="edit">
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
