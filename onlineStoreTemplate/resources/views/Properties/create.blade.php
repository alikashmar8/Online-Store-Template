@extends('layouts.app')

@section('content')

    <div class="hero" style=" background-image: url(https://webside.xyz/MK/hackathon/imagaga123/images1/sell.jpg);
    " >

        <div class="inner">
            <h1>Let's List It</h1>
        </div>
    </div>


    <div class="main-content">

        <div class="main2">

           <div class="container creat_app ">


                <h2>Place New Property</h2>

                <div class="p-5">

                    {{ Form::open(['action' => 'App\Http\Controllers\PropertiesController@store','method'=>'POST','enctype'=>'multipart/form-data']) }}

                    <div class="">
                        <div class="raw ">

                            <div {{--maps class="col-md-6" style="height:300px"--}}>
                                <script
                                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1CbPQ2HCLV38r9m68B8VCv51JBVke5TM&callback=initAutocomplete&libraries=places&v=weekly"
                                    defer
                                ></script>

                                <div class="  form-label-group">
                                    {{ Form::label('locationDescription','Location:') }}

                                    <input type="text" placeholder="Enter Location" {{--name="address"--}} name="locationDescription"
                                           onFocus="initializeAutocomplete()" id="locality" required>
                                </div>
                                <br/>

                                <div  style="display: none" >

                                    <input type="text" name="city" id="city" placeholder="City" value=""><br>
                                    <input type="text" name="latitude" id="latitude" placeholder="Latitude" value=""><br>
                                    <input type="text" name="longitude" id="longitude" placeholder="Longitude" value=""><br>
                                    <input type="text" name="place_id" id="location_id" placeholder="LocationId" value=""><br>

                                </div>

                                <script type="text/javascript">
                                    function initializeAutocomplete() {
                                        var input = document.getElementById('locality');
                                        // var options = {
                                        //   types: ['(regions)'],
                                        //   componentRestrictions: {country: "IN"}
                                        // };
                                        var options = {}

                                        var autocomplete = new google.maps.places.Autocomplete(input, options);

                                        google.maps.event.addListener(autocomplete, 'place_changed', function() {
                                            var place = autocomplete.getPlace();
                                            var lat = place.geometry.location.lat();
                                            var lng = place.geometry.location.lng();
                                            var placeId = place.place_id;
                                            // to set city name, using the locality param
                                            var componentForm = {
                                                locality: 'short_name',
                                            };
                                            for (var i = 0; i < place.address_components.length; i++) {
                                                var addressType = place.address_components[i].types[0];
                                                if (componentForm[addressType]) {
                                                    var val = place.address_components[i][componentForm[addressType]];
                                                    document.getElementById("city").value = val;
                                                }
                                            }
                                            document.getElementById("latitude").value = lat;
                                            document.getElementById("longitude").value = lng;
                                            document.getElementById("location_id").value = placeId;
                                        });
                                    }
                                </script>

                            </div >

                            <div class="  form-label-group">
                                {{ Form::label('price','Price:') }}
                                {{ Form::number('price','',['min' => '0','class' => ' ' ,'placeholder'=>'Price', 'required']) }}
                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div><BR/>

                            <div class="  form-label-group special">
                                {{ Form::checkbox('showPrice', 1, true) }}
                                {{ Form::label('showPrice','Show Price') }}
                            </div><BR/>
                            <div class="  form-label-group">
                                {{ Form::label('category','Listing Type:') }}
                                <select name="category">
                                    @foreach(\App\Models\Category::all() as $type)
                                        <option value="{{$type->id}}">{{ $type->title }} </option>
                                    @endforeach
                                </select>
                            </div><BR/>
                            <div class="  form-label-group">
                                {{ Form::label('type','Property Type:') }}
                                <select name="type">
                                    @foreach(\App\Models\PropertyType::all() as $type)
                                        <option value="{{$type->id}}">{{ $type->title }} </option>
                                    @endforeach
                                </select>
                            </div><BR/>

                            {{--                    <div class="  form-label-group">--}}
                            {{--                        {{ Form::label('bedroomsNumber','Number Of Bedrooms:') }}--}}
                            {{--                        {{ Form::number('bedroomsNumber','',['class' => 'form-control','placeholder'=>'bedroomsNumber']) }}--}}
                            {{--                    </div>--}}

                            <div class="  form-label-group">
                                {{ Form::label('bedroomsNumber','Number Of Bedrooms:') }}
                                {{ Form::select('bedroomsNumber',array(0=> 0,1,2,3,4,5=>'5+'),['class' => 'form-control','placeholder'=>'bathroomsNumber']) }}
                            </div><BR/>

                            <div class="  form-label-group">
                                {{ Form::label('bathroomsNumber','Number Of Bathrooms:') }}
                                {{ Form::select('bathroomsNumber',array(0=> 0,1,2,3,4=>'4+'),['class' => 'form-control','placeholder'=>'bathroomsNumber']) }}
                            </div><BR/>
                            <div class="  form-label-group">
                                {{ Form::label('parkingNumber','Number Of Parkings:') }}
                                {{ Form::select('parkingNumber',array(0=> 0,1,2,3,4=>'4+'),['class' => 'form-control','placeholder'=>'bathroomsNumber']) }}
                            </div><BR/>


                            <div class="  form-label-group">
                                {{ Form::label('description','Description:') }}
                                {{ Form::textarea('description','',['class' => '','placeholder'=>'Description', 'required' ]) }}
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div><BR/>







                            <div class="  form-label-group">
                                {{ Form::label('images','Images:') }}
                                <input type="file" name="images[]" id="file" accept=".png, .jpg, .mp4" multiple>
                                <script>
                                    var uploadField = document.getElementById("file");

                                    uploadField.onchange = function () {
                                        var i=0;
                                        var space=0;
                                        for (i = 0; i < this.files.length; i++) {
                                            space += this.files[i].size

                                        }
                                        if (space > 150000000) {
                                            alert("Files are too big!");
                                            this.value = "";
                                        }
                                        ;
                                    };
                                </script>
                                @error('images')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div><BR/>


                        </div>
                    </div>

                    <div class=" ">
                        {{ Form::submit('Publish',['class'=>' btn-primary1']) }}
                    </div>
                    {{ Form::close() }}
                </div>
            </div>

        </div>
        <div class="main3"></div>
    </div>

@endsection
