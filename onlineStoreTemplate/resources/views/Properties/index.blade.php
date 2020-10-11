@extends('layouts.app')

@section('content')
    <div class="hero" style=" background-image: url(https://webside.xyz/MK/hackathon/imagaga123/images1/buy.jpg);
    ">

        <div class="inner">
            <h1>Get Your Future Home</h1>
        </div>
    </div>

    <div class="main-content">

        <div class="main2">
            <div class="m-1">

                @if(count($properties)>0)
                    @if (Request::is('properties/rent'))
                        <h2>Properties for rent</h2>
                    @endif
                    @if (Request::is('properties/buy'))
                        <h2>Properties for sale</h2>
                    @endif
                    @if (isset($type))
                        @if($type == "properties")
                            <div class="inner">

                                <div class="search-bar " style="width: 85%;">
                                    <div class="search-form-container">
                                        <form class="form " action="/search-properties" method="GET">
                                            <div class="search-bar-section">
                                                <h1>Search for a property</h1>

                                            </div>

                                            <div class="search-bar-section">

                                                @foreach($categories as $c)
                                                    <div class="search-bar-nav ">
                                                        {{--                                                        @if($c->id == $category)<script> {{  Str::lower($c->title) }}_clicked(); </script> @endif--}}
                                                        {{--                                                        @if($c->id == $category)<script> share_clicked(); </script> @endif--}}
                                                        <label for="{{ $c->id }}"
                                                               id="{{  Str::lower($c->title) }}-label">{{ $c->title }}</label>
                                                        <input type="radio" class="search-bar-nav-remove"
                                                               name="category" value="{{$c->id}}" id="{{ $c->id }}"
                                                               onclick="{{  Str::lower($c->title) }}_clicked();">

                                                    </div>
                                                @endforeach
                                                {{--                            <div class="search-bar-nav ">--}}

                                                {{--                                <label for="1" id="buy-label"> Buy</label>--}}
                                                {{--                                <input type="radio" class="search-bar-nav-remove" name="category" value="1" id="1"   onclick="buy_clicked();" checked >--}}

                                                {{--                            </div>--}}
                                                {{--                            <div class="search-bar-nav ">--}}

                                                {{--                                <label for="2" id="rent-label"> Rent</label>--}}
                                                {{--                                <input type="radio" class="search-bar-nav-remove" name="category" value="2"  id="2" onclick="rent_clicked();"  >--}}

                                                {{--                            </div>--}}
                                                {{--                            <div class="search-bar-nav ">--}}

                                                {{--                                <label for="3" id="share-label"> Share</label>--}}
                                                {{--                                <input type="radio" class="search-bar-nav-remove" name="category" value="3"  id="3" onclick="share_clicked();"  >--}}

                                                {{--                            </div>--}}

                                            </div>

                                            <div class="search-bar-section">
                                                <input id="location" type="search" name="location"
                                                       hint="Search by location" placeholder="Search by location">


                                                <button type="submit" id="submit" class="btn-primary1">Search
                                                </button>
                                            </div>

                                            <div class="search-bar-section">

                                                <select name="type">
                                                    <option class="option" name="type" value=-1>Property type</option>
                                                    @foreach($types as $type)
                                                        <option class="option" name="type" value="{{ $type->id }}"
                                                                id="{{ $type->id }}">{{ $type->title }}</option>

                                                    @endforeach
                                                </select>


                                                <select name="bedroomsNumber" id="bedroomsSelect">
                                                    <option class="option" value="-1">Beds</option>
                                                    <option class="option" value="1">1</option>
                                                    <option class="option" value="2">2</option>
                                                    <option class="option" value="3">3</option>
                                                    <option class="option" value="4">4</option>
                                                    <option class="option" value="5">5+</option>
                                                </select>
                                                <select id="min-price" name="minPrice">

                                                    <option class="option" name="100" value="0">Min Price</option>
                                                    <option class="option" name="100" value="500000">$500,000</option>
                                                    <option class="option" name="100" value="750000">$ 750,000</option>
                                                    <option class="option" name="100" value="1000000">$ 1,000,000
                                                    </option>
                                                    <option class="option" name="100" value="1500000">$ 1,500,000
                                                    </option>
                                                    <option class="option" name="100" value="2000000">$ 2,000,000
                                                    </option>

                                                </select>
                                                <select id="max-price" name="maxPrice">
                                                    <option class='option' name="100" value="1000000000">Max Price
                                                    </option>
                                                    <option class='option' name="100" value="2000000">$ 2,000,000
                                                    </option>
                                                    <option class='option' name="100" value="5000000">$ 5,000,000
                                                    </option>
                                                    <option class='option' name="100" value="10000000">$ 10,000,000
                                                    </option>
                                                    <option class='option' name="100" value="12000000">$ 12,000,000
                                                    </option>
                                                    <option class='option' name="100" value="15000000">$ 15,000,000
                                                    </option>

                                                </select>
                                            </div>

                                        </form>


                                    </div>

                                    {{--                                    <div>--}}
                                    {{--                                        <form class=" " action="/search-properties" method="GET">--}}

                                    {{--                                            <div class="btn-group btn-group-toggle " data-toggle="buttons">--}}
                                    {{--                                                <div class="bg-secondary p-2">Property Type:</div>--}}
                                    {{--                                                <label class="btn btn-secondary active">--}}
                                    {{--                                                    <input type="radio" name="type" value=-1 autocomplete="off" checked>--}}
                                    {{--                                                    Any--}}
                                    {{--                                                </label>--}}
                                    {{--                                                @foreach($types as $category)--}}
                                    {{--                                                    <label class="btn btn-secondary">--}}
                                    {{--                                                        <input type="radio" name="type" value="{{ $category->id }}"--}}
                                    {{--                                                               id="{{$category->id}}"--}}
                                    {{--                                                               autocomplete="off"> {{ $category->title }}--}}
                                    {{--                                                    </label>--}}
                                    {{--                                                @endforeach--}}
                                    {{--                                            </div>--}}

                                    {{--                                            <div class="btn-group btn-group-toggle " data-toggle="buttons">--}}
                                    {{--                                                <div class="bg-secondary p-2">Listing Type:</div>--}}
                                    {{--                                                <label class="btn btn-secondary active">--}}
                                    {{--                                                    <input type="radio" name="type" value=-1 autocomplete="off" checked>--}}
                                    {{--                                                    Any--}}
                                    {{--                                                </label>--}}
                                    {{--                                                @foreach($categories as $category)--}}
                                    {{--                                                    <label class="btn btn-secondary">--}}
                                    {{--                                                        <input type="radio" name="type" value="{{ $category->id }}"--}}
                                    {{--                                                               id="{{$category->id}}"--}}
                                    {{--                                                               autocomplete="off"> {{ $category->title }}--}}
                                    {{--                                                    </label>--}}
                                    {{--                                                @endforeach--}}
                                    {{--                                            </div>--}}
                                    {{--                                            <div class=" ">--}}
                                    {{--                                                <table>--}}
                                    {{--                                                    <tr>--}}
                                    {{--                                                        <td colspan="3">--}}
                                    {{--                                                            <input class=" " type="search" name="location"--}}
                                    {{--                                                                   id="searchBar"--}}
                                    {{--                                                                   hint="Search by location"--}}
                                    {{--                                                                   placeholder="Search by location">--}}

                                    {{--                                                        </td>--}}
                                    {{--                                                        <td>--}}
                                    {{--                                                            <button class="btn-primary1  " style=" border-radius: 0rem;"--}}
                                    {{--                                                                    type="submit">--}}
                                    {{--                                                                Search--}}
                                    {{--                                                            </button>--}}
                                    {{--                                                        </td>--}}

                                    {{--                                                    </tr>--}}
                                    {{--                                                    <tr>--}}
                                    {{--                                                        <td>--}}
                                    {{--                                                            <select name="maxPrice" id="maxPriceSelect"--}}
                                    {{--                                                                    style="box-shadow: 0 1rem 1rem 0 rgba(0, 0, 0, 0.2); ">--}}
                                    {{--                                                                --}}{{--                                    Max Price one hundred million dollar--}}
                                    {{--                                                                <option name=100" value="1000000000">Max Price</option>--}}
                                    {{--                                                                <option name=100" value="2000000">$ 2,000,000</option>--}}
                                    {{--                                                                <option name=100" value="1500000">$ 1,500,000</option>--}}
                                    {{--                                                                <option name=100" value="1000000">$ 1,000,000</option>--}}
                                    {{--                                                                <option name=100" value="500000">$ 500,000</option>--}}
                                    {{--                                                                <option name=100" value="200000">$ 200,000</option>--}}
                                    {{--                                                            </select>--}}
                                    {{--                                                        </td>--}}
                                    {{--                                                        <td>--}}
                                    {{--                                                            <select id="minPriceSelect" name="minPrice"--}}
                                    {{--                                                                    style="box-shadow: 0 1rem 1rem 0 rgba(0, 0, 0, 0.2); ">--}}

                                    {{--                                                                <option name=100" value="0">Min Price</option>--}}
                                    {{--                                                                <option name=100" value="500">$ 500</option>--}}
                                    {{--                                                                <option name=100" value="350">$ 350</option>--}}
                                    {{--                                                                <option name=100" value="200">$ 200</option>--}}
                                    {{--                                                                <option name=100" value="150">$ 150</option>--}}
                                    {{--                                                                <option name=100" value="100">$ 100</option>--}}
                                    {{--                                                                <option name=100" value="50">$ 50</option>--}}
                                    {{--                                                            </select>--}}
                                    {{--                                                        </td>--}}
                                    {{--                                                        <td>--}}
                                    {{--                                                            <select name="bedroomsNumber" id="bedroomsSelect"--}}
                                    {{--                                                                    style="box-shadow: 0 1rem 1rem 0 rgba(0, 0, 0, 0.2); ">--}}
                                    {{--                                                                <option value=-1>Bedrooms</option>--}}
                                    {{--                                                                <option>1</option>--}}
                                    {{--                                                                <option>2</option>--}}
                                    {{--                                                                <option>3</option>--}}
                                    {{--                                                                <option>4</option>--}}
                                    {{--                                                                <option>5</option>--}}
                                    {{--                                                            </select>--}}
                                    {{--                                                        </td>--}}
                                    {{--                                                    </tr>--}}
                                    {{--                                                </table>--}}





                                    {{--                                            <br>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </form>--}}
                                    {{--                                    </div>--}}
                                </div>


                            </div>
                            <div class="m-2 p-2">
                                <H3>Results for '{{ $searched ?? '' }}':</H3>
                                <h4>{{ count($properties) }} results found !</h4>
                            </div>
                        @endif
                    @endif


                    @foreach($properties as $property)
                        <div class="post">
                            <div id="carouselEx" class="carousel slide carousel-fade " data-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach($property->images as $image)
                                        <div class="carousel-item @if($loop->first) active @endif">
                                            <img class="d-block w-100"
                                                 src="{{url('/storage/properties_images/' . $image->url)}}"
                                                 alt="No Image">
                                        </div>
                                    @endforeach

                                </div>
                                <a class="carousel-control-prev" href="#carouselEx" role="button"
                                   data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true">
                                <i class="fa fa-chevron-left" style="color: #df0505" aria-hidden="true"></i>
                            </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselEx" role="button"
                                   data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true">
                                <i class="fa fa-chevron-right" style="color: #df0505" aria-hidden="true"></i>
                            </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>


                            <div class="post-details">

                                @if($property->showPrice == 1)
                                    <p class="price">
                                        <i class="fa fa-usd" aria-hidden="true"></i>
                                        {{$property->price}}
                                    </p>
                                @else
                                    <p style="color: #df0505">
                                        Contact the agent for price
                                    </p> @endif

                                <p style="color: #0a0807;padding-left: 0.5rem;">
                                    {{$property->bedroomsNumber}} <i class="fa fa-bed" aria-hidden="true"></i>
                                </p>
                                <a class="special-link" style="color: #0a0807;padding-left: -0.5rem;"
                                   href="/properties/{{$property->id}}">View details</a>
                            </div>
                        </div>

                    @endforeach
                @else
                    @if (Request::is('properties/rent'))
                        <h3 class="bg-white p-3">No properties for rent</h3>
                    @else
                        <h3 class="bg-white p-3">No properties for sale</h3>
                    @endif
                @endif
            </div>

        </div>

        <div class="main3">
            <div class="container">


            </div>

        </div>
    </div>
    <script>
        {{--$("#{{ $maxPrice }}").addClass("selected");--}}

        {{--        $('#maxPriceSelect').val({{$maxPrice}})--}}

        document.getElementById('location').value = '{{ $searched ?? '' }}';

        var select = document.getElementById('max-price');
        var option;

            @if ( isset( $maxPrice ) )
        for (var i = 0; i < select.options.length; i++) {
            option = select.options[i];

            if (option.value == "{{$maxPrice}}") {
                option.setAttribute('selected', true);
            }
        }
            @endif


        var minSelect = document.getElementById('min-price');
        var opt;
            @if (isset($minPrice))
        for (var x = 0; x < minSelect.options.length; x++) {

            opt = minSelect.options[x];
            if (opt.value == "{{$minPrice}}") {
                opt.setAttribute('selected', true);
            }
        }
            @endif

            @if (isset(  $bedroomsNumber  ))
        var bedroomsSelect = document.getElementById('bedroomsSelect');
        var num;

        for (var i = 0; i < bedroomsSelect.options.length; i++) {

            num = bedroomsSelect.options[i];
            if (num.value == "{{ $bedroomsNumber }}") {
                num.setAttribute('selected', true);
            }
        }

        @endif

        function buy_clicked() {
            document.getElementById("buy-label").style.background = "#e4002b";
            document.getElementById("rent-label").style.background = "#91969c";
            document.getElementById("share-label").style.background = "#91969c";
            document.getElementById(1).checked = true;


            document.getElementById("min-price").innerHTML = "<option class='option' name='100' value='0'>Min Price</option><option class='option' name='100' value='500000'>$500,000</option><option class='option' name='100' value='750000'>$ 750,000</option><option class='option' name='100' value='1000000'>$ 1,000,000</option><option class='option' name='100' value='1500000'>$ 1,500,000</option><option class='option' name='100' value='2000000'>$ 2,000,000</option>";
            document.getElementById("max-price").innerHTML = "<option class='option' name='100' value='1000000000'>Max Price</option><option class='option' name='100' value='2000000'>$ 2,000,000</option><option class='option' name='100' value='5000000'>$ 5,000,000</option><option class='option' name='100' value='10000000'>$ 10,000,000</option><option class='option' name='100' value='12000000'>$ 12,000,000</option><option class='option' name='100' value='15000000'>$ 15,000,000</option>";

        }

        function rent_clicked() {
            document.getElementById("buy-label").style.background = "#91969c";
            document.getElementById("rent-label").style.background = "#e4002b";
            document.getElementById("share-label").style.background = "#91969c";
            document.getElementById("min-price").innerHTML = "<option class='option' name='100' value='0'>Min Price</option><option class='option' name='100' value='100'>$100</option><option class='option' name='100' value='250'>$ 250</option><option class='option' name='100' value='500'>$ 500</option><option class='option' name='100' value='1000'>$ 1,000</option><option class='option' name='100' value='2000'>$ 2,000</option>";
            document.getElementById("max-price").innerHTML = "<option class='option' name='100' value='1000000000'>Max Price</option><option class='option' name='100' value='750'>$ 750</option><option class='option' name='100' value='1000'>$ 1,000</option><option class='option' name='100' value='2000'>$ 2,000</option><option class='option' name='100' value='3000'>$ 3,000</option><option class='option' name='100' value='5000'>$ 5,000</option>";
            document.getElementById(2).checked = true;


        }

        function share_clicked() {
            document.getElementById("buy-label").style.background = "#91969c";

            document.getElementById("rent-label").style.background = "#91969c";
            document.getElementById("share-label").style.background = "#e4002b";
            document.getElementById("min-price").innerHTML = "<option class='option' name='100' value='0'>Min Price</option><option class='option' name='100' value='100'>$100</option><option class='option' name='100' value='250'>$ 250</option><option class='option' name='100' value='500'>$ 500</option><option class='option' name='100' value='1000'>$ 1,000</option><option class='option' name='100' value='2000'>$ 2,000</option>";
            document.getElementById("max-price").innerHTML = "<option class='option' name='100' value='1000000000'>Max Price</option><option class='option' name='100' value='750'>$ 750</option><option class='option' name='100' value='1000'>$ 1,000</option><option class='option' name='100' value='2000'>$ 2,000</option><option class='option' name='100' value='3000'>$ 3,000</option><option class='option' name='100' value='5000'>$ 5,000</option>";
            document.getElementById(3).checked = true;


        }

        @foreach($categories as $c)
        @if($category == $c->id) {{Str::lower($c->title)}}_clicked() @endif
        @endforeach
    </script>


@endsection


