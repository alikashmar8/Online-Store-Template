@component('mail::message')
    # Notice!

    New Property is Added!
    @component('mail::button', ['url' => URL::to('/acceptProperties')])
        Check It
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
