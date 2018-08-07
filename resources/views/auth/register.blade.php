@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="firstname" id="firstname" tabindex="1" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Middle name</label>
                            <input type="text" name="middlename" id="mname" tabindex="1" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Surname</label>
                            <input type="text" name="surname" id="sname" tabindex="1" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Date of Brith</label>
                            <input type="date" name="dob" id="dob" id="datepicker" class="date form-control"
                                   datepicker="true" datepicker_format="DD-MM-YYYY" required>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" id="email" tabindex="1" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="text" name="phone" id="phone" tabindex="2" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Screening Location</label>
                            <select name="location_id" id="phone" class="form-control" placeholder="Choose a Screening Location" required>
                                <option>Choose a Screening Location</option>
                                @foreach($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-6 col-sm-offset-3">--}}
                                    {{--<button type="submit" class="form-control btn btn-primary">Register Now</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                            {{--<label for="name" class="col-md-4 col-form-label text-md-right">First Name</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? '--}}
                                {{--is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>--}}

                                {{--@if ($errors->has('firstname'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('firstname') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                            {{--<label for="name" class="col-md-4 col-form-label text-md-right">Middle Name</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="middlename" type="text" class="form-control{{ $errors->has('middlename') ? '--}}
                                {{--is-invalid' : '' }}" name="middlename" value="{{ old('middlename') }}" required autofocus>--}}

                                {{--@if ($errors->has('middlename'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('middlename') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div><div class="form-group row">--}}
                            {{--<label for="name" class="col-md-4 col-form-label text-md-right">Surname</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="surname" type="text" class="form-control{{ $errors->has('surname') ? '--}}
                                {{--is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus>--}}

                                {{--@if ($errors->has('surname'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('surname') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                            {{--<label for="password" class="col-md-4 col-form-label text-md-right">Date of Birth</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="dob" type="text" class="form-control{{ $errors->has('password') ?--}}
                                 {{--' is-invalid' : '' }}" name="dob" required>--}}
                                {{--@if ($errors->has('dob'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('dob') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                            {{--<label for="phone" class="col-md-4 col-form-label text-md-right">Phone Number</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="phone" type="text" class="form-control" name="password_confirmation"--}}
                                       {{--required>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
