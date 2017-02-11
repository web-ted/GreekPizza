@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="/vegetable">Vegetables Index</a></li>
                <li class="active"><a href="/vegetable/add">Add</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div>
                            <div>
                                <h5>New Vegetable Properties</h5>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="/vegetable/create" method="post" class="form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="vegetable_name">Name*</label>
                                <input type="text" id="vegetable_name" name="name" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="vegetable_price">Price*</label>
                                <input type="number" step="0.01" min="0.01" name="price" required id="vegetable_price" class="form-control">
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