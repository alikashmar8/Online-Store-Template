@extends('layouts.app')

@section('content')
    <div class="hero" style=" background-image: url(https://image.freepik.com/free-photo/female-hand-operating-calculator-front-villa-house-model_1387-956.jpg);
    " >
        <div class="inner">
            <h1>Get Your Future Home</h1>
        </div>
    </div>
    <div class="m-5">

        @if(count($properties)>0)
            @if (Request::is('properties/rent'))
                <h2>Properties for rent</h2>
            @else
                <h2>Properties for sale</h2>
            @endif

            @foreach($properties as $property)
                <div class="post" >
                    <div id="carouselExampleFade-{{$property->id}}" class="post-slider" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($property->images as $image)

                                <div class="carousel-item @if($loop->first) active @endif">

                                        <img style="width: 100%;border: 3px solid #C92208; max-height:500px ;border-radius: .5rem; "
                                             src="{{url('/storage/properties_images/' . $image->url)}}"
                                             alt="Second slide" >

                                </div>
                            @endforeach

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade-{{$property->id}}" role="button"
                           data-slide="prev">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade-{{$property->id}}" role="button"
                           data-slide="next">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                    </div>

                    <div class="post-details">

                        @if($property->showPrice == 1) <p class="price">{{$property->price}} $ </p>@else <h4>Contact the
                            agent for price</h4> @endif

                        <p>
                            {{$property->bedroomsNumber}} <i class="fa fa-bed" aria-hidden="true"></i>
                        </p>
                        <a href="/properties/{{$property->id}}">View details</a>
                    </div>
                </div>
                    <div class="p-1"></div>
                @endforeach
        @else
            @if (Request::is('properties/rent'))
                <h2>No properties for rent</h2>
            @else
                <h2>No properties for sale</h2>
            @endif
        @endif
    </div>
@endsection


