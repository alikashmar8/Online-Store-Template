@extends('layouts.app')

@section('content')

    @if(\Illuminate\Support\Facades\Auth::guest() || (!\Illuminate\Support\Facades\Auth::guest() && \Illuminate\Support\Facades\Auth::user()->role != 0))
        {{--        if user guest or not admin --}}
    <div class="hero" style=" height: 600px; background-image: url(http://myglamourdesign.com/public/imagaga123/home.jpg); background-position: 50% 40%;">


        <div class="inner " style="text-align: left;">

                <div class="search-bar ">

                        <form class=" " action="/search-properties" method="GET">
                            <div class="btn-group btn-group-toggle " data-toggle="buttons" style="display: none">
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
                            <div class=" ">
                                <table>
                                    <tr>
                                        <td colspan="3">
                                            <input class=" " type="search" name="location"
                                                   hint="Search by location" placeholder="Search by location">

                                        </td>
                                        <td>
                                            <button class="btn-primary1  " style=" border-radius: 0rem;" type="submit">
                                                Search
                                            </button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <select name="maxPrice">
                                                {{--                                    Max Price one hundred million dollar--}}
                                                <option name=100" value="1000000000">Max Price</option>
                                                <option name=100" value="2000000">$ 2,000,000 </option>
                                                <option name=100" value="1500000">$ 1,500,000 </option>
                                                <option name=100" value="1000000">$ 1,000,000 </option>
                                                <option name=100" value="500000">$ 500,000 </option>
                                                <option name=100" value="200000">$ 200,000 </option>
                                            </select>
                                        </td>
                                        <td>
                                            <select name="minPrice">

                                                <option name=100" value="0">Min Price</option>
                                                <option name=100" value="500">$ 500 </option>
                                                <option name=100" value="350">$ 350 </option>
                                                <option name=100" value="200">$ 200 </option>
                                                <option name=100" value="150">$ 150 </option>
                                                <option name=100" value="100">$ 100 </option>
                                                <option name=100" value="50">$ 50 </option>
                                            </select>
                                        </td>
                                        <td>
                                            <select name="bedroomsNumber">
                                                <option value=-1>Bedrooms</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>






                            </div>
                        </form>

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

        <div class="hero" style=" height: 600px; background-image: url(https://www.webside.xyz/MK/img/m1.jpg); background-position: 50% 40%;">

        </div>
                    <div class="row container py-0" style="margin: auto">

                        <div class="col-md-1">  </div>

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
