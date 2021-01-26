
<html>

<head>
    <title></title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }/*
        table, th, td {
            border: 1px solid black;
            border-spacing: 10px;
            border-collapse: separate;
            max-width: 100%;
        }
        img{
            max-width: 100%;
        }*/
    </style>

</head>
<body style="margin: 0">

<table  style="margin: 0 ; width: 100%;"> >
   <tr style="height:10%; width: 100%;" >
       <td style="height:10%; width: 100%;padding: 10px; margin: 0px; background: #e4002b; color: white; ">
           <h1>{{$property->locationDescription}}</h1>
           <p class="float-right" style="text-align: right"> $ {{$property->price}} <small>AUD</small></p>
       </td>
   </tr>

    <tr class="my-3" style="height: 50%;width: 100%">
        <td style="width: 100%">
            <br/><br/>
            @if(count($property->images)>0)

                @foreach($property->images as $image )
                    @if(pathinfo($image->url, PATHINFO_EXTENSION) !='mp4')
                        <img class="d-block w-100"
                             style=" width: 30% ; display: inline-block"
                             src="storage/properties_images/{{$image->url}}"
                             alt="No Image">
                    @endif

                @endforeach


            @endif
        </td>

    </tr>

    <tr style="height: 40%;">
        <td style="width: 60%">
            <p style="white-space: pre-line">{{$property->description}}</p>

            <br/><br/>

            <p style="font-size: 22px">
                {{$property->bedroomsNumber}} <img src="logo/bed.png" style="width: 30px">&nbsp;&nbsp;&nbsp;
                {{$property->bathroomsNumber}} <img src="logo/bath.png" style="width: 30px">&nbsp;&nbsp;&nbsp;
                {{$property->parkingNumber}} <img src="logo/car.png" style="width: 30px"&nbsp;
                | {{ \App\Models\PropertyType::findOrFail($property->typeId)->title }}
            </p>
        </td>
        <td style="width: 40%">
            <img src="logo/logo2.png"  style="width :80%; vertical-align: bottom">
        </td>
    </tr>
</table>
<br/><br/>

<p style="text-align: center; font-weight: bold;">
    thank you for choosing Oz property market
</p>


</body>
</html>
