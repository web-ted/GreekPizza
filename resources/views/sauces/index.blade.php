@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="/sauce">Sauces Index</a></li>
            </ol>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Sauces Index</h5>
                    </div>
                    <div class="col-md-offset-6 col-md-2">
                        <a class="btn btn-sm btn-success pull-right" href="/sauce/add">
                            <span class="glyphicon glyphicon-plus"></span>
                            Add New Sauce
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
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($sauces as $sauce)
                            <tr>
                                <td>{{$sauce->id}}</td>
                                <td>{{$sauce->name}}</td>
                                <td>{{$sauce->price}} &euro;</td>
                                <td>
                                    <a href="/sauce/edit/{{$sauce->id}}" class="btn btn-sm btn-primary">
                                        Edit
                                    </a>
                                    <a href="/sauce/delete/{{$sauce->id}}" class="btn btn-sm btn-danger">
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