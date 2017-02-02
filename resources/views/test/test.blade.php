@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Orders</li>
                <li class="active">Index</li>
            </ol>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-2">
                        <h5>Customers Index</h5>
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
                                    <a href="/meat/edit/{{$meat->id}}" data-toggle="modal" data-target="#editMember" class="btn btn-sm btn-primary">
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

    <!-- Edit Worker Modal -->
    <div class="modal fade" id="editMember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    Edit Meat Record
                </div>
                <div class="modal-body">
                    <form target="/meat/update" method="post" class="form">
                        <div class="form-group">
                            <label for="meat_name">Name</label>
                            <input type="text" id="meat_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="meat_price">Price</label>
                            <input type="number" step="0.1" min="0.1" id="meat_name" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    {{--<button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>--}}
                </div>
            </div>
        </div>
    </div>

@endsection