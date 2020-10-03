@extends('layouts.app')

@section('content')
    <div class="hero" style=" background-image: url(https://img.freepik.com/free-photo/sea-view-dining-living-room-luxury-summer-beach-house-with-swimming-pool-near-wooden-terrace_42251-141.jpg?size=626&ext=jpg&ga=GA1.2.1536601498.1589793154);
    ">
        <div style="position: absolute; width:100%;top: 0;height: 20px; background-image: linear-gradient(#df0505, transparent); ">

        </div>

        <div class="inner">
            @if(\Illuminate\Support\Facades\Auth::guest() || (!\Illuminate\Support\Facades\Auth::guest() && \Illuminate\Support\Facades\Auth::user()->role != 0))
                {{--        if user guest or not admin --}}

                <div class="row mt-5 pt-5">
                    <div class="d-flex flex-column m-auto ">
                        <form class="form-inline my-2 my-lg-0" action="/search-properties" method="GET">
                            <div class="btn-group btn-group-toggle " data-toggle="buttons">
                                <div class="bg-secondary p-2">Category:</div>
                                <label class="btn btn-secondary active">
                                    <input type="radio" name="type" value=-1 autocomplete="off" checked> Any
                                </label>
                                @foreach($categories as $category)
                                    <label class="btn btn-secondary">
                                        <input type="radio" name="type" value="{{ $category->id }}"
                                               id="{{$category->id}}" autocomplete="off"> {{ $category->title }}
                                    </label>
                                @endforeach
                            </div>
                            <div class="form-label-group">
                                <input class="form-control mr-sm-2" type="search" name="location"
                                       hint="Search by location" placeholder="Search by location">

                                <select name="maxPrice">
                                    {{--                                    Max Price one hundred million dollar--}}
                                    <option name=100" value="1000000000">Max Price</option>
                                    <option name=100" value="999999">999999 $</option>
                                </select>
                                <select name="minPrice">

                                    <option name=100" value="0">Min Price</option>
                                    <option name=100" value="999999">999999 $</option>
                                </select>
                                <select name="bedroomsNumber">
                                    <option value=-1>Bedrooms Number</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                                <button class="btn btn-primary1" style=" border-radius: 2rem;" type="submit">
                                    Search
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            @else
        </div>
    </div>
                @if(\Illuminate\Support\Facades\Auth::user()->role == 0)
                    {{--            admin home page--}}
                    <div class="row container py-0" style="margin: auto">
                        <BR><BR>
                        <div class="col-md-1"></div>

                        <div class="col-md-5 bg-white p-2 m-0">
                            <h2>Apartments waiting for confirmation = {{ count($notAcceptedProperties) }}</h2>
                            <a href="/acceptProperties">Check Now</a>
                        </div>

                        <div class="col-md-1"></div>

                        <div class="col-md-5 bg-white p-2 m-0">
                            <h2>New User Last 24 Hrs: {{ count($recentUsers) }}</h2>
                            <a href="/users">See Users</a>

                        </div>

                    </div>
                @endif

            @endif


@endsection
