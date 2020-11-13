@extends('layouts.app')

@section('content')
    <div class="hero" style=" background-image: url(https://webside.xyz/MK/hackathon/imagaga123/images1/buy.jpg);
    ">

        <div class="inner" style="color: #0a0807; text-shadow:0px 0px 10px #e4002b">
            <h1>OZ Commercials</h1>
        </div>
    </div>

    <div class="main-content">

        <div class="main2">
            <div class="m-5">
                <div class="row float-right">
                    <a class="btn-primary1 " href="/createCommercial" >
                        Add New Commercial Property
                    </a>

                </div>
                <div class="row">
                    @if(count($coms) > 0)
                        @foreach($coms as $com)

                            <div class="post my-5">
                                @if($com->created_at > \Carbon\Carbon::now()->subDays(14))
                                    <div class="new-prop">
                                        <img src="https://webside.xyz/MK/hackathon/imagaga123/images1/flag.svg"
                                             style="border: none">
                                    </div>
                                @endif
                                <div id="carouselEx" class="carousel slide carousel-fade " data-ride="carousel">
                                    <div class="carousel-inner">
                                        {{--count($com->images)> 0--}}
                                        @if($com->extra3>0)
                                            @foreach($com->images as $image)
                                                <div class="carousel-item @if($loop->first) active @endif">
                                                    @if(pathinfo($image->url, PATHINFO_EXTENSION) ==='mp4')
                                                        <video class="d-block w-100" alt="No Image" controls>
                                                            <source
                                                                src="{{url('/storage/properties_images/' . $image->url)}}"
                                                                type="video/mp4">

                                                        </video>
                                                    @else
                                                        <img class="d-block w-100"
                                                             src="{{url('/storage/properties_images/' . $image->url)}}"
                                                             alt="No Image">
                                                    @endif
                                                </div>
                                            @endforeach
                                        @else
                                            <img class="d-block w-100"
                                                 src="{{url('/storage/properties_images/unavailable.jpg')}}"
                                                 alt="No Image">
                                        @endif

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

                                <a style="text-decoration: none" href="#">
                                    <div class="post-details">

                                        <p class="price">{{ $com->location}} </p>

                                        @if($com->showPrice == 1)
                                            <p class="price">
                                                <i class="fa fa-usd" aria-hidden="true"></i>
                                                {{$com->price}}
                                            </p>
                                        @else
                                            <p class="price">
                                                Contact the agent for price
                                            </p>
                                        @endif


                                        <p style="color: #0a0807;padding-left: 0.5rem;">
                                            <i class="fas fa-ruler-combined"></i> {{$com->floor}}m<sup>2</sup>
                                            | {{ \App\Models\commTypes::findOrFail($com->type)->title }}

                                        </p>

                                        {{--<a class="special-link" style="color: #0a0807;padding-left: -0.5rem;"
                                           href="/properties/{{$property->id}}">View details</a>--}}
                                    </div>
                                </a>
                            </div>

                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="main3">
            <div class="container">


            </div>

        </div>

    </div>
@endsection
