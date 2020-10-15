@component('mail::message')
    # Your new listing on OZ Market POroperty

    Hello,
    Thank you for adding a new listing to OZ Market POroperty Platform. Your listing needs to be approved by the admin before displaying it.
    We will inform you once it is successfully listed,


    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
