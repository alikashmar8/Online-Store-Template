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
                    <hr>


                    <p class="">Price: @if($property->showPrice == 1) $ {{$property->price}}  @else <h4>Contact the agent for
                        price</h4> @endif </p>
                    <p>Placed On: {{ $property->created_at->toDateString() }}</p>
                    <p>Description: {{ $property->description }}</p>
                </div>
                <br><br>
                @if(\Illuminate\Support\Facades\Auth::guest())
                    <div class="p-5">
                        <h3>Login to get the contact information</h3>
                    </div>
                @else
                <div class="p-5">
                    <h3>Contact Info:</h3>
                    <p>{{ $property->contactInfo }}</p>
                    <hr>
                    <form>
                        Contact the owner about this property of code <strong>{{ $property->id }}</strong>:
                        <div class="form-label-group">
                            <label class="form-label-group" for="message">Message:</label>
                            <textarea name="message" class="form-control"></textarea>
                        </div>
                        <input type="submit" value="Send" class="btn-primary1">

                    </form>
                </div>
                @endif

                <br><br>

                {{--      maps   --}}
                <div class="container p-5 my-5"
                     style="height:300px; background-image: url(https://sunny95.com/wp-content/blogs.dir/16/files/2017/08/Columbus-and-Oakwood.jpg); background-size: cover;">

                </div>
            </div>


        </div>
    </div>

@endsection
