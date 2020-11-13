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


                <h2>Place New Commercial Property</h2>

                <div class="p-5">


                    <form action="{{ route('storeCommercial') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="">
                            <div class="raw ">

                                <div {{--maps class="col-md-6" style="height:300px"--}}>
                                    <script
                                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1CbPQ2HCLV38r9m68B8VCv51JBVke5TM&callback=initAutocomplete&libraries=places&v=weekly"
                                        defer
                                    ></script>

                                    <div class="  form-label-group">
                                        <lable for="locality"> Location:</lable>
                                        <input type="text"  placeholder="Enter Location"
                                               {{--name="address"--}} name="location"
                                               onFocus="initializeAutocomplete()" id="locality" required>
                                        <i class='far fa-question-circle' data-toggle="tooltip" data-placement="top"
                                           title="Choose location from suggested options"></i>


                                    </div>
                                    @error('latitude')
                                    <span class="alert-danger" role="alert">
                                                    <strong>Please use a valid location from the options</strong>
                                                </span>
                                    @enderror
                                    <br/>

                                    <div style="display: block">

                                        <input type="text" name="city" id="city" placeholder="City" value=""><br>
                                        <input type="text" name="latitude" id="latitude" placeholder="Latitude"
                                               value=""><br>
                                        <input type="text" name="longitude" id="longitude" placeholder="Longitude" value=""><br>
                                        <input type="text" name="place_id" id="location_id" placeholder="LocationId"
                                               value="" ><br>

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
                                    <label for="price" >Price: </label>
                                    <input type="number" id="price" name="price" min="0" class=""   placeholder ="Price" required="">
                                    @error('price')
                                    <span class="alert-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div><BR/>

                                <div class="  form-label-group special">

                                    <input type="checkbox" name="showPrice" checked>
                                    <label for="showPrice">Show Price</label>
                                </div><BR/>
                                <div class="  form-label-group">
                                    <label for="category">Listing Type:</label>

                                    <select name="category">
                                        <option value="1" >Buy</option>
                                        <option value="2">Lease</option>
                                        <option value="3" >Invest</option>
                                    </select>
                                </div><BR/>
                                <div class="  form-label-group">
                                    <label for="type">Property Type:</label>

                                    <select name="type">

                                        @foreach(\App\Models\commTypes::all() as $type)
                                            <option value="{{$type->id}}" >{{ $type->title }} </option>
                                        @endforeach
                                    </select>
                                </div><BR/>

                                {{--                    <div class="  form-label-group">--}}
                                {{--                        {{ Form::label('bedroomsNumber','Number Of Bedrooms:') }}--}}
                                {{--                        {{ Form::number('bedroomsNumber','',['class' => 'form-control','placeholder'=>'bedroomsNumber']) }}--}}
                                {{--                    </div>--}}

                                <div class="  form-label-group">
                                    <label for="floor">Floor: </label>
                                    <input type="number" name="floor" id="floor" class="" placeholder="Floor" required="">
                                </div><BR/>



                                <div class="  form-label-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="" placeholder="Description" required="" ></textarea>
                                    @error('description')
                                    <span class="alert-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div><BR/>



                                <div class="  form-label-group">
                                    <label for="images" >Images</label>
                                    <input type="file" name="images[]" id="file" accept=".png, .jpg, .mp4" multiple>
                                    <i class='far fa-question-circle' data-toggle="tooltip" data-placement="top"
                                       title="Supported file types are (mp4/jpg/png)"></i>
                                    <br>
                                    <small class="ml-3">Total max size = 100M</small>


                                    <script>
                                        var uploadField = document.getElementById("file");

                                        uploadField.onchange = function () {
                                            var i = 0;
                                            var space = 0;
                                            for (i = 0; i < this.files.length; i++) {
                                                space += this.files[i].size

                                            }
                                            if (space > 150000000) {
                                                alert("Files are too big!");
                                                this.value = "";
                                            }

                                        }
                                    </script>
                                    @error('images')
                                    <span class="alert-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div><BR/>


                            </div>
                        </div>




                            <input type="submit" name="submit" id="submit" class="btn-primary1">


                    </form>
                </div>
            </div>

        </div>
        <div class="main3"></div>
    </div>

@endsection
