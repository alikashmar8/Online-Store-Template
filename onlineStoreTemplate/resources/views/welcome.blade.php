@extends('layouts.app')

@section('content')

    @if(\Illuminate\Support\Facades\Auth::guest() || (!\Illuminate\Support\Facades\Auth::guest() && \Illuminate\Support\Facades\Auth::user()->role != 0))
        {{--        if user guest or not admin --}}
        <div class="hero"
             style=" height: 600px; background-image: url(https://webside.xyz/MK/hackathon/imagaga123/images1/home.jpg); background-position: 50% 40%;">


            <div class="inner " style="text-align: left;">


                <div class="search-form-container">
                    <form class="form " action="/search-properties" method="GET">
                        <div class="search-bar-section">
                            <h1>Search for a property</h1>

                        </div>

                        <div class="search-bar-section">

                            @foreach($categories as $category)
                                <div class="search-bar-nav ">

                                    <label for="{{ $category->id }}"
                                           id="{{  Str::lower($category->title) }}-label">{{ $category->title }}</label>
                                    <input type="radio" class="search-bar-nav-remove" name="category"
                                           value="{{$category->id}}" id="{{ $category->id }}"
                                           onclick="{{  Str::lower($category->title) }}_clicked();"
                                           @if($category->id == 1) checked @endif >

                                </div>
                            @endforeach
                            {{--                            <div class="search-bar-nav ">--}}

                            {{--                                <label for="1" id="buy-label"> Buy</label>--}}
                            {{--                                <input type="radio" class="search-bar-nav-remove" name="category" value="1" id="1"   onclick="buy_clicked();" checked >--}}

                            {{--                            </div>--}}
                            {{--                            <div class="search-bar-nav ">--}}

                            {{--                                <label for="2" id="rent-label"> Rent</label>--}}
                            {{--                                <input type="radio" class="search-bar-nav-remove" name="category" value="2"  id="2" onclick="rent_clicked();"  >--}}

                            {{--                            </div>--}}
                            {{--                            <div class="search-bar-nav ">--}}

                            {{--                                <label for="3" id="share-label"> Share</label>--}}
                            {{--                                <input type="radio" class="search-bar-nav-remove" name="category" value="3"  id="3" onclick="share_clicked();"  >--}}

                            {{--                            </div>--}}

                        </div>

                        <div class="search-bar-section">

                            <input class="location1" type="search" placeholder="Search by Location" {{--name="address"--}} name="location"
                                   onFocus="initializeAutocomplete()" id="locality" >


                            <button type="submit"   class="btn-primary1 submit">Search
                            </button>




                        </div>

                        <div class="search-bar-section">
                            <div style="width: 100%">
                            <select name="type">
                                <option class="option" name="type" value=-1>Property type</option>
                                @foreach($types as $type)
                                    <option class="option" name="type" value="{{ $type->id }}"
                                            id="{{ $type->id }}">{{ $type->title }}</option>

                                @endforeach
                            </select>


                            <select name="bedroomsNumber">
                                <option class="option" value="-1">Beds</option>
                                <option class="option" value="1">1</option>
                                <option class="option" value="2">2</option>
                                <option class="option" value="3">3</option>
                                <option class="option" value="4">4</option>
                                <option class="option" value="5">5+</option>
                            </select>
                            <select id="min-price" name="minPrice">

                                <option class="option" name="100" value="0">Min Price</option>
                                <option class="option" name="100" value="500000">$500,000</option>
                                <option class="option" name="100" value="750000">$ 750,000</option>
                                <option class="option" name="100" value="1000000">$ 1,000,000</option>
                                <option class="option" name="100" value="1500000">$ 1,500,000</option>
                                <option class="option" name="100" value="2000000">$ 2,000,000</option>

                            </select>
                            <select id="max-price" name="maxPrice">
                                <option class='option' name="100" value="1000000000">Max Price</option>
                                <option class='option' name="100" value="2000000">$ 2,000,000</option>
                                <option class='option' name="100" value="5000000">$ 5,000,000</option>
                                <option class='option' name="100" value="10000000">$ 10,000,000</option>
                                <option class='option' name="100" value="12000000">$ 12,000,000</option>
                                <option class='option' name="100" value="15000000">$ 15,000,000</option>

                            </select>
                            </div>
                        </div>

                    </form>



                </div>


        </div>
    </div>

        <div class="main1">


            <div>
                <h1>
                    <i class="fas fa-laptop-house"></i>
                </h1>
                <p>
                    Get an online access to buy, sell, and rent property

                </p>
            </div>
            <div>
                <h1>
                    <i class="fas fa-money-check-alt"></i>
                </h1>
                <p>
                    Save money and time in achieving your goals
                </p>
            </div>
            <div>
                <h1>
                    <i class="fas fa-house-user"></i>
                </h1>
                <p>
                    Track your property to monitor local sales
                </p>
            </div>

        </div>

        @include('layouts.slider')

        <div class="main-content">

            <div class="main2">
                <div class="container p-4">
                    <h1>
                        Welcome to OZ Property Market
                    </h1>
                    <p>

                        <BR/>Want to sell your property without wasting $$$ on agents?
                        <BR/>Oz Property Market the Agent will enable you to do just that. Simply sign up, list your property and connect with buyers directly yourself. With our one-off fixed price packages, you can customise and pay for the package that you want!
                        <BR/>Get listed on the sites you need to be on, including <a href="http://realestate.com.au/" target="_blank"  class="special-link" style="color: #e4002b ; padding: 0">realestate.com.au</a> & <a href="http://domain.com.au/" target="_blank" class="special-link" style="color: #e4002b ; padding: 0"> domain.com.au</a>. There are no hidden charges, management fees or additional costs. Save on agent’s commission by selling your own property!

                    </p>
                </div>
                <BR/> <BR/> <BR/>
                <div class="container p-4">
                    <h1>
                        About Oz Property Market
                    </h1>
                    <p>

                        <BR/>Oz Property Market the Agent lists you on all the property websites you need to be on,<a href="http://realestate.com.au/" target="_blank"  class="special-link" style="color: #e4002b ; padding: 0">realestate.com.au</a>, <a href="http://domain.com.au/" target="_blank" class="special-link" style="color: #e4002b ; padding: 0"> domain.com.au</a>, <a href="http://realcommercial.com.au/" target="_blank" class="special-link" style="color: #e4002b ; padding: 0"> realcommercial.com.au</a>  & many more. Best part is it all comes with no hidden costs or commissions.
                        <BR/>At Oz Property Market we believe that ownership is associated with freedom of choice. It’s your property – so you choose. You retain complete control over your listing, enabling you to accurately represent it how you desire, lend a personal touch to your property description and adjust your price according to what you want. What’s more, with our all inclusive and straight to the point packages you decide for yourself which services you need and pay only for those services.
                        <BR/>Our selection of packages aims to give you the most essential tools for the best and quickest outcome for your property. Most importantly, we have the means to ensure your property is listed on Australia’s highest-traffic and most-trusted real estate listing websites. These sites are not otherwise directly accessible for property owners acting without an agent, making OPM the route to getting listed without paying the commission fee’s. Other services include “For Sale boards”, marketing brochures, property market reports and professional advice for property-owners.
                        <BR/>And perhaps most significantly, we offer you these services completely commission-free. That’s the way it should be. By retaining ultimate control over and responsibility for your property listing, you’ve essentially become your own real estate agent! With 88% of property buyers and renters turning to the internet for research purposes, our internet-focused publicity strategy offers maximum visibility at minimum cost. So grab your real estate agent toolbox from Oz Property Market the Agent and get to work.

                    </p>
                </div>


            </div>
            <div class="main3">

            </div>
        </div>
    @else

    @if(\Illuminate\Support\Facades\Auth::user()->role == 0)
                    {{--            admin home page--}}

        <div class="hero" style=" height: 600px; background-image: url(https://www.webside.xyz/MK/img/m1.jpg); background-position: 50% 40%;">

        </div>
                    <div class="row container py-0" style="margin: auto">

                        <div class="col-md-1">  </div>

                        <div class="col-md-5 bg-white p-2 m-0">
                            <h2>Apartments waiting for confirmation = {{ count($notAcceptedProperties) }}</h2>
                            <a href="/acceptProperties">Check Now</a>
                        </div>

                        <div class="col-md-1"></div>

                        <div class="col-md-5 bg-white p-2 m-0">
                            <h2>New User Last 24 Hrs: {{ count($recentUsers) }}</h2>
                            <a href="/users">See Users</a>

                        </div>

                    </div>
                @endif

            @endif

    <script>
        function buy_clicked(){
            document.getElementById("buy-label").style.background="#e4002b";
            document.getElementById("rent-label").style.background="#91969c";
            document.getElementById("share-label").style.background="#91969c";


            document.getElementById("min-price").innerHTML = "<option class='option' name='100' value='0'>Min Price</option><option class='option' name='100' value='500000'>$500,000</option><option class='option' name='100' value='750000'>$ 750,000</option><option class='option' name='100' value='1000000'>$ 1,000,000</option><option class='option' name='100' value='1500000'>$ 1,500,000</option><option class='option' name='100' value='2000000'>$ 2,000,000</option>";
            document.getElementById("max-price").innerHTML = "<option class='option' name='100' value='1000000000'>Max Price</option><option class='option' name='100' value='2000000'>$ 2,000,000</option><option class='option' name='100' value='5000000'>$ 5,000,000</option><option class='option' name='100' value='10000000'>$ 10,000,000</option><option class='option' name='100' value='12000000'>$ 12,000,000</option><option class='option' name='100' value='15000000'>$ 15,000,000</option>";

        }
        function rent_clicked(){
            document.getElementById("buy-label").style.background="#91969c";
            document.getElementById("rent-label").style.background="#e4002b";
            document.getElementById("share-label").style.background="#91969c";
            document.getElementById("min-price").innerHTML = "<option class='option' name='100' value='0'>Min Price</option><option class='option' name='100' value='100'>$100</option><option class='option' name='100' value='250'>$ 250</option><option class='option' name='100' value='500'>$ 500</option><option class='option' name='100' value='1000'>$ 1,000</option><option class='option' name='100' value='2000'>$ 2,000</option>";
            document.getElementById("max-price").innerHTML = "<option class='option' name='100' value='1000000000'>Max Price</option><option class='option' name='100' value='750'>$ 750</option><option class='option' name='100' value='1000'>$ 1,000</option><option class='option' name='100' value='2000'>$ 2,000</option><option class='option' name='100' value='3000'>$ 3,000</option><option class='option' name='100' value='5000'>$ 5,000</option>";


        }
        function share_clicked(){
            document.getElementById("buy-label").style.background="#91969c";

            document.getElementById("rent-label").style.background="#91969c";
            document.getElementById("share-label").style.background="#e4002b";
            document.getElementById("min-price").innerHTML = "<option class='option' name='100' value='0'>Min Price</option><option class='option' name='100' value='100'>$100</option><option class='option' name='100' value='250'>$ 250</option><option class='option' name='100' value='500'>$ 500</option><option class='option' name='100' value='1000'>$ 1,000</option><option class='option' name='100' value='2000'>$ 2,000</option>";
            document.getElementById("max-price").innerHTML = "<option class='option' name='100' value='1000000000'>Max Price</option><option class='option' name='100' value='750'>$ 750</option><option class='option' name='100' value='1000'>$ 1,000</option><option class='option' name='100' value='2000'>$ 2,000</option><option class='option' name='100' value='3000'>$ 3,000</option><option class='option' name='100' value='5000'>$ 5,000</option>";


        }
    </script>

    {{--scripts for google locations--}}
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1CbPQ2HCLV38r9m68B8VCv51JBVke5TM&callback=initAutocomplete&libraries=places&v=weekly"
    defer
></script>
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
        });
    }
</script>
@endsection
