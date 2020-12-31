{{--@extends('layouts.app')--}}

{{--@section('content')--}}
<div class="container p-0">

    @if(count($results) > 0)
        <H3>Results for '{{ $searched }}':</H3><br/>
        <h4>{{ count($results ?? '') }} agent(s) available !</h4>
        @if($type == 'agents')
            @foreach($results as $agent)
                {{--                <li class="list-group-item m-3" style=" border-radius: 0.25rem;--}}
                {{--    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3); ">--}}
                {{--                    <div class="  profile">--}}
                {{--                        <div class="num1">--}}

                {{--                            <img style="width: 10%; height: 10%;"--}}
                {{--                                 src="{{url('/storage/user_profile_images/' . $agent->profileImg)}}"--}}
                {{--                                 alt="Profile Image">--}}
                {{--                        </div>--}}
                {{--                        <div class="num2">--}}
                {{--                            <h4> {{$agent->name}}</h4>--}}
                {{--                                                        <p><a style="font-weight: bold"> Company name:</a> {{$agent->company->name}}</p>--}}
                {{--                                                        <p> <a style="font-weight: bold"> Licence Number:</a> {{$agent->company->licenseNumber}}</p>--}}
                {{--                            <p><a style="font-weight: bold"> Phone number:</a> +{{ $agent->phoneNumberCode }}--}}
                {{--                                -{{$agent->phoneNumber}}</p>--}}
                {{--                                                        <p><a style="font-weight: bold"> Email:</a> {{$agent->email}}</p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </li>--}}
                <div class="col-md-4 text-center animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img style="width: 200px; height: 200px;"
                             src="{{url('/storage/user_profile_images/' . $agent->profileImg)}}" alt="Profile Picture">
                        <h3>{{$agent->name}}</h3>
                        <p>Company: {{$agent->company->name}}</p>
                        <p>Phone number: +{{ $agent->phoneNumberCode }} - {{$agent->phoneNumber}}</p>
                        <p><a style="font-weight: bold"> Email:</a> {{$agent->email}}</p>
                    </div>
                </div>

            @endforeach
        @else
            {{ $results ?? '' }}
        @endif
    @else
        <h3 class="post">No results found for : '{{ $searched }}' !</h3>
    @endif
</div>
{{--@endsection--}}
