@component('mail::message')
# New Patient Form Received

The patient details are as follows:

First name: {{ $patient->first_name }}<br>
Last name: {{ $patient->last_name }}<br>
Email address: {{ $patient->email }}<br>
Address: {{ $patient->address }}<br>
Phone number: {{ $patient->phone_number }}<br>
Date of birth: {{ $patient->date_of_birth }}<br>
Past history: {{ $patient->past_history }}<br>

@endcomponent




