@extends('layouts.app')

@section('content')


    <div>
        <ul>
            @foreach($users as $user)
                <li>{{$user->id}}</li>
            @endforeach
        </ul>
    </div>


@endsection
