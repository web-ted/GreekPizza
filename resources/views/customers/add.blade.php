@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="/customer">Customers Index</a></li>
                <li class="active"><a href="/customer/add">Add</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-10 col-lg-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div>
                            <div>
                                <h5>New Customer Properties</h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="/customer/create" method="post" class="form">
                            <div class="row">
                                <div class="col-lg-6">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="customer_first_name">First Name*</label>
                                        <input type="text" id="customer_first_name" name="firstname" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_last_name">Last Name*</label>
                                        <input type="text" id="customer_last_name" name="lastname" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_phone">Phone*</label>
                                        <input type="text" required id="customer_phone" name="phone" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_mobile_phone">Mobile Phone</label>
                                        <input type="text" id="customer_mobile_phone" name="mobile_phone" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_nickname">Nickname</label>
                                        <input type="text" id="customer_nickname" name="nickname" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="customer_address">Address</label>
                                        <input type="text" id="customer_address" name="address" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_city">City</label>
                                        <input type="text" id="customer_city" name="city" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_region">Region</label>
                                        <input type="text" id="customer_region" name="region" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_postalcode">Postal Code</label>
                                        <input type="text" id="customer_postalcode" name="postalcode" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_country">Country</label>
                                        <input type="text" id="customer_country" name="country" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="customer_email_address">E-mail Address*</label>
                                <input type="email" required id="customer_email_address" name="email" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="customer_password">Password*</label>
                                <input type="password" required id="customer_password" name="password" class="form-control">
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