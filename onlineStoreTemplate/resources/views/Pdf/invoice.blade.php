<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <style>
        .page-break {
            page-break-after: always;
        }

    </style>
</head>
<body>

    <div class="page-break">
        <div style="width: 100%; padding: 100px;">
            <img src="https://cdn3.vectorstock.com/i/1000x1000/60/87/home-logo-vector-23096087.jpg" style="max-width: 250px">
            <h1> RECEIPT </h1>

        </div>
        <div class="my-5" style="width: 100%; padding: 100px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                        <div class="card card-signin my-5">

                            <div class="card-header">Membership Registion</div>

                            <div class="card-body">
                                <p class="card-title">{{$pay->package}}</p>
                                <table class="table">
                                    <tr>
                                        <td>
                                            Total <small> AUD</small>
                                        </td>
                                        <td>
                                            <a >{{$pay->amount}} $</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <b>Date</b>
                                        </td>
                                        <td>
                                            <b >{{$pay->created_at}}</b>
                                        </td>
                                    </tr>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</body>
</html>
