@extends('app')

@section('content')

    <div class="container bg-light">

        @if(count($properties)>0)
            <h1>Apartments to buy:</h1>

            @foreach($properties as $property)
                <div class="bg-dark container text-white">
                    <div id="carouselExampleFade-{{$property->id}}" class="carousel slide carousel-fade col-md-6"
                         data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($property->images as $image)

                                <div class="carousel-item @if($loop->first) active @endif">
                                    <div style="width: 100%; height: 100%;"  >
                                        <img style="height: 300px; width: 500px;"
                                             src="{{url('/storage/properties_images/' . $image->url)}}"
                                             alt="Second slide">
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade-{{$property->id}}" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade-{{$property->id}}" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    {{ $property->title }} - {{$property->price}} $
                    <p><a href="/properties/{{$property->id}}">View details</a></p>
                </div>
                <div class="p-1"></div>
            @endforeach
        @else
            <h2>No properties for sale</h2>
        @endif
    </div>
@endsection


