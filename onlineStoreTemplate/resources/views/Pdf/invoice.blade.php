<html>
<head>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }/*
        table, th, td {
            border: 1px solid black;
            border-spacing: 10px;
            border-collapse: separate;
        }*/

    </style>
    <title></title>
</head>
<body onload="setPrice()">

<table  >
    <tbody>
    <tr>
        <td width="335" valign="top">
            <p>
                <img
                    width="400"
                    height="129"
                    src="logo/logo.png"
                />
            </p>
        </td>
        <td width="337" valign="top">
            <br clear="ALL"/>
            <h2>
                INVOICE
            </h2>
            <p>
                Invoice # {{$pay->id}}
            </p>
            <p>
                Date: {{$pay->created_at->toDateString()}}
            </p>
            <p>
                ABN: 45645554605
            </p>
        </td>
    </tr>
    <tr>
        <td width="335" valign="top">
            <p style="font-weight: bold">
                Ship To: {{ Auth::user()->name }}
            </p>
            <p>
                Email: {{ Auth::user()->email}}
            </p>
            <p>
                @if( Auth::user()->role == 1 )
                    Company Name: {{$pay->company->name}}
                @endif
            </p>

            <p>
                Phone: +61 {{ Auth::user()->phoneNumber }}
            </p>
        </td>
        <td width="337" valign="top">
        </td>
    </tr>
    </tbody>
</table>
<table  >
    <tbody>
    <tr>
        <td width="672" valign="top">
            <p>
                <br/>
            </p>
        </td>
    </tr>
    </tbody>
</table>
<hr color="black">
<table  >
    <tbody>
    <tr >
        <td width="453">
            <h4>
                DESCRIPTION
            </h4>
        </td>
        <td width="123">
            <h4>
                Price <small>[AUD]</small>
            </h4>
        </td>
    </tr>
    <tr>
        <td width="453">
            <p>
                {{$pay->package}}
            </p>
        </td>
        <td width="123">
            <p id="price" >
                @foreach(\App\Models\Packages::all() as $a)
                    @if($a->title == $pay->package)
                        {{$a->price}}
                    @endif

                @endforeach
            </p>
        </td>

    </tr>
    @if($pay->status == 'sponsorship')
    <tr>
        <td width="453">
            <p>
                30 Days Sponsorship
            </p>
        </td>
        <td width="123">
            <p id="price" >
                99
            </p>
        </td>


    </tr>
    @endif

    </tbody>
</table>
<table  >
    <tbody>
    <tr>
        <td width="453" valign="top">
            <p>
                SHIPPING HANDLING
            </p>
        </td>
        <td width="123" valign="top">
            <p id="shipping">
                0
            </p>
        </td>
    </tr>
    <tr>

        <td width="351" valign="top">
            <p>
                <strong>TOTAL</strong>
            </p>
        </td>
        <td width="123" valign="top">
            <p id="total">

            </p>
            <script>
                function setPrice(){
                    var total = document.getElementById('total');
                    var shipping = parseInt( document.getElementById('shipping').innerHTML);
                    var price = parseInt( document.getElementById('price').innerHTML);

                    price = shipping + price;
                    total.innerHTML = String(price) ;
                }

            </script>
        </td>
    </tr>

    </tbody>
</table>
<br/>
<hr color="black">
<br/>
<p>
    <br clear="all"/>
    Make all checks payable to Company Name
</p>
<p>
    If you have any questions concerning this invoice, contact Name, Phone,
    Email
</p>
<p style="text-align: center; font-weight: bold;">
    thank you for choosing Oz property market
</p>


</body>
</html>
