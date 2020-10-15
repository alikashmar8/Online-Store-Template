@component('mail::message')
    # A user is contacting your regarding your property:



    User Name: {{ $data['userName'] }}

    User Email: {{ $data['userEmail'] }}

    Property ID: {{ $data['propertyId'] }}

    Message: {{ $data['message'] }}


    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
