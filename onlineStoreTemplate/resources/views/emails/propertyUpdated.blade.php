@component('mail::message')
    # Notice!

    A property was updated
    URL::to('/');
    @component('mail::button', ['url' => env('APP_URL').'/acceptProperties'])
        Check It
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
