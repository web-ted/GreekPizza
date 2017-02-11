@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="/customer">Customers Index</a></li>
            </ol>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Customers Index</h5>
                    </div>
                    <div class="col-md-offset-6 col-md-2">
                        <a class="btn btn-sm btn-success pull-right" href="/customer/add">
                            <span class="glyphicon glyphicon-plus"></span>
                            Add New Customer
                        </a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <table class="table table-responsive table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Address</th>
                        <th>City</th>
                        {{--<th>Region</th>--}}
                        {{--<th>Postal Code</th>--}}
                        <th>Country</th>
                        <th>Phone</th>
                        {{--<th>Mobile Phone</th>--}}
                        <th>Nickname</th>
                        <th>E-mail Address</th>
                        {{--<th>Password</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td>{{$customer->id}}</td>
                                <td>{{$customer->firstname}}</td>
                                <td>{{$customer->lastname}}</td>
                                <td>{{$customer->address}}</td>
                                <td>{{$customer->city}}</td>
{{--                                <td>{{$customer->region}}</td>--}}
{{--                                <td>{{$customer->postalcode}}</td>--}}
                                <td>{{$customer->country}}</td>
                                <td>{{$customer->phone}}</td>
{{--                                <td>{{$customer->mobile_phone}}</td>--}}
                                <td>{{$customer->nickname}}</td>
                                <td>{{$customer->email}}</td>
{{--                                <td>{{$customer->password}}</td>--}}

                                <td>
                                    <a href="/customer/edit/{{$customer->id}}" class="btn btn-sm btn-primary">
                                        Edit
                                    </a>
                                    <a href="/customer/delete/{{$customer->id}}" class="btn btn-sm btn-danger">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            <div class="panel-footer">
                <div class="row">

                </div>
            </div>
        </div>
    </div>
@endsection