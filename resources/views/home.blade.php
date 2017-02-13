@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
            </ol>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Greek Pizza Web Application</h5>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <p>Welcome to the new Greek Pizza web application. On the top meu you can browse to the application components.
                    You can create new Pizzas, add new ingredients and make orders. You can also manage customers and employees.</p>
                <p>The Greek Pizza was built using the following technologies:</p>
                <ul>
                    <li><a href="http://php.net/">PHP 7.0</a></li>
                    <li><a href="https://www.mysql.com/">MySQL Ver 5.7.17</a></li>
                    <li><a href="https://laravel.com/">Laravel PHP Framewok 5.4</a></li>
                    <li><a href="https://getcomposer.org/">Composer Dependency Manager for PHP version 1.3.2</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection