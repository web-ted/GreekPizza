@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="/employee">Employees Index</a></li>
                <li class="active"><a href="/employee/edit/{{$employee->id}}">Edit</a></li>
                <li class="active">{{$employee->firstname}} {{$employee->lastname}}</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-10 col-lg-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div>
                            <div>
                                <h5>Employee Properties Edit</h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="/employee/update/{{$employee->id}}" method="post" class="form">
                            <div class="row">
                                <div class="col-lg-6">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="employee_first_name">First Name*</label>
                                        <input type="text" id="employee_first_name" name="firstname" value="{{$employee->firstname}}" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="employee_last_name">Last Name*</label>
                                        <input type="text" id="employee_last_name" name="lastname" value="{{$employee->lastname}}" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="employee_birth_date">Birth Date</label>
                                        <input type="date" id="employee_birth_date" name="birth_date" value="{{$employee->birth_date}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="employee_phone">Phone*</label>
                                        <input type="text" required id="employee_phone" name="phone" value="{{$employee->phone}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="employee_mobile_phone">Mobile Phone</label>
                                        <input type="text" id="employee_mobile_phone" name="mobile_phone" value="{{$employee->mobile_phone}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="employee_nickname">Nickname</label>
                                        <input type="text" id="employee_nickname" name="nickname" value="{{$employee->nickname}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="employee_address">Address</label>
                                        <input type="text" id="employee_address" name="address" value="{{$employee->address}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="employee_city">City</label>
                                        <input type="text" id="employee_city" name="city" value="{{$employee->city}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="employee_region">Region</label>
                                        <input type="text" id="employee_region" name="region" value="{{$employee->region}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="employee_postalcode">Postal Code</label>
                                        <input type="text" id="employee_postalcode" name="postalcode" value="{{$employee->postalcode}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="employee_country">Country</label>
                                        <input type="text" id="employee_country" name="country" value="{{$employee->country}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="employee_email_address">E-mail Address*</label>
                                <input type="email" required id="employee_email_address" name="email" value="{{$employee->user()->first()->email}}" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="employee_password">Password*</label>
                                <input type="password" required id="employee_password" name="password" value="" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="reset" value="Reset Form" class="btn btn-info">
                                <input type="submit" value="Save" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                        <small>Properties with a an asterisk(*) in their label are required</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection