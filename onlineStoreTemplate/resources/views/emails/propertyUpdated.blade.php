@component('mail::message')
    # Notice!

    A property was updated

    @component('mail::button', ['url' => URL::to('/acceptProperties')])
        Check It
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
