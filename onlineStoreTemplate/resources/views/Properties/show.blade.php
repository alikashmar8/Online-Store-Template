@extends('layouts.app')

@section('content')

    <div class="main-content">
        <div class="main2">
            <div class="container  ">
                <div class="post p-4 m-3">

                    <div id="carouselEx" class="carousel slide carousel-fade " data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($property->images as $image)
                                <div class="carousel-item @if($loop->first) active @endif">
                                    @if(pathinfo($image->url, PATHINFO_EXTENSION) ==='mp4')
                                        <video class="d-block w-100" alt="No Image" autoplay controls>
                                            <source src="{{url('/storage/properties_images/' . $image->url)}}"
                                                    type="video/mp4">

                                        </video>
                                    @else
                                        <img class="d-block w-100"
                                             src="{{url('/storage/properties_images/' . $image->url)}}"
                                             alt="No Image">
                                    @endif
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

                            <div class="post-details p-2">

                                @if($property->showPrice == 1)  <p class="price">Price: $ {{$property->price}} </p>

                                @else
                                    <p style="color: #df0505">Contact the agent for price</p>
                                @endif
                                <p>
                                    {{$property->bedroomsNumber}} <i class="fa fa-bed" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                                    {{$property->bathroomsNumber}} <i class="fa fa-bath" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                                    {{$property->parkingNumber}} <i class="fa fa-car" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                                </p>
                                <div class="row"></div>
                                <p style="white-space: pre-line">
                                    Description:
                                    {{ $property->description }}
                                </p>
                                <p>Placed On: {{ $property->created_at->toDateString() }}</p>
                            </div>
                        </div>
                        <br><br>
                        @if(\Illuminate\Support\Facades\Auth::guest())
                            <div class="p-5">
                                <h3>Login to get the contact information</h3>
                            </div>
                        @else
                            <div class="p-5">
                                <h3>Contact Info:</h3>
                                <p> {{ $property->contactInfo }}</p>
                                <hr>
                                @if($property->userId != \Illuminate\Support\Facades\Auth::id())

                                    <form>
                                        Contact the owner about this property of code
                                        <strong>{{ $property->id }}</strong>:
                                        <div class="form-label-group">
                                            <label class="form-label-group" for="message">Message:</label>
                                            <textarea name="message" class="form-control" style="height: 300px">`
                                                Hi, I'm interested to view your property! What's the best time to inspect?
                                                Thanks

                                                Hi, How much is the last price for your property?
                                                Thanks
                                        </textarea>
                                        </div>
                                        <input type="submit" value="Send" class="btn-primary1">

                                    </form>
                                @endif
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
        </div>
        <div class="main3">

        </div>
    </div>


@endsection
