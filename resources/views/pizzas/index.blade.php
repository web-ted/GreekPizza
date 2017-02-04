@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="/pizza">Pizzas Index</a></li>
            </ol>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Pizzas Index</h5>
                    </div>
                    <div class="col-md-offset-6 col-md-2">
                        <a class="btn btn-sm btn-success pull-right" href="/pizza/add">
                            <span class="glyphicon glyphicon-plus"></span>
                            Add New Pizza
                        </a>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <table class="table table-responsive table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Meats</th>
                        <th>Cheeses</th>
                        <th>Vegetables</th>
                        <th>Sauces</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($pizzas as $pizza)
                            <tr>
                                <td>{{$pizza->id}}</td>
                                <td>{{$pizza->name}}</td>
                                <td>
                                    {{$pizza->ingredients()['meats']}}
                                </td>
                                <td>
                                    {{$pizza->ingredients()['cheeses']}}
                                </td>
                                <td>
                                    {{$pizza->ingredients()['vegetables']}}
                                </td>
                                <td>
                                    {{$pizza->ingredients()['sauces']}}
                                </td>
                                <td>{{$pizza->price}} &euro;</td>
                                <td>
                                    <a href="/pizza/edit/{{$pizza->id}}" class="btn btn-sm btn-primary">
                                        Edit
                                    </a>
                                    <a href="/pizza/delete/{{$pizza->id}}" class="btn btn-sm btn-danger">
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