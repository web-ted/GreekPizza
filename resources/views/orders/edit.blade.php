@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="/order">Orders</a></li>
                <li class="active"><a href="/order/edit/{{$order->id}}">Edit</a></li>
                <li class="active">{{$order->id}}</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div>
                            <div>
                                <h5>Order Properties Edit</h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="/order/update/{{$order->id}}" method="post" class="form">
                            {{ csrf_field() }}
                            @if(Auth::user()->role == 'admin')
                            <div class="form-group">
                                <label for="order_customer_id">Customer*</label>
                                <select class="form-control" name="customer_id" id="order_customer_id">
                                    <option value="">Select a customer...</option>
                                    @foreach($customers as $customer)
                                        <option value="{{$customer->id}}" {{($order->customer_id == $customer->id)?'selected':''}}>
                                            {{$customer->firstname}} {{$customer->lastname}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="order_employee_id">Employee*</label>
                                <select class="form-control" name="employee_id" id="order_employee_id">
                                    <option value="">Select a employee...</option>
                                    @foreach($employees as $employee)
                                        <option value="{{$employee->id}}" {{($order->employee_id == $employee->id)?'selected':''}}>
                                            {{$employee->firstname}} {{$employee->lastname}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="order_pizza_id">Pizza*</label>
                                <select class="form-control" name="pizza_id" id="order_pizza_id">
                                    <option value="">Select a pizza...</option>
                                    @foreach($pizzas as $pizza)
                                        <option value="{{$pizza->id}}" {{($order->pizza_id == $pizza->id)?'selected':''}}>
                                            {{$pizza->name}}{{($pizza->user_id!=1)?' (custom)':' (store product)'}}
                                        </option>
                                    @endforeach
                                </select>
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