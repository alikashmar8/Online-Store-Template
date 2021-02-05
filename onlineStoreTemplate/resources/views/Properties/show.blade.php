@extends('layouts.app')

@section('content')

    <div class="main-content">
        <div class="main2">
            <div class="container  ">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                @if(!\Illuminate\Support\Facades\Auth::guest())
                    @if(\Illuminate\Support\Facades\Auth::user()->id == $user->userId)
                        {{--                        Owner section--}}
                        <div class=" ">

                            @if($user->accepted == 0)
                                @if($user->contactInfo != null)
                                    <div class="alert alert-danger">
                                        Your user is hidden currently, press show to make it visible!
                                        <a class="btn btn-success " href="/userShowProperty?id={{$user->id}}">Show</a>
                                    </div>

                                @else
                                    <div class="alert alert-danger">
                                        Your user is not accepted yet! Kindly wait admin confirmation.
                                    </div>

                                @endif
                            @else
                                <div class="alert alert-info"> Your user listed successfully.
                                    Press 'hide' button to hide it temporarily.
                                    <a class="btn btn-danger " href="/userHideProperty?id={{$user->id}}">Hide</a>
                                </div>

                            @endif

                            @if($user->contactInfo != null)
                                @if($user->accepted == 0)

                                @else

                                @endif

                            @endif

                        </div>
                    @endif
                @endif
                <div class="post ">
                    @if(\Illuminate\Support\Facades\Auth::user()->role == 0 )
                        @if($user->packageId == 4 || $user->packageId == 5 )
                        This property is registered in 'Professional Photography', you can edit it:
                            <a class="btn-primary1 m-3 p-2 " style="color: white" href="/properties/{{$user->id}}/edit">
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                                Edit
                            </a>
                         @endif
                        <br/>
                    @endif


                    <div id="carouselEx" class="carousel slide carousel-fade " data-ride="carousel">
                        <div class="carousel-inner">
                            @if(count($user->images)>0)
                                @foreach($user->images as $image)
                                    <div class="carousel-item @if($loop->first) active @endif"
                                         style="position: relative; z-index :1;top :0;left :0;width :100%;height :50vw;overflow :hidden;display: flex;">
                                        @if(pathinfo($image->url, PATHINFO_EXTENSION) ==='mp4')
                                            <video class="d-block w-100"
                                                   style="height:  100%; width: 800px;object-fit: cover;" autoplay
                                                   controls>
                                                <source
                                                    src="{{url('/storage/properties_images/' . $image->url)}}"
                                                    type="video/mp4">

                                            </video>
                                        @else
                                            <img class="d-block w-100"
                                                 style="height: 50vw; width: 800px;object-fit: contain;"
                                                 src="{{url('/storage/properties_images/' . $image->url)}}"
                                                 alt="No Image">
                                        @endif
                                    </div>
                                @endforeach
                            @else
                                <img class="d-block w-100"
                                     src="{{url('/storage/properties_images/unavailable.jpg')}}"
                                     alt="No Image">
                            @endif

                        </div>
                        <a class="carousel-control-prev" href="#carouselEx" role="button"
                           data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true">
                        <i class="fa fa-chevron-left" style="color: #df0505" aria-hidden="true"></i>
                    </span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselEx" role="button"
                           data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true">
                        <i class="fa fa-chevron-right" style="color: #df0505" aria-hidden="true"></i>
                    </span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="dkn">

                        <div class="">
                            <h3>Details:</h3>

                            <a class="btn-primary1 m-3 p-2 float-right" style="color: white" href="/brochure/{{$user->id}}"> <i class="fas fa-paste"></i> Brochure </a>
                            <hr>

                            <div class="post-details ">

                                <p class="price">{{ $user->locationDescription }} </p>


                                <p style="font-size: 22px">
                                    {{$user->bedroomsNumber}} <i class="fa fa-bed"
                                                                 aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                                    {{$user->bathroomsNumber}} <i class="fa fa-bath"
                                                                  aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                                    {{$user->parkingNumber}} <i class="fa fa-car"
                                                                aria-hidden="true"></i>&nbsp;
                                    | {{ \App\Models\PropertyType::findOrFail($user->typeId)->title }}
                                </p>

                                @if($user->showPrice == 1)  <p class="price">
                                    $ {{$user->price}} </p>

                                @else
                                    <p class="price">Contact the agent for the price</p>
                                @endif


                                <div class="row"></div>
                                <p style="white-space: pre-line">
                                    <a style="font-size:25px; font-weight: 600;  ">Description:</a>
                                    {{ $user->description }}
                                </p>
                                <p><a style="font-size:25px; font-weight: 600;  ">Placed On:</a>
                                    {{ $user->created_at->toDateString() }}</p>

                                <br/>

                            </div>
                        </div>

                        <br/><br/>
                        <div class="">
                            {{--      maps   --}}
                            <p id="lat" style="display: none">{{ $user->latitude }}</p>
                            <p id="lng" style="display: none">{{ $user->longitude }}</p>

                            <h3>Location</h3>
                            <br/>

                            <div id="map" style="height: 400px;  width: 100%;"></div>

                            <script>
                                var lat1 = document.getElementById('lat').innerHTML
                                var lng1 = document.getElementById('lng').innerHTML

                                function initMap() {

                                    var location = {lat: parseFloat(lat1), lng: parseFloat(lng1)};

                                    var map = new google.maps.Map(
                                        document.getElementById('map'), {zoom: 15, center: location});

                                    var marker = new google.maps.Marker({
                                        position: location,
                                        map: map   /* , icon:'pinkball.png'*/
                                    });
                                }
                            </script>

                            <script async defer
                                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1CbPQ2HCLV38r9m68B8VCv51JBVke5TM&callback=initMap"></script>


                        </div>

                        <br/><br/>


                        @if(\Illuminate\Support\Facades\Auth::guest())
                            <div class="">
                                <h3>Login to get the contact information</h3>
                            </div>
                        @else


                            <div class="">
                                <hr>

                                <h4>Admin Notes:</h4>
                                <p style="white-space: pre-line; border: none; border-left: 3px solid #e4002b;   padding: 20px; color: #0a0807"> {{ $user->contactInfo }}
                                </p>
                                <BR/>
                                <hr>
                                @if($user->userId != \Illuminate\Support\Facades\Auth::id())

                                    <form action="/contactForProperty" method="get">
                                        @csrf
                                        <h4>Contact the owner about this user:</h4><br/>

                                        <input type="hidden" value="{{ $user->id }}" name="id">
                                        <input type="hidden" value="{{ $user->agent->email }}"
                                               name="email1">
                                        <div class="form-label-group">
                                            <label class="form-label-group" for="message">Message:</label>
                                            <textarea name="message" class="form-control"
                                                      style="height: 300px ; margin-top: 10px;"
                                                      required>
Hi, I am interested to view your user! What is the best time to inspect?
Thanks

Hi, How much is the last price for your user?
Thanks
                                        </textarea>

                                        </div>
                                        <input type="submit" value="Send" class="btn-primary1">

                                    </form>


                                    {{--report--}}
                                    <hr>

                                    <h4>Admin Notes:</h4>
                                    <p style="white-space: pre-line; border: none; border-left: 3px solid #e4002b;   padding: 20px; color: #0a0807"> {{ $user->contactInfo }}
                                    </p>
                                    <BR/>

                                        @if($user->userId != \Illuminate\Support\Facades\Auth::id())
                                        <hr>
                                            <form action="/reportProperty" method="get">
                                                @csrf
                                                <input type="hidden" value="/properties/{{ $user->id }}" name="id">

                                                <div class="form-label-group">
                                                    <h6>Report this listing:</h6>
                                                    <label class="form-label-group" for="message">
                                                        <small>
                                                        If there is inappropriate or incorrect details please report this listing.
                                                        </small>
                                                    </label>


                                                </div>
                                                <input type="submit" value="Send" class="btn-primary1" style="font-size: 12px;padding: 3px">

                                            </form>
                                        @endif
                                @else
                                    <h4>Current Package</h4>
                                    <p>{{\App\Models\Packages::findOrFail($user->packageId)->title}}
                                        <input type="hidden" id="currentPrice" value="{{\App\Models\Packages::findOrFail($user->packageId)->price}}">
                                    </p>

                                    <div class="  form-label-group">
                                        <div class="row">

                                            <form action="{{ route('upgradePackage') }}" method="post"  >
                                                @csrf
                                                <br/>
                                                <label for="newPackageId">Upgrade your current package for this property:</label>
                                                <br/>
                                                <select name="newPackageId" id="newPackageId" >
                                                    @foreach(\App\Models\Packages::all() as $a  )
                                                        @if( $a->id  < 8 || $a->id > 13  )

                                                                <option value="{{$a->id}}">{{$a->title}} </option>


                                                        @endif
                                                    @endforeach
                                                </select>

                                                <input type="hidden" name="oldPackage" value="{{$user->packageId}}">
                                                <input type="hidden" name="propertyId" value="{{$user->id}}">
                                                <input type="submit" value="Upgrade" class="btn-primary1 float-right" style="color: #fff">
                                            </form>
                                        </div>
                                    </div>

                                    @if($user->packageId == 6 ||$user->packageId == 7 ||$user->packageId == 11 || $user->packageId == 12 ||$user->packageId == 13 )
                                        <hr>
                                        <h4>PDF Application</h4>
                                        <div class="  form-label-group">
                                            <div class="row">

                                                <form action="{{ route('getPdf') }}" method="get"  >
                                                    @csrf
                                                    <br/>
                                                    <label for="state">Select the state:</label>
                                                    <br/>
                                                    <select name="state" id="state" >
                                                        <option value="WA">WA </option>
                                                        <option value="SA">SA </option>
                                                        <option value="NSW">NSW </option>
                                                        <option value="NT">NT </option>
                                                        <option value="VIC">VIC </option>
                                                        <option value="QLD">QLD </option>
                                                        <option value="ACT">ACT </option>
                                                    </select>
                                                    <input type="submit" value="Download" class="btn-primary1 float-right" style="color: #fff">
                                                </form>
                                            </div>
                                        </div>
                                    @endif


                                @endif
                            </div>
                        @endif

                        <br><br>


                    </div>


                </div>
            </div>
        </div>
        <div class="main3">

        </div>
    </div>


@endsection
