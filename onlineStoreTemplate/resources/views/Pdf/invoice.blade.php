<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .page-break {
            page-break-after: always;
        }

    </style>
</head>
<body>

    <div class="page-break">
        <div style="width: 100%; padding-left: 80px; ">
            <img src="https://cdn3.vectorstock.com/i/1000x1000/60/87/home-logo-vector-23096087.jpg" style="max-width: 250px">
            <h1> RECEIPT </h1>
            <hr color="black"/>
            <p> <b>Invoice #:</b> {{$pay->id}} </p>
            <p> <b>Date:</b> {{$pay->created_at}} </p>
            <hr/>


        </div>
        <div class="my-5" style="width: 100%; padding-left: 80px; margin-top: 50px">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                        <div class="card card-signin my-5">

                            <div class="card-header"><h1>Membership Registion</h1></div>
                            <hr/>


                            <div class="row">
                                <h2 class="card-title">{{$pay->package}}</h2>

                                <table class="table">
                                    <tr>
                                        <td>
                                            Amount <small> AUD</small>
                                        </td>
                                        <td>
                                            <a >{{$pay->amount}} $</a>
                                        </td>
                                    </tr>



                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="my-5" style="width: 100%; padding-left: 80px; margin-top: 50px">
            <div class="container">
                <hr/>
                <h2>Oz Property market</h2>
                <p> ABN: 123456</p>
                <p></p>
            </div>
        </div>
    </div>


</body>
</html>
