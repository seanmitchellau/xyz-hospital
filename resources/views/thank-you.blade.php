@extends('layout')

@section('body')
    <h3>Patient Form Received</h3>

    <div class="mt-3">
        Thank-you <strong>{{ $patient->first_name }}</strong>, we have received your new patient form.
    </div>

    <div class="mt-5">
        <a href="/">Go Back</a>
    </div>
@endsection
