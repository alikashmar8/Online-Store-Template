@extends('layouts.app')

@section('content')
    @if(\Illuminate\Support\Facades\Auth::user()->role == 0)
        {{--        admin area--}}
        <div class="container bg-white">

            @if(count($users)>0)
                <table class="table" id="myDataTable">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Confirmed</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Delete</th>

                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @foreach($users as $user)
                        <tr>
                            <td><a href="/users/{{ $user->id }}">{{ $user->id }}</a></td>
                            <td><a href="/users/{{ $user->id }}">{{ $user->name }}</a></td>
                            <td>{{ $user->phoneNumber }}</td>
                            <td>{{ $user->email }} </td>
                            @if($user->email_verified_at == NULL)
                                <td class="text-danger">False</td>
                            @else
                                <td class="text-success">True</td>
                            @endif
                            <td>{{ $user->created_at }}</td>

                            <td><a class="btn btn-danger"
                                   onclick="event.preventDefault(); document.getElementById('delete-form-{{$user->id}}').submit();">Delete</a>
                            </td>
                            {{--                        form to trigger delete property--}}
                            {{ Form::open(['action' => ['\App\Http\Controllers\UsersController@destroy',$user->id],'method'=>'DELETE' , 'class'=>'hidden','id'=>'delete-form-'.$user->id]) }} {{ Form::close() }}


                        </tr>
                    @endforeach
                    </tbody>
                </table>

            @else
                <h2>No Users in DB</h2>
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
        <script type="text/JavaScript"
                src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

        <script>
            $('#myDataTable').DataTable({
                "columnDefs": [
                    {"orderable": false, "targets": 6}
                ]
            });
        </script>
    @else
        {{--                ristricted area--}}
        <script type="text/javascript">
            window.location = "/";//here double curly bracket
        </script>
    @endif
@endsection
