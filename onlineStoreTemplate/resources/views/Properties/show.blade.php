@extends('layouts.app')

@section('content')


    <div class="container ">
        <div class="post p-4 m-3">

            <div id="carouselEx" class="carousel slide carousel-fade " data-ride="carousel">
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
            <div class="my-2">
                <div class="p-5">
                    <h3>Details:</h3>


                    <p>Price: @if($property->showPrice == 1){{$property->price}} $ @else <h4>Contact the agent for price</h4> @endif </p>
                    <p>Placed On: {{ $property->created_at }}</p>
                    <p>Description: {{ $property->description }}</p>
                </div>
                <br><br>
                <div class="p-5">
                    <h3>Contact Info:</h3>
                    <p>{{ $property->contactInfo }}</p>
                </div>
                <br><br>

                {{--      maps   --}}
                <div class="container p-5 my-5" style="height:300px; background-image: url(https://sunny95.com/wp-content/blogs.dir/16/files/2017/08/Columbus-and-Oakwood.jpg); background-size: cover;">

                </div>
            </div>



        </div>
    </div>

@endsection
