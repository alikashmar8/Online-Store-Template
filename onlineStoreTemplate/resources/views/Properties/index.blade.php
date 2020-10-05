@extends('layouts.app')

@section('content')
    <div class="hero" style=" background-image: url(https://image.freepik.com/free-photo/female-hand-operating-calculator-front-villa-house-model_1387-956.jpg);
    ">

        <div class="inner">
            <h1>Get Your Future Home</h1>
        </div>
    </div>

    <div class="main-content">

        <div class="main2">
            <div class="m-5">

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

                                <div class="row mt-5 pt-5">
                                    <div class="d-flex flex-column m-auto ">
                                        <form class="form-inline my-2 my-lg-0" action="/search-properties" method="GET">
                                            <div class="btn-group btn-group-toggle " data-toggle="buttons">
                                                <div class="bg-secondary p-2">Category:</div>
                                                <label class="btn btn-secondary active">
                                                    <input type="radio" name="type" value=-1 autocomplete="off" checked>
                                                    Any
                                                </label>
                                                @foreach($categories as $category)
                                                    <label class="btn btn-secondary">
                                                        <input type="radio" name="type" value="{{ $category->id }}"
                                                               id="{{$category->id}}"
                                                               autocomplete="off"> {{ $category->title }}
                                                    </label>
                                                @endforeach
                                            </div>
                                            <div class="form-label-group">
                                                <input class="form-control mr-sm-2" type="search" name="location"
                                                       hint="Search by location" placeholder="Search by location"
                                                       id="searchBar">

                                                <select name="maxPrice" id="maxPriceSelect">
                                                    {{--                                    Max Price one hundred million dollar--}}
                                                    <option name=100" value="1000000000" id="1000000000">Max Price
                                                    </option>
                                                    <option name=999999" value="999999" id="999999">999999 $</option>
                                                </select>
                                                <select name="minPrice" id="minPriceSelect">

                                                    <option name=100" value="0" id="0">Min Price</option>
                                                    <option name=100" value="1000" id="1000">1000 $</option>
                                                    <option name=100" value="100" id="100">100 $</option>
                                                </select>
                                                <select name="bedroomsNumber" id="bedroomsSelect">
                                                    <option value=-1>Bedrooms Number</option>
                                                    <option value=1>1</option>
                                                    <option value=2>2</option>
                                                    <option value=3>3</option>
                                                    <option value=4>4</option>
                                                    <option value=5>5</option>
                                                    <option value=6>6</option>

                                                </select>
                                                <button class="btn btn-primary1" style=" border-radius: 2rem;"
                                                        type="submit">
                                                    Search
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                            </div>
                            <div class="m-2 p-2">
                                <H2>Results for '{{ $searched ?? '' }}':</H2>
                                <h3>{{ count($properties) }} results found !</h3>
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

                                @if($property->showPrice == 1) <p class="price"><i class="fa fa-usd"
                                                                                   aria-hidden="true"></i> {{$property->price}}
                                </p>@else <h4>Contact the
                                    agent for price</h4> @endif

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
                        <h2>No properties for rent</h2>
                    @else
                        <h2>No properties for sale</h2>
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

        document.getElementById('searchBar').value = '{{ $searched ?? '' }}';

        var select = document.getElementById('maxPriceSelect');
        var option;

            @if ( isset( $maxPrice ) )
        for (var i = 0; i < select.options.length; i++) {
            option = select.options[i];

            if (option.value == "{{$maxPrice}}") {
                option.setAttribute('selected', true);
            }
        }
            @endif


        var minSelect = document.getElementById('minPriceSelect');
        var opt;
        @if (isset($minPrice))
        console.log('select size: ' + select.options.length);
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

    </script>

@endsection


