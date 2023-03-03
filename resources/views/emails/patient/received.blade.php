@component('mail::message')
    # Form Received

    Thank-you {{ $patient->first_name }}, your new patient form has been received.

    Regards,
    {{ config('app.name') }}
@endcomponent
