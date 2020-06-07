<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.png')}}">

    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/carousel-product.css')}}" rel="stylesheet">
    <link href="{{asset('assets/ionicons-2.0.1/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bag.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href='https://fonts.googleapis.com/css?family=Catamaran:400,100,300' rel='stylesheet' type='text/css'>

    <link href="{{asset('assets/css/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
    @notify_css
    @notify_js
    <title>LStore</title>
</head>
<body>
@include('sweetalert::alert')

@include('home.shopping-cart')


<div class="toplinks">
    @if(\Illuminate\Support\Facades\Auth::check())
        <a href="{{route('logout')}}">
            <i class=""></i> Logout </a>
        <a href="{{route('admin.dashboard')}}">
            <i class="ion-unlocked"></i> {{strtoupper(auth()->user()->name)}} </a>
    @else
        <a href="#signin" data-toggle="modal" data-target="#Modal-Registration"> <i class="ion-person"></i> Registration</a>
        <a href="#signin" data-toggle="modal" data-target="#Modal-SignIn"> <i class="ion-unlocked"></i> Sign In</a>
    @endif
    <a href="./favorites/"> <i class="ion-ios-heart"></i> Favorites </a>
    <a href="tel:+80005554465" class="hidden-xs"> <i class="ion-android-call"></i> 0943-294-292 </a>
    <a href="{{route('cart.content')}}" class="hidden-xs">
        <i class="ion-bag" id="my-bag"></i>
        Cart(<span id="cartCount">{{\Gloudemans\Shoppingcart\Facades\Cart::count()}}</span>) </a>
</div>
@include('home.core.nav')

@yield('content-main')

@yield('store')

@yield('product')

@yield('cart-content')

@include('home.core.footer')

@include('login')



@notify_render
<script type="text/javascript" src="//code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="//code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="{{asset('assets/js/jquery-latest.min.js')}}"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/core.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/store.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/checkout.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/carousel-product.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/flyto.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.touchSwipe.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom-scroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-ui-1.11.4.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.ui.touch-punch.js')}}"></script>

</body>
</html>
