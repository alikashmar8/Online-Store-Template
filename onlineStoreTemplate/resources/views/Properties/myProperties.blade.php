@extends('layouts.app')

@section('content')

    <div class="hero" style=" background-image: url(https://image.freepik.com/free-photo/close-up-financial-instruments-with-glasses_23-2148285273.jpg);
    " >

        <div class="inner">
            <h1>Your Insight</h1>
        </div>
    </div>
<br><BR>
    <div class="container bg-white p-5" style="overflow-x: scroll;">
    @if(count($properties)>0)
            <table class="table1" id="myDataTable">
                <thead class="">
                <tr>
                    <th scope="col">Images</th>
                    <th scope="col">Price</th>
                    <th scope="col">Showing Price</th>
                    <th scope="col">Type</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody class="">
                @foreach($properties as $property)
                    <tr>
                        <td style="height: 80px; width: 200px;">
                            <div id="carouselExampleFade-{{$property->id}}"
                                 class="carousel slide carousel-fade"
                                 data-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach($property->images as $image)

                                        <div class="carousel-item @if($loop->first) active @endif">
                                            <div style="width: 100%; height: 100%;">
                                                <img style="height: 100px; width: 200px;"
                                                     src="{{url('/storage/properties_images/' . $image->url)}}"
                                                     alt="No Image">
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleFade-{{$property->id}}"
                                   role="button"
                                   data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true">
                                        <i class="fa fa-chevron-left" style="color: #df0505" aria-hidden="true"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleFade-{{$property->id}}"
                                   role="button"
                                   data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true">
                                        <i class="fa fa-chevron-right" style="color: #df0505" aria-hidden="true"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </td>
                        <td>{{ $property->price }} $</td>

                        @if($property->showPrice == 0) <td class="text-danger">False</td> @else <td class="text-success">True</td> @endif

                        @if($property->categoryId == 0) <td>Sell</td> @else <td>Rent</td> @endif

                       @if($property->accepted == 0) <td class="text-warning">Waiting confirmation</td> @else <td class="text-success">Listed</td> @endif

                    </tr>
                @endforeach
                </tbody>
            </table>

    @else
        <h3>You didn't place any properties yet</h3>
    @endif
    </div>
@endsection
