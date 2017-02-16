@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="/order">Orders Index</a></li>
            </ol>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Orders Index</h5>
                    </div>
                    <div class="col-md-offset-6 col-md-2">
                        @if(Auth::user()->role != 'employee')
                            <a class="btn btn-sm btn-success pull-right" href="/order/add">
                                <span class="glyphicon glyphicon-plus"></span>
                                Add New Order
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <table class="table table-responsive table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        @if(Auth::user()->role != 'customer')
                            <th>Customer</th>
                            <th>Employee</th>
                        @endif
                        <th>Pizza</th>
                        <th>Order Date</th>
                        <th>Price</th>
                        @if(Auth::user()->role != 'employee')
                            <th>Actions</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            @if(Auth::user()->role != 'customer')
                                <td>{{$order->customer()->first()->firstname}} {{$order->customer()->first()->lastname}}</td>
                                <td>{{isset($order->employee()->first()->firstname)?$order->employee()->first()->firstname:''}} {{isset($order->employee()->first()->lastname)?$order->employee()->first()->lastname:''}}</td>
                            @endif
                            <td>{{$order->pizza()->first()->name or ''}}</td>
                            <td>{{date("d/m/Y H:i:s", strtotime($order->created_at))}}</td>
                            <td>{{$order->price}}</td>
                            @if(Auth::user()->role != 'employee')
                            <td>
                                <a href="/order/edit/{{$order->id}}" class="btn btn-sm btn-primary">
                                    Edit
                                </a>
                                <a href="/order/delete/{{$order->id}}" class="btn btn-sm btn-danger">
                                    Delete
                                </a>
                            </td>
                            @endif
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