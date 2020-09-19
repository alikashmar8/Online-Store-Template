@extends('app')

@section('content')
    <div class="container bg-light">
        <div class="bg-dark container text-white">
            <div id="carouselEx" class="carousel slide carousel-fade col-md-6" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($apartment->images as $image)
                        <div class="carousel-item @if($loop->first) active @endif">
                            <img class="d-block w-100" src="{{url('/storage/cover_images/' . $image->url)}}" alt="No Image">
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

                    <p>{{ $apartment->title }}</p>
            <p>Description: {{ $apartment->description }}</p>
            <p>Location: {{ $apartment->location }}</p>
            <p>Price: {{ $apartment->price }} $</p>
            <p>Placed On: {{ $apartment->created_at }}</p>
                </div>
                <div class="col-md-6">
                    <h3>Contact Info:</h3>
                    <p>Agent Name: {{ $apartment->agent->name }}</p>
                    <p>Phone Number: 123456789</p>
                    <p>Email: {{ $apartment->agent->email }}</p>

                </div>
            </div>

        </div>
    </div>
@endsection
