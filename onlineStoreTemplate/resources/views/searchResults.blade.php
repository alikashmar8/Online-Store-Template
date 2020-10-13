{{--@extends('layouts.app')--}}

{{--@section('content')--}}
<div class="container p-0">

    @if(count($results) > 0)
        <H3>Results for '{{ $searched }}':</H3>
        <h4>{{ count($results ?? '') }} agents available !</h4>
        @if($type == 'agents')
            @foreach($results as $agent)
                <li class="list-group-item m-3" style="box-shadow: border-radius: .25rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3); ">
                    <div class="  profile">
                        <div class="num1">

                            <img style="width: 10%; height: 10%;"
                                 src="{{url('/storage/user_profile_images/' . $agent->profileImg)}}"
                                 alt="Profile Image">
                        </div>
                        <div class="num2">
                            <h4> {{$agent->name}}</h4>
                            <p> Company: {{$agent->company->name}}</p>
                            <p> Licence Number: {{$agent->company->licenseNumber}}</p>
                            <p>Phone number: +{{ $agent->phoneNumberCode }}-{{$agent->phoneNumber}}</p>
                            <p>Email: {{$agent->email}}</p>
                        </div>
                    </div>
                </li>

                @endforeach
            @else
            {{ $results ?? '' }}
            @endif
        @else
        <h3 class="post">No results found for : '{{ $searched }}' !</h3>
    @endif
    </div>
{{--@endsection--}}
