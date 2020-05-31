<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/carousel-recommendation.css')}}" rel="stylesheet">
    <link href="{{asset('assets/ionicons-2.0.1/css/ionicons.css')}}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Catamaran:400,100,300' rel='stylesheet' type='text/css'>
    <title>LLStore</title>
</head>
<body>
<nav class="navbar navbar-default">
    @include('home.core.nav')
</nav>
<header>
    @include('home.core.main')
</header>
<footer>
    @include('home.core.footer')
</footer>

<script src="{{asset('assets/js/jquery-latest.min.js')}}"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/core.js')}}"></script>
<script src="{{asset('assets/js/carousel.js')}}"></script>
<script src="{{asset('assets/js/carousel-recommendation.js')}}"></script>
</body>
</html>
