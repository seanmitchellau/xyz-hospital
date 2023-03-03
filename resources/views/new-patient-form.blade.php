@extends('layout')

@section('body')
    <div>
        <h3>Please fill out the new patient form.</h3>
        <strong>
            <small>Note: All fields are required.</small>
        </strong>
    </div>

    @if ($errors->any())
        <div class="mt-3">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <form method="post" class="mt-3">
        @csrf
        <div class="mb-3">
            <label class="form-label">First name</label>
            <input type="text" class="form-control" name="first_name" required value="{{ old('first_name') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">First name</label>
            <input type="text" class="form-control" name="last_name" required value="{{ old('last_name') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" required
                   value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" name="address" required value="{{ old('address') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Phone number</label>
            <input type="text" class="form-control" name="phone_number" required
                   value="{{ old('phone_number') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Date of birth</label>
            <input type="date" class="form-control" name="date_of_birth" required
                   value="{{ old('date_of_birth') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Past history</label>
            <textarea class="form-control" name="past_history"
                      required>{{ old('past_history') }}</textarea>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="agree">
            <label class="form-check-label">I agree to the terms and conditions.</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
