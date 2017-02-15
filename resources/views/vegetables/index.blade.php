@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="/vegetable">Vegetables Index</a></li>
            </ol>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Vegetables Index</h5>
                    </div>
                    <div class="col-md-offset-6 col-md-2">
                        <a class="btn btn-sm btn-success pull-right" href="/vegetable/add">
                            <span class="glyphicon glyphicon-plus"></span>
                            Add New Vegetable
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
                        @if(Auth::user()->role == 'admin')
                        <th>Actions</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($vegetables as $vegetable)
                            <tr>
                                <td>{{$vegetable->id}}</td>
                                <td>{{$vegetable->name}}</td>
                                <td>{{$vegetable->price}} &euro;</td>
                                @if(Auth::user()->role == 'admin')
                                <td>
                                    <a href="/vegetable/edit/{{$vegetable->id}}" class="btn btn-sm btn-primary">
                                        Edit
                                    </a>
                                    <a href="/vegetable/delete/{{$vegetable->id}}" class="btn btn-sm btn-danger">
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