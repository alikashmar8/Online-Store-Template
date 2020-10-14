@component('mail::message')

    # Please evaluate this property.


    <h3>Contact Details:</h3>
    <p>Sender: {!!  $data['name'] !!}  </p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Phone Number: {{ $data['phoneNumberCode'] }}-{{ $data['phoneNumber'] }}</p>

    <H3>Property Details</H3>
    <p>Location: {{ $data['location'] }}</p>
     <p style="white-space: pre-line ">Description: {{ $data['description'] }}</p>
    <p>Number Of Bedrooms: {{ $data['bedroomsNumber'] }}</p>
    <p>Owner? {{ $data['owner'] }}</p>


    Thanks,<br>
    {{ config('app.name') }}


@endcomponent
