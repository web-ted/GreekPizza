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
                <table class="table">
                    <thead>
                    <tr>
                        <th ng-click="order('first_name')" class="btn">
                            <span class="glyphicon" ng-show="predicate === 'first_name'" ng-class="{'glyphicon-chevron-down':reverse, 'glyphicon-chevron-up':(!reverse)}"></span>
                            First Name
                        </th>
                        <th ng-click="order('last_name')">
                            <span class="glyphicon" ng-show="predicate === 'last_name'" ng-class="{'glyphicon-chevron-down':reverse, 'glyphicon-chevron-up':(!reverse)}"></span>
                            Last Name
                        </th>
                        <th ng-click="order('father_name')">
                            <span class="glyphicon" ng-show="predicate === 'father_name'" ng-class="{'glyphicon-chevron-down':reverse, 'glyphicon-chevron-up':(!reverse)}"></span>
                            Father's Name
                        </th>
                        <th ng-click="order('phone')">
                            <span class="glyphicon" ng-show="predicate === 'phone'" ng-class="{'glyphicon-chevron-down':reverse, 'glyphicon-chevron-up':(!reverse)}"></span>
                            Phone
                        </th>
                        <th ng-click="order('mobile_phone')">
                            <span class="glyphicon" ng-show="predicate === 'mobile_phone'" ng-class="{'glyphicon-chevron-down':reverse, 'glyphicon-chevron-up':(!reverse)}"></span>
                            Cell Phone
                        </th>
                        <th>
                            Actions
                        </th>
                    </tr>
                    </thead>

                </table>
            </div>
            <div class="panel-footer">
                <div class="row">

                </div>
            </div>
        </div>
    </div>

    <!-- Edit Worker Modal -->
    <div class="modal fade" id="editWorker" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <form>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" ng-click="updateWorker(entry)">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection