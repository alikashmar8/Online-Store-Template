@extends('layouts.app')

@section('content')


    <div>
        <ul>
            @foreach($commercials as $commercial)
                <li>{{$commercial->name}}</li>
            @endforeach
        </ul>
    </div>


@endsection
