@extends('layouts.app')

@section('content')
    <div class="hero" style=" background-image: linear-gradient(#c92208, #f5f5f5);
    " >
        <div class="inner">
            <h1>All Properties</h1>
        </div>
    </div>
    <BR><BR>

    <div class="container bg-white">
        @if(count($properties)>0)
            <table class="table1" id="myDataTable">
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
                </tr>
                </thead>
                <tbody class="bg-white">
                @foreach($properties as $property)
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
                        <td><button class="btn btn-danger no-sort delete" data-toggle="modal" data-target="#deleteModal">Delete</button>
{{--                               onclick="event.preventDefault(); document.getElementById('delete-form-{{$property->id}}').submit();"--}}

                        </td>
                        {{--                        form to trigger delete property--}}
                        {{ Form::open(['action' => ['App\Http\Controllers\PropertiesController@destroy',$property->id],'method'=>'DELETE' , 'class'=>'hidden','id'=>'delete-form-'.$property->id]) }} {{ Form::close() }}

                    </tr>
                @endforeach
                </tbody>
            </table>

        @else
            <h1>No accepted properties to show !</h1>
        @endif

    </div>


    {{--    Delete Modal--}}
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <input type="hidden" name="deleteId" id="deleteId">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-danger" value="Delete" onclick="deleteProperty()">
                </div>

            </div>
        </div>
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
        var table = $('#myDataTable').DataTable({
            "columnDefs": [
                {"orderable": false, "targets": 1},
                {"orderable": false, "targets": 6},
                {"orderable": false, "targets": 7}
            ]
        });

        table.on('click','.delete', function () {
            $tr = $(this).closest('tr');
            if($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }
            var data = table.row($tr).data();
            console.log(data);
            $('#deleteId').val(data[0]);
        });

        function deleteProperty() {
            event.preventDefault();
            console.log($('#deleteId').val())
            document.getElementById('delete-form-'+$('#deleteId').val()).submit();
        }
    </script>

@endsection
