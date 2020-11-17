@extends('layouts.app')

@section('content')
    <div class="hero" style=" background-image: url(https://webside.xyz/MK/hackathon/imagaga123/images1/buy.jpg);
    ">

        <div class="inner" style="color: #0a0807; text-shadow:0px 0px 10px #e4002b">
            <h1>OZ Commercials</h1>
        </div>
    </div>

    <div class="main-content">

        <div class="main2">
            <div class="m-5">
                <div class="row " style="width: 100%">
                    <div class="inner">
                        <div class="search-bar ">
                            <div class="search-form-container">
                                <form class="form" action="/search-commercials" method="GET">
                                    <div class="search-bar-section">
                                        <h1>Search for a commercial property</h1>
                                    </div>

                                    <div class="search-bar-section">

                                        <input class="location1" type="search" placeholder="Filter by Location"
                                               name="location"
                                               onFocus="initializeAutocomplete()" id="locality">


                                        <button type="submit" Class="submit btn-primary1">Search
                                        </button>
                                    </div>

                                    <div class="search-bar-section">
                                        <div>

                                            <select name="type">
                                                <option class="option" name="type" value=-1>Commercial Property type
                                                </option>
                                                @foreach($types as $type)
                                                    <option class="option" name="type" value="{{ $type->id }}"
                                                            id="{{ $type->id }}">{{ $type->title }}</option>
                                                @endforeach
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
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    @if(!(\Illuminate\Support\Facades\Auth::guest() ))
                        <a class="btn-primary1 float-left" href="/myCommercial">
                            My Commercial Properties
                        </a>
                        <a class="btn-primary1 float-right " href="/createCommercial">
                            Add New Commercial Property
                        </a>
                    @endif
                </div>
                <div class="row">
                    @if(count($commercials) > 0)
                        @foreach($commercials as $com)

                            <div class="post my-5">
                                @if($com->created_at > \Carbon\Carbon::now()->subDays(14))
                                    <div class="new-prop">
                                        <img src="https://webside.xyz/MK/hackathon/imagaga123/images1/flag.svg"
                                             style="border: none">
                                    </div>
                                @endif
                                <div id="carouselEx" class="carousel slide carousel-fade " data-ride="carousel">
                                    <div class="carousel-inner">
                                        {{--> 0--}}
                                        @if(count($com->images)>0)
                                            @foreach($com->images as $image)
                                                <div class="carousel-item @if($loop->first) active @endif">
                                                    @if(pathinfo($image->url, PATHINFO_EXTENSION) ==='mp4')
                                                        <video class="d-block w-100" alt="No Image" controls>
                                                            <source
                                                                src="{{url('/storage/commercials_images/' . $image->url)}}"
                                                                type="video/mp4">

                                                        </video>
                                                    @else
                                                        <img class="d-block w-100"
                                                             src="{{url('/storage/commercials_images/' . $image->url)}}"
                                                             alt="No Image">
                                                    @endif
                                                </div>
                                            @endforeach
                                        @else
                                            <img class="d-block w-100"
                                                 src="{{url('/storage/properties_images/unavailable.jpg')}}"
                                                 alt="No Image">
                                        @endif

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
                                            <i class="fa fa-chevron-right" style="color: #df0505"
                                               aria-hidden="true"></i>
                                        </span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>

                                <a style="text-decoration: none" href="/commercial/{{$com->id}}">
                                    <div class="post-details">

                                        <p class="price">{{ $com->location}} </p>

                                        @if($com->showPrice == 1)
                                            <p class="price">
                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                {{$com->price}}
                                            </p>
                                        @else
                                            <p class="price">
                                                Contact the agent for price
                                            </p>
                                        @endif


                                        <p style="color: #0a0807;padding-left: 0.5rem;">
                                            <i class="fas fa-ruler-combined"></i> {{$com->floor}}m<sup>2</sup>
                                            | {{ \App\Models\commTypes::findOrFail($com->type)->title }}

                                        </p>

                                        {{--<a class="special-link" style="color: #0a0807;padding-left: -0.5rem;"
                                           href="/properties/{{$property->id}}">View details</a>--}}
                                    </div>
                                </a>
                            </div>

                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="main3">
            <div class="container">


            </div>

        </div>

    </div>

    <script>
            @if ( isset( $maxPrice ) )
        var select = document.getElementById('max-price');
        var option;
        for (var i = 0; i < select.options.length; i++) {
            option = select.options[i];
            if (option.value == "{{$maxPrice}}") {
                option.setAttribute('selected', true);
            }
        }
            @endif

            @if (isset($minPrice))
        var minSelect = document.getElementById('min-price');
        var opt;
        for (var x = 0; x < minSelect.options.length; x++) {
            opt = minSelect.options[x];
            if (opt.value == "{{$minPrice}}") {
                opt.setAttribute('selected', true);
            }
        }
        @endif

    </script>
    {{--scripts for google locations--}}
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1CbPQ2HCLV38r9m68B8VCv51JBVke5TM&callback=initAutocomplete&libraries=places&v=weekly"
        defer
    ></script>
    <script type="text/javascript">
        function initializeAutocomplete() {
            var input = document.getElementById('locality');
            // var options = {
            //   types: ['(regions)'],
            //   componentRestrictions: {country: "IN"}
            // };
            var options = {}

            var autocomplete = new google.maps.places.Autocomplete(input, options);

            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var place = autocomplete.getPlace();
                var lat = place.geometry.location.lat();
                var lng = place.geometry.location.lng();
                var placeId = place.place_id;
                // to set city name, using the locality param
                var componentForm = {
                    locality: 'short_name',
                };
                for (var i = 0; i < place.address_components.length; i++) {
                    var addressType = place.address_components[i].types[0];
                    if (componentForm[addressType]) {
                        var val = place.address_components[i][componentForm[addressType]];
                        document.getElementById("city").value = val;
                    }
                }
            });
        }
    </script>
@endsection
