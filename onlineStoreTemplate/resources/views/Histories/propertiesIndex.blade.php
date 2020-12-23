@extends('layouts.app')

@section('content')

    <div class="container bg-white m-3">
        <div class="col-md-5">
            <table class="table1" id="myDataTable">
                <thead class="">
                <tr>
                    <th scope="col" hidden>Property ID</th>
                </tr>
                </thead>
                <tbody class="">
                @foreach($properties as $property)
                    <tr>
                        <td><a href="/histories/properties/{{$property->propertyId}}">{{ $property->propertyId }}</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

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
    <script type="text/JavaScript"
            src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script>
        var table = $('#myDataTable').DataTable({
            "columnDefs": [
                {"orderable": false, "targets": 0},
            ]
        });

    </script>

@endsection
