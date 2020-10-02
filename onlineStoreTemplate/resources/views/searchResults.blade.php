@extends('layouts.app')

@section('content')

    @if(count($results) > 0)
        <H2>Results for '{{ $searched }}':</H2>
        <h3>{{ count($results) }} results found !</h3>
        @if($type == 'agents')
            @foreach($results as $agent)
                <li class="list-group-item">
                    <div class="col">
                        <img style="width: 10%; height: 10%;"
                             src="{{url('/storage/user_profile_images/' . $agent->profileImg)}}"
                             alt="Profile Image">
                    </div>
                    <div class="col">
                        <p>Name: {{$agent->name}}</p>
                        <p>P No:{{$agent->phoneNumber}}</p>
                        <p>Email:{{$agent->email}}</p>
                    </div>
                </li>

            @endforeach
        @else
            {{ $results }}
        @endif
    @else
        <h2 class="alert-warning">No results found for : '{{ $searched }}' !</h2>
    @endif

@endsection
