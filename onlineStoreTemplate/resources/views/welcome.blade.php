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
                            <input class="location1" type="search" name="location"
                                   hint="Search by location" placeholder="Search by location">


                            <button type="submit"   class="btn-primary1 submit">Search
                            </button>
                        </div>

                        <div class="search-bar-section">

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
                    Get an online access to buy, sell, and rent prop

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
        <div class="main-content">
            <div class="main2">
                <div class="container p-4">
                    <h1>
                        Welcome Text
                    </h1>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                    </p>
                </div>
                <div class="container p-4">
                    <h1>
                        about us
                    </h1>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                    </p>
                </div>
                <div class="container p-4">
                    <h1>
                        contact us
                    </h1>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

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

@endsection
