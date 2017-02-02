@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Meats</li>
                <li class="active">Edit</li>
                <li class="active">{{$meat->name}}</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div>
                            <div>
                                <h5>Meat Properties Edit</h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form target="_self" action="/meat/update" method="post" class="form">
                            <div class="form-group">
                                <label for="meat_name">Name*</label>
                                <input type="text" id="meat_name" required value="{{$meat->name}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="meat_price">Price*</label>
                                <input type="number" step="0.1" min="0.1" required value="{{$meat->price}}" id="meat_price" class="form-control">
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