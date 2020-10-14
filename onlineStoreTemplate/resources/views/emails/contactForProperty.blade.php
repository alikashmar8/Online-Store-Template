@component('mail::message')
    # A user is trying to contact your for a property:

    User ID: {{ $data['userId'] }}

    User Name: {{ $data['userName'] }}

    User Email: {{ $data['userEmail'] }}

    Property ID: {{ $data['propertyId'] }}

    Message: {{ $data['message'] }}


    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
