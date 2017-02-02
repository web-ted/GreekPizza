@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="/meat">Meats Index</a></li>
            </ol>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-2">
                        <h5>Meats Index</h5>
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
                        @foreach ($meats as $meat)
                            <tr>
                                <td>{{$meat->id}}</td>
                                <td>{{$meat->name}}</td>
                                <td>{{$meat->price}} &euro;</td>
                                <td>
                                    <a href="/meat/edit/{{$meat->id}}" class="btn btn-sm btn-primary">
                                        Edit
                                    </a>
                                    <a href="/meat/delete/{{$meat->id}}" class="btn btn-sm btn-danger">
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