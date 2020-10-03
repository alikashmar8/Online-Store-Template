@extends('layouts.app')

@section('content')
    <div class="hero" style=" background-image: url(https://image.freepik.com/free-photo/female-hand-operating-calculator-front-villa-house-model_1387-956.jpg);
    ">
        <div style="position: absolute; width:100%;top: 0;height: 20px; background-image: linear-gradient(#df0505, transparent); ">

        </div>
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
                            <div class="m-2 p-2">
                                <H2>Results for '{{ $searched }}':</H2>
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

@endsection


