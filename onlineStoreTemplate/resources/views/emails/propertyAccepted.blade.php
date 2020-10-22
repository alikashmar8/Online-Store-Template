
    {{--@component('mail::message')--}}
    <body style="margin: 15px;background: #e4002b ; font-family: 'Roboto', sans-serif;">
    <div style="text-align: center; width: 100%; margin: auto; ">
        <img src="https://webside.xyz/MK/hackathon/imagaga123/images1/logo.png" style="max-height: 150px" >
    </div>
    <bR/>
    <div style="width: 85%; background: #fff; color: #0a0807;text-align: left;   margin: auto; padding: 20px">
        <h1> Hello From Oz Property Market, </h1>

        <p>Congratulations! <br/> We would like to inform you that your listed property has been accepted and listed on our website. <br/> Please click the link below to view your listing.</p>

        @component('mail::button', ['url' => URL::to('/properties/myProperties')])
            Browse Properties
        @endcomponent

        Thank you,<br>
        <hr>
        <h2>OZ Property Market</h2>

        <p ><small >© 2020 Real Estate, all Rights Reserved. Developed by <a href="https://webside.xyz/" target="_blank" style="color: #e4002b">WebSide</a> </small></p>

    </div>
    </body>
    {{--@endcomponent--}}



