@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form method="POST" action="{{ url('/register') }}" class="form">
                        <div class="row">
                            <div class="col-lg-6">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : ''}}">
                                    <label for="customer_first_name">First Name*</label>
                                    <input type="text" id="customer_first_name" name="firstname" value="{{ old('firstname') }}" required class="form-control">
                                    @if ($errors->has('firstname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : ''}}">
                                    <label for="customer_last_name">Last Name*</label>
                                    <input type="text" id="customer_last_name" name="lastname" value="{{ old('lastname') }}"required class="form-control">
                                    @if ($errors->has('lastname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : ''}}">
                                    <label for="customer_phone">Phone*</label>
                                    <input type="text" required id="customer_phone" name="phone" value="{{ old('phone') }}" class="form-control">
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('mobile_phone') ? ' has-error' : ''}}">
                                    <label for="customer_mobile_phone">Mobile Phone</label>
                                    <input type="text" id="customer_mobile_phone" name="mobile_phone" value="{{ old('mobile_phone') }}" class="form-control">
                                    @if ($errors->has('mobile_phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('mobile_phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('nickname') ? ' has-error' : ''}}">
                                    <label for="customer_nickname">Nickname</label>
                                    <input type="text" id="customer_nickname" name="nickname" value="{{ old('nickname') }}" class="form-control">
                                    @if ($errors->has('nickname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nickname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group{{ $errors->has('address') ? ' has-error' : ''}}">
                                    <label for="customer_address">Address</label>
                                    <input type="text" id="customer_address" name="address" value="{{ old('address') }}" class="form-control">
                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('city') ? ' has-error' : ''}}">
                                    <label for="customer_city">City</label>
                                    <input type="text" id="customer_city" name="city" value="{{ old('city') }}" class="form-control">
                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('region') ? ' has-error' : ''}}">
                                    <label for="customer_region">Region</label>
                                    <input type="text" id="customer_region" name="region" value="{{ old('region') }}" class="form-control">
                                    @if ($errors->has('region'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('region') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('postalcode') ? ' has-error' : ''}}">
                                    <label for="customer_postalcode">Postal Code</label>
                                    <input type="text" id="customer_postalcode" name="postalcode" value="{{ old('postalcode') }}" class="form-control">
                                    @if ($errors->has('postalcode'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('postalcode') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('country') ? ' has-error' : ''}}">
                                    <label for="customer_country">Country</label>
                                    <input type="text" id="customer_country" name="country" value="{{ old('country') }}" class="form-control">
                                    @if ($errors->has('country'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('country') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
                            <label for="customer_email_address">E-mail Address*</label>
                            <input type="email" required id="customer_email_address" name="email" value="{{ old('email') }}" required class="form-control">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : ''}}">
                            <label for="customer_password">Password*</label>
                            <input type="password" required id="customer_password" name="password" class="form-control">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password*</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                        <div class="form-group">
                            <input type="reset" value="Reset Form" class="btn btn-info">
                            <input type="submit" value="Save" class="btn btn-primary">
                        </div>
                    </form>
                    {{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                            {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

                                {{--@if ($errors->has('name'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Register--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
