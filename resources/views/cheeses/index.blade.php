@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="/cheese">Cheeses Index</a></li>
            </ol>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Cheeses Index</h5>
                    </div>
                    <div class="col-md-offset-6 col-md-2">
                        <a class="btn btn-sm btn-success pull-right" href="/meat/add">
                            <span class="glyphicon glyphicon-plus"></span>
                            Add New Cheese
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
                        @foreach ($cheeses as $cheese)
                            <tr>
                                <td>{{$cheese->id}}</td>
                                <td>{{$cheese->name}}</td>
                                <td>{{$cheese->price}} &euro;</td>
                                <td>
                                    <a href="/cheese/edit/{{$cheese->id}}" class="btn btn-sm btn-primary">
                                        Edit
                                    </a>
                                    <a href="/cheese/delete/{{$cheese->id}}" class="btn btn-sm btn-danger">
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