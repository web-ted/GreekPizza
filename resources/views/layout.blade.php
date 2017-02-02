<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">--}}
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"--}}
        {{--integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">--}}

    <link rel="stylesheet" href="/css/app.css">
    <style>
        body { padding-top: 70px; }

        .spin {
            animation: spin 2s linear;
        }
        @keyframes spin {
            100% { transform: rotate(360deg)}
        }
    </style>
    @stack('css')

    {{--<link rel="stylesheet" href="css/bootstrap.min.css">--}}
    {{--<link rel="stylesheet" href="css/bootstrap-theme.css">--}}
    {{--<link rel="stylesheet" href="css/app.css">--}}

    <title>Greek Pizza</title>
</head>
<body role="document">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Greek Pizza</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#/dashboard">Customer</a></li>
                <!--<li><a href="#/example">Workers</a></li>-->
                <!--<li><a href="#about">About</a></li>-->
                <li class="dropdown">
                    <a href="#/workers" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">Pizzas<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#/worker"><span class="glyphicon glyphicon-user"></span> Workers Index</a></li>
                        <li><a href="#/worker/add"><span class="glyphicon glyphicon-plus-sign"></span> Add Worker</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Extra Options</li>
                        <li><a href="#/worker/export"><span class="glyphicon glyphicon-floppy-save"></span> Export
                                Catalogue</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')


{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>--}}
<script src="/js/app.js"></script>
@stack('js')
</body>
</html>