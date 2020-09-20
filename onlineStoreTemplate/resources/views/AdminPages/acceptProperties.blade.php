@extends('app')

@section('content')
    <div class="container bg-white">
        @if(count($notAcceptedProperties)>0)
            <table class="table" id="myDataTable">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Images</th>
                    <th scope="col">Price</th>
                    <th scope="col">Showing Price</th>
                    <th scope="col">Agent Details</th>
                    <th scope="col">Type</th>
                    <th scope="col">Details</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Accept</th>
                </tr>
                </thead>
                <tbody class="bg-white">
                @foreach($notAcceptedProperties as $property)
                    <tr>
                        <td>{{ $property->id }}</td>
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
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleFade-{{$property->id}}"
                                   role="button"
                                   data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </td>
                        <td>{{ $property->price }} $</td>
                        @if($property->showPrice == 0)
                            <td class="text-danger">False</td>
                        @else
                            <td class="text-success">True</td>
                        @endif
                        <td><a href="/users/{{ $property->userId }}">{{ $property->agent->name }}</a></td>
                        @if($property->type == 0)
                            <td>Sell</td>
                        @else
                            <td>Rent</td>
                        @endif
                        <td><a class="btn btn-info no-sort" href="/properties/{{$property->id}}">Show</a></td>
                        <td><a class="btn btn-danger no-sort"
                               onclick="event.preventDefault(); document.getElementById('delete-form-{{$property->id}}').submit();">Delete</a>
                        </td>
                        <td><a class="btn btn-success no-sort"
                               onclick="event.preventDefault(); document.getElementById('accept-form-{{$property->id}}').submit();">Accept</a>
                        </td>
                        {{--                    //form to trigger accept property--}}
                        {{ Form::open(['action' => ['App\Http\Controllers\PropertiesController@accept',$property->id],'method'=>'PUT' , 'class'=>'hidden','id'=>'accept-form-'.$property->id]) }} {{ Form::close() }}
                        {{--                        form to trigger delete property--}}
                        {{ Form::open(['action' => ['App\Http\Controllers\PropertiesController@destroy',$property->id],'method'=>'DELETE' , 'class'=>'hidden','id'=>'delete-form-'.$property->id]) }} {{ Form::close() }}

                    </tr>
                @endforeach
                </tbody>
            </table>

        @else
            <h1>No properties to show !</h1>
        @endif

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
    <script type="text/JavaScript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $('#myDataTable').DataTable({
            "columnDefs": [
                {"orderable": false, "targets": 1},
                {"orderable": false, "targets": 6},
                {"orderable": false, "targets": 7},
                {"orderable": false, "targets": 8}
            ]
        });
    </script>

@endsection
