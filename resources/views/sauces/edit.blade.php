@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Sauces</li>
                <li class="active">Edit</li>
                <li class="active">{{$sauce->name}}</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div>
                            <div>
                                <h5>Sauce Properties Edit</h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="/sauce/update/{{$sauce->id}}" method="post" class="form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="sauce_name">Name*</label>
                                <input type="text" id="sauce_name" name="name" required value="{{$sauce->name}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="sauce_price">Price*</label>
                                <input type="number" step="0.01" min="0.01" name="price" required value="{{$sauce->price}}" id="sauce_price" class="form-control">
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