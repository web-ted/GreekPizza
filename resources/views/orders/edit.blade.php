@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="/order">Orders</a></li>
                <li class="active">Edit</li>
                <li class="active">{{$order->name}}</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div>
                            <div>
                                <h5>Order Properties Edit</h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="/order/update/{{$order->id}}" method="post" class="form">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="form-group col-md-offset-1 col-md-6">
                                    <label for="order_name">Name*</label>
                                    <input type="text" id="order_name" name="name" required value="{{$order->name}}" class="form-control">
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="list-group col-md-3">
                                    <a href="/meat" class="list-group-item active">
                                        Meats
                                    </a>
                                    @foreach($meats as $meat)
                                        <div class="list-group-item">
                                            {{$meat->name}}
                                            <input class="pull-right" type="checkbox" name="ingredients[meat][{{$meat->name}}]" value="{{$meat->id}}" {{in_array($meat->id, $order->meats()->get()->pluck('id')->toArray())?'checked':''}}>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="list-group col-md-3">
                                    <a href="/cheese" class="list-group-item active">
                                        Cheeses
                                    </a>
                                    @foreach($cheeses as $cheese)
                                        <div class="list-group-item">
                                            {{$cheese->name}}
                                            <input class="pull-right" type="checkbox" name="ingredients[cheese][{{$cheese->name}}]" value="{{$cheese->id}}" {{in_array($cheese->id, $order->cheeses()->get()->pluck('id')->toArray())?'checked':''}}>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="list-group col-md-3">
                                    <a href="/vegetable" class="list-group-item active">
                                        Vegetables
                                    </a>
                                    @foreach($vegetables as $vegetable)
                                        <div class="list-group-item">
                                            {{$vegetable->name}}
                                            <input class="pull-right" type="checkbox" name="ingredients[vegetable][{{$vegetable->name}}]" value="{{$vegetable->id}}" {{in_array($vegetable->id, $order->vegetables()->get()->pluck('id')->toArray())?'checked':''}}>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="list-group col-md-3">
                                    <a href="/sauce" class="list-group-item active">
                                        Sauces
                                    </a>
                                    @foreach($sauces as $sauce)
                                        <div class="list-group-item">
                                            {{$sauce->name}}
                                            <input class="pull-right" type="checkbox" name="ingredients[sauce][{{$sauce->name}}]" value="{{$sauce->id}}" {{in_array($sauce->id, $order->sauces()->get()->pluck('id')->toArray())?'checked':''}}>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-offset-1 col-md-10">
                                    <input type="reset" value="Reset Form" class="btn btn-info">
                                    <input type="submit" value="Save" class="btn btn-primary">
                                </div>
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