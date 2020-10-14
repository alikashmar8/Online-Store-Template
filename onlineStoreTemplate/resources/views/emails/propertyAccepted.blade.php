@component('mail::message')
    # Hello Form Oz Property Market,

    We would like to inform you that your listed property was accepted and listed on our website.

    @component('mail::button', ['url' => URL::to('/')])
        Browse Properties
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
