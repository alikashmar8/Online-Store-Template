@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item"><h4>Here you can find best agents</h4></li>
                <li class="list-group-item"><h5>Contact your agent now</h5></li>
            </ul>
        </div>
    </div>

    <div class="row mt-5 pt-5">
        <div class="d-flex flex-column m-auto ">
            <form action="/search-result" method="GET" class="form-inline my-2 my-lg-0">
                {{ csrf_token() }}
                <input type="hidden" name="type" value="agent">
                <div class="form-label-group">
                    <input class="form-control mr-sm-2" type="search" name="name" placeholder="Search">
                    <button class="btn btn-primary1" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

@endsection
