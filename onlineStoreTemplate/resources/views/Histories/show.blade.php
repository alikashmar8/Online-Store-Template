@extends('layouts.app')

@section('content')
    <ul>
        @foreach($properties as $property)

            <li>{{$property}}</li>

        @endforeach
    </ul>
@endsection
