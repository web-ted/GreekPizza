@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="/customer">Customers Index</a></li>
                <li class="active"><a href="/customer/edit/{{$customer->id}}">Edit</a></li>
                <li class="active">{{$customer->firstname}} {{$customer->lastname}}</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-10 col-lg-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div>
                            <div>
                                <h5>Customer Properties Edit</h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="/customer/update/{{$customer->id}}" method="post" class="form">
                            <div class="row">
                                <div class="col-lg-6">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="customer_first_name">First Name*</label>
                                        <input type="text" id="customer_first_name" name="firstname" value="{{$customer->firstname}}" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_last_name">Last Name*</label>
                                        <input type="text" id="customer_last_name" name="lastname" value="{{$customer->lastname}}" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="employee_birth_date">Birth Date</label>
                                        <input type="date" id="customer_birth_date" name="birth_date" value="{{$customer->birth_date}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_phone">Phone*</label>
                                        <input type="text" required id="customer_phone" name="phone" value="{{$customer->phone}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_mobile_phone">Mobile Phone</label>
                                        <input type="text" id="customer_mobile_phone" name="mobile_phone" value="{{$customer->mobile_phone}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_nickname">Nickname</label>
                                        <input type="text" id="customer_nickname" name="nickname" value="{{$customer->nickname}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="customer_address">Address</label>
                                        <input type="text" id="customer_address" name="address" value="{{$customer->address}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_city">City</label>
                                        <input type="text" id="customer_city" name="city" value="{{$customer->city}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_region">Region</label>
                                        <input type="text" id="customer_region" name="region" value="{{$customer->region}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_postalcode">Postal Code</label>
                                        <input type="text" id="customer_postalcode" name="postalcode" value="{{$customer->postalcode}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_country">Country</label>
                                        <input type="text" id="customer_country" name="country" value="{{$customer->country}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="customer_email_address">E-mail Address*</label>
                                <input type="email" required id="customer_email_address" name="email" value="{{$customer->email}}" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="customer_password">Password*</label>
                                <input type="password" required id="customer_password" name="password" value="{{$customer->password}}" class="form-control">
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