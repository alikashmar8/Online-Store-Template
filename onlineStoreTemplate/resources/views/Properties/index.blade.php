@extends('layouts.app')

@section('content')

    <div class="">

        @if(count($properties)>0)
            @if (Request::is('properties/rent'))
                <h2>Properties for rent</h2>
            @else
                <h2>Properties for sale</h2>
            @endif

            @foreach($properties as $property)
                <div class="post" style="height: 400px;">
                    <div id="carouselExampleFade-{{$property->id}}" class="carousel slide carousel-fade col-md-6 py-0 m-0"
                         data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($property->images as $image)

                                <div class="carousel-item @if($loop->first) active @endif">
                                    <div style="width: 100%; height: 100%;">
                                        <img style="height: 300px; "
                                             src="{{url('/storage/properties_images/' . $image->url)}}"
                                             alt="Second slide">
                                    </div>
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

                    @if($property->showPrice == 1){{$property->price}} $ @else <h4>Contact the agent for price</h4> @endif

                    <p><a  href="/properties/{{$property->id}}">View details</a></p>
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


