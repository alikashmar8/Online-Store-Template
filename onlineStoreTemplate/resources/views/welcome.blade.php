@extends('layouts.app')

@section('content')

    @if(\Illuminate\Support\Facades\Auth::guest() || (!\Illuminate\Support\Facades\Auth::guest() && \Illuminate\Support\Facades\Auth::user()->role != 0))
        {{--        if user guest or not admin --}}
    <div class="hero" style=" height: 500px; background-image: url(https://www.webside.xyz/MK/img/m.jpg); background-position: 50% 17%;">


        <div class="inner">

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

                                    <option name=100" value="0" id="0">Min Price</option>
                                    <option name=100" value="1000" id="1000">1000 $</option>
                                    <option name=100" value="100" id="100">100 $</option>
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


        </div>
    </div>

        <div class="main1">
            <div>
                <h1>
                    <i class="fas fa-laptop-house"></i>
                </h1>
                <p>
                    Get an online access to buy, sell, and rent prop

                </p>
            </div>
            <div>
                <h1>
                    <i class="fas fa-money-check-alt"></i>
                </h1>
                <p>
                    Save money and time in achieving your goals
                </p>
            </div>
            <div>
                <h1>
                    <i class="fas fa-house-user"></i>
                </h1>
                <p>
                    Track your property to monitor local sales
                </p>
            </div>
        </div>
        <div class="main-content">
            <div class="main2">
                <div class="container p-4">
                    <h1>
                        Welcome Text
                    </h1>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                    </p>
                </div>
                <div class="container p-4">
                    <h1>
                        about us
                    </h1>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                    </p>
                </div>
                <div class="container p-4">
                    <h1>
                        contact us
                    </h1>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                    </p>
                </div>
            </div>
            <div class="main3">

            </div>
        </div>
    @else

    @if(\Illuminate\Support\Facades\Auth::user()->role == 0)
                    {{--            admin home page--}}

        <div class="hero" style=" height: 500px; background-image: url(https://www.webside.xyz/MK/img/m.jpg); background-position: 50% 17%;">

        </div>
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
