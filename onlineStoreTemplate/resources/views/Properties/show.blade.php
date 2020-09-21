@extends('app')

@section('content')
    <div class="container bg-light">
        <div class="bg-dark container text-white">
            <div id="carouselEx" class="carousel slide carousel-fade col-md-6" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($property->images as $image)
                        <div class="carousel-item @if($loop->first) active @endif">
                            <img class="d-block w-100" src="{{url('/storage/properties_images/' . $image->url)}}"
                                 alt="No Image">
                        </div>
                    @endforeach

                </div>
                <a class="carousel-control-prev" href="#carouselEx" role="button"
                   data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselEx" role="button"
                   data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3>Details:</h3>

                    <p>Description: {{ $property->description }}</p>
                    <p>Price: </p>@if($property->showPrice == 1){{$property->price}} $ @else <h4>Contact the agent for price</h4> @endif
                    <p>Placed On: {{ $property->created_at }}</p>
                </div>
                <div class="col-md-6">
                    <h3>Contact Info:</h3>
                    <p>{{ $property->contactInfo }}</p>
                </div>
            </div>
w
        </div>
    </div>
@endsection
