@extends('app')

@section('content')

    <div class="container bg-light">

        @if(count($apartments)>0)
        <h1>Apartments to buy:</h1>

        @foreach($apartments as $apartment)
            <div class="bg-dark container text-white">
                <div id="carouselExampleFade-{{$apartment->id}}" class="carousel slide carousel-fade col-md-6"
                     data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($apartment->images as $image)
                            {{--                            @if($image->apartmentId == $apartment->id)--}}

                            <div class="carousel-item @if($loop->first) active @endif">
                                <img class="d-block w-100" src="{{url('/storage/cover_images/' . $image->url)}}"
                                     alt="Second slide">
                            </div>
                            {{--                            @endif--}}
                        @endforeach

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade-{{$apartment->id}}" role="button"
                       data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade-{{$apartment->id}}" role="button"
                       data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                {{ $apartment->title }} - {{$apartment->price}} $
                <p><a href="/apartments/{{$apartment->id}}">View details</a> </p>
            </div>
            <div class="p-1"></div>
        @endforeach
            @else
            <h2>No Apartments for sale</h2>
        @endif
    </div>
@endsection


