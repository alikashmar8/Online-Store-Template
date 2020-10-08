@extends('layouts.app')

@section('content')
    <div class="hero" style=" background-image: url(http://myglamourdesign.com/public/imagaga123/buy.jpg);
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
                                    <div >
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
                                                <table >
                                                    <tr >
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
                                                    <tr >
                                                        <td>
                                                            <select name="maxPrice" style="box-shadow: 0 1rem 1rem 0 rgba(0, 0, 0, 0.2); ">
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
                                                            <select name="minPrice" style="box-shadow: 0 1rem 1rem 0 rgba(0, 0, 0, 0.2); ">

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
                                                            <select name="bedroomsNumber" style="box-shadow: 0 1rem 1rem 0 rgba(0, 0, 0, 0.2); ">
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





                                            <br>
                                            </div>
                                        </form>
                                    </div>
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


