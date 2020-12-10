@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">

                    <div class="card-header">Membership Registion</div>

                    <div class="card-body">
                        <p class="card-title">{{$pack->title}}</p>
                        <table class="table">
                            <tr>
                                <td>
                                    Price
                                </td>
                                <td>
                                    <a id="price">{{$pack->price}}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tax
                                </td>
                                <td>
                                    9.5%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Total</b>
                                </td>
                                <td>
                                    <b id="total"></b>
                                </td>
                            </tr>

                            <form action="{{ route('storePayment') }}" method="post">
                                @csrf
                                <tr >
                                    <td colspan="2">

                                        <input type="radio" name="payment_method" value="paypal" id="paypal" checked>
                                        <label for="paypal">Paypal</label><br>
                                        <input type="radio" name="payment_method" value="stripe" id="stripe">
                                        <label for="stripe">Stripe</label><br>
                                        <input type="radio" name="payment_method" value="Bank" id="Bank">
                                        <label for="Bank">Bank Account</label><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <center>

                                                <input type="hidden" value="{{$pack->title}}" name="package">

                                                <input type="hidden" value="{{$pack->price}}" name="amount">
                                                <input type="submit" value="Pay now">


                                        </center>
                                    </td>
                                </tr>
                            </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var x =  parseInt(document.getElementById('price').innerHTML);
        x += x * 0.095;
        x = x.toFixed(2)
        document.getElementById('total').innerHTML =x;
    </script>
@endsection
