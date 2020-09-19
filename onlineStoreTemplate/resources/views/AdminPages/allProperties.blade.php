@extends('app')

@section('content')

    <div class="container bg-white">
        @if(count($properties)>0)
            <table class="table" id="myDataTable">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Price</th>
                    <th scope="col">Agent</th>
                    <th scope="col">Details</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Accept</th>
                </tr>
                </thead>
                <tbody class="bg-white">
                @foreach($properties as $property)
                    <tr>
                        <td>{{ $property->price }}</td>
                        <td>{{ $apartment->userId }}</td>
                        <td><a class="btn btn-info no-sort" href="/properties/{{$property->id}}">Show</a></td>
                        <td><a class="btn btn-danger no-sort" href="#">Delete</a></td>
                        <td><a class="btn btn-success no-sort" href="#">Accept</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        @else
            <h1>No accepted properties to show !</h1>
        @endif

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
    <script type="text/JavaScript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $('#myDataTable').DataTable({
            "columnDefs": [
                { "orderable": false, "targets": 2 },
                { "orderable": false, "targets": 3 },
                { "orderable": false, "targets": 4 }
            ]
        });
    </script>

@endsection
