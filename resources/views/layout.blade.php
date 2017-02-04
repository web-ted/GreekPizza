<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
            <a class="navbar-brand" href="/">Greek Pizza</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="/pizza">Pizzas</a></li>
                <li><a href="/meat">Meats</a></li>
                <li><a href="/vegetable">Vegetables</a></li>
                <li><a href="/cheese">Cheeses</a></li>
                <li><a href="/sauce">Sauces</a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<script src="/js/app.js"></script>
@stack('js')
</body>
</html>