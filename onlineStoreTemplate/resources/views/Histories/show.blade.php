@extends('layouts.app')

@section('content')
    <div class="container bg-white m-3">
        <div style="overflow-y: scroll;">
            @if($type == 'property' || $type == 'commercial')
                <table class="table1" id="myDataTable">
                    <thead class="">
                    <tr>
                        <th scope="col">Property ID</th>
                        <th scope="col">Description</th>
                        <th scope="col">Rooms Number</th>
                        <th scope="col">Bathrooms Number</th>
                        <th scope="col">Parking Number</th>
                        <th scope="col">Bedrooms Number</th>
                        @if($type == 'commercial')
                            <th scope="col">Floors</th>
                        @endif
                        <th scope="col">Accepted</th>
                        <th scope="col">Creator Id</th>
                        <th scope="col">Category</th>
                        <th scope="col">Type</th>
                        <th scope="col">Location</th>
                        <th scope="col">Admin Contact Info</th>
                        <th scope="col">Longitude</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Operation Date</th>
                    </tr>
                    </thead>
                    <tbody class="">
                    @foreach($histories as $property)
                        <tr @if($property->isCreated == 1)class="bg-success"
                            @endif @if($property->isDeleted == 1)class="bg-danger"
                            @endif @if($property->isUpdated == 1)class="bg-secondary" @endif>
                            <td>{{ $property->propertyId }}</td>
                            <td>{{ $property->post_description }}</td>
                            <td>{{ $property->post_roomsNumber }}</td>
                            <td>{{ $property->post_bathroomsNumber }}</td>
                            <td>{{ $property->post_parkingNumber }}</td>
                            <td>{{ $property->post_bedroomsNumber }}</td>
                            @if($type == 'commercial')
                                <td>{{ $property->commercial_floor }}</td> @endif
                            <td>@if($property->post_accepted == 0)False @else True @endif</td>
                            <td><a href="/users/{{ $property->post_userId }}">{{ $property->post_userId }}</a></td>
                            <td>{{ $property->post_category }}</td>
                            <td>{{ $property->post_type }}</td>
                            <td>{{ $property->post_locationDescription }}</td>
                            <td>{{ $property->post_contactInfo }}</td>
                            <td>{{ $property->post_longitude }}</td>
                            <td>{{ $property->post_latitude }}</td>
                            <td>{{ $property->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <table class="table1" id="myDataTable">
                    <thead class="">
                    <tr>
                        <th scope="col">User ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">PhoneNumber</th>
                        <th scope="col">Bio</th>
                        <th scope="col">Operation Date</th>
                    </tr>
                    </thead>
                    <tbody class="">
                    @foreach($histories as $user)
                        <tr @if($user->isCreated == 1) class="bg-success"
                            @endif @if($user->isDeleted == 1)class="bg-danger"
                            @endif @if($user->isUpdated == 1)class="bg-secondary" @endif >
                            <td>{{ $user->userId }}</td>
                            <td>{{ $user->user_name }}</td>
                            <td>{{ $user->user_email }}</td>
                            @if($user->user_role == 0)
                                <td>Admin</td>@endif
                            @if($user->user_role == 1)
                                <td>Agent</td>@endif @if($user->user_role == 2)
                                <td>Normal User</td>@endif
                            <td>+{{ $user->user_phoneNumberCode }} {{$user->user_phoneNumber}}</td>
                            <td>{{ $user->user_bio }}</td>
                            <td>{{ $user->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            @endif

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
