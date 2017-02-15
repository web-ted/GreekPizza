@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="/employee">Employees Index</a></li>
            </ol>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Employees Index</h5>
                    </div>
                    <div class="col-md-offset-6 col-md-2">
                        <a class="btn btn-sm btn-success pull-right" href="/employee/add">
                            <span class="glyphicon glyphicon-plus"></span>
                            Add New Employee
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
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{$employee->id}}</td>
                                <td>{{$employee->firstname}}</td>
                                <td>{{$employee->lastname}}</td>
                                <td>{{$employee->address}}</td>
                                <td>{{$employee->city}}</td>
{{--                                <td>{{$employee->region}}</td>--}}
{{--                                <td>{{$employee->postalcode}}</td>--}}
                                <td>{{$employee->country}}</td>
                                <td>{{$employee->phone}}</td>
{{--                                <td>{{$employee->mobile_phone}}</td>--}}
                                <td>{{$employee->nickname}}</td>
                                <td>{{$employee->user()->first()->email}}</td>
{{--                                <td>{{$employee->password}}</td>--}}

                                <td>
                                    <a href="/employee/edit/{{$employee->id}}" class="btn btn-sm btn-primary">
                                        Edit
                                    </a>
                                    <a href="/employee/delete/{{$employee->id}}" class="btn btn-sm btn-danger">
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