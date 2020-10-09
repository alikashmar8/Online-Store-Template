@extends('layouts.app')

@section('content')

    <div class="hero" style=" background-image: url(https://webside.xyz/MK/hackathon/imagaga123/images1/sell.jpg);
    " >

        <div class="inner">
            <h1>Let's List It</h1>
        </div>
    </div>
    <div class="container creat_app">


        <h2>Place New Appartment</h2>
        <div>

            {{ Form::open(['action' => 'App\Http\Controllers\PropertiesController@store','method'=>'POST','enctype'=>'multipart/form-data']) }}

            <div class="row">
                <div class="col-md-6" style="height:500px">
                    <div class="form-group form-label-group">
                        {{ Form::label('price','Price:') }}
                        {{ Form::number('price','',['class' => 'form-control','placeholder'=>'Price']) }}
                    </div>
                    <div class="form-group form-label-group special">
                        {{ Form::checkbox('showPrice', 1, true) }}
                        {{ Form::label('showPrice','Show Price') }}
                    </div>
                    <div class="form-group form-label-group">
                        {{ Form::label('bedroomsNumber','Number Of Bedrooms:') }}
                        {{ Form::number('bedroomsNumber','',['class' => 'form-control','placeholder'=>'bedroomsNumber']) }}
                    </div>
                    <div class="form-group form-label-group">
                        {{ Form::label('type','Type:') }}
                        {{ Form::select('type', array(0 => 'Sell', 1 => 'Rent'), 0) }}
                    </div>
                    <div class="form-group form-label-group">
                        {{ Form::label('description','Description:') }}
                        {{ Form::textarea('description','',['class' => 'form-control','placeholder'=>'Description']) }}
                    </div>
                    <div class="form-group form-label-group">
                        {{ Form::label('images','Images:') }}
                        <input type="file" name="images[]" multiple>
                    </div>
                </div>
                <div class="col-md-6" style="height:500px">
                    <div id="map" style="position: absolute; right: 0; left: 0; top: 0; bottom: 0;"></div>
                    <input type="text" name="longitude" id="longitude" />
                    <input type="text" name="latitude" id="latitude" />
                </div>
            </div>

            <div class="my-5 py-2">
                {{ Form::submit('Add',['class'=>' btn-primary1']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>

    <script>
        var map = L.map('map').setView([-29.5, 135], 4);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var popup = L.popup();

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("Your property location")
                .openOn(map);
            document.getElementById('longitude').value = e.latlng.lng;
            document.getElementById('latitude').value = e.latlng.lat;


        }

        map.on('click', onMapClick);
    </script>

@endsection
