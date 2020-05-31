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
<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./"> <i class="ion-cube"></i> Linh Store</a>
    </div>

    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="./">Home</a></li>
            <li><a href="./catalog/">Catalog</a></li>
            <li><a href="./blog/">Blog</a></li>
            <li><a href="./gallery/">Gallery</a></li>
            <li class="dropdown">
                <a href="./catalog/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">More <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="./catalog/product.html">Product</a></li>
                    <li><a href="./cart/">Cart</a></li>
                    <li><a href="./checkout/">Checkout</a></li>
                    <li><a href="./faq/">FAQ</a></li>
                    <li><a href="./contacts/">Contacts</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Variations</li>
                    <li><a href="./home">Home</a></li>
                    <li><a href="./blog/item-photo.html">Article Photo</a></li>
                    <li><a href="./blog/item-video.html">Article Video</a></li>
                    <li><a href="./blog/item-review.html">Article Review</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{route('login')}}"> <i class="ion-android-person"></i> Login </a></li>
            <li><a href="#"> Sign Up</a></li>
        </ul>
    </div><!--/.nav-collapse -->
</div><!--/.container-fluid -->

@yield('fucked')

<div class="about">
    <div class="container">
        <div class="row">
            <hr class="offset-md">

            <div class="col-xs-6 col-sm-3">
                <div class="item">
                    <i class="ion-ios-telephone-outline"></i>
                    <h1>24/7 free <br> <span>support</span></h1>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="item">
                    <i class="ion-ios-star-outline"></i>
                    <h1>Low price <br> <span>guarantee</span></h1>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="item">
                    <i class="ion-ios-gear-outline"></i>
                    <h1> Manufacturer’s <br> <span>warranty</span></h1>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3">
                <div class="item">
                    <i class="ion-ios-loop"></i>
                    <h1> Full refund <br> <span>guarantee</span> </h1>
                </div>
            </div>

            <hr class="offset-md">
        </div>
    </div>
</div>

<div class="subscribe">
    <div class="container align-center">
        <hr class="offset-md">

        <h1 class="h3 upp">Join our newsletter</h1>
        <p>Get more information and receive special discounts for our products.</p>
        <hr class="offset-sm">

        <form action="index.php" method="post">
            <div class="input-group">
                <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-primary"> Subscribe <i class="ion-android-send"></i> </button>
                </span>
            </div><!-- /input-group -->
        </form>
        <hr class="offset-lg">
        <hr class="offset-md">

        <div class="social">
            <a href="#"><i class="ion-social-facebook"></i></a>
            <a href="#"><i class="ion-social-twitter"></i></a>
            <a href="#"><i class="ion-social-googleplus-outline"></i></a>
            <a href="#"><i class="ion-social-instagram-outline"></i></a>
            <a href="#"><i class="ion-social-linkedin-outline"></i></a>
            <a href="#"><i class="ion-social-youtube-outline"></i></a>
        </div>


        <hr class="offset-md">
        <hr class="offset-md">
    </div>
</div>


<div class="container">
    <hr class="offset-md">

    <div class="row menu">
        <div class="col-sm-3 col-md-2">
            <h1 class="h4">Information <i class="ion-plus-round hidden-sm hidden-md hidden-lg"></i> </h1>

            <div class="list-group">
                <a href="#" class="list-group-item">About</a>
                <a href="#" class="list-group-item">Terms</a>
                <a href="#" class="list-group-item">How to order</a>
                <a href="#" class="list-group-item">Delivery</a>
            </div>
        </div>
        <div class="col-sm-3 col-md-2">
            <h1 class="h4">Products <i class="ion-plus-round hidden-sm hidden-md hidden-lg"></i> </h1>

            <div class="list-group">
                <a href="#" class="list-group-item">Laptops</a>
                <a href="#" class="list-group-item">Tablets</a>
                <a href="#" class="list-group-item">Servers</a>
            </div>
        </div>
        <div class="col-sm-3 col-md-2">
            <h1 class="h4">Support <i class="ion-plus-round hidden-sm hidden-md hidden-lg"></i> </h1>

            <div class="list-group">
                <a href="#" class="list-group-item">Returns</a>
                <a href="#" class="list-group-item">FAQ</a>
                <a href="#" class="list-group-item">Contacts</a>
            </div>
        </div>
        <div class="col-sm-3 col-md-2">
            <h1 class="h4">Location</h1>

            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Language
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#English"> <img src="{{asset('assets/img/flags/gb.png')}}" alt="Eng"/> English</a></li>
                    <li><a href="#Spanish"> <img src="{{asset('assets/img/flags/es.png')}}" alt="Spa"/> Spanish</a></li>
                    <li><a href="#Deutch"> <img src="{{asset('assets/img/flags/de.png')}}" alt="De"/> Deutch</a></li>
                    <li><a href="#French"> <img src="{{asset('assets/img/flags/fr.png')}}" alt="Fr"/> French</a></li>
                </ul>
            </div>
            <hr class="offset-xs">

            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Currency
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li><a href="#Euro"><i class="ion-social-euro"></i> Euro</a></li>
                    <li><a href="#Dollar"><i class="ion-social-usd"></i> Dollar</a></li>
                    <li><a href="#Yen"><i class="ion-social-yen"></i> Yen</a></li>
                    <li><a href="#Bitcoin"><i class="ion-social-bitcoin"></i> Bitcoin</a></li>
                </ul>
            </div>

        </div>
        <div class="col-sm-3 col-md-3 col-md-offset-1 align-right hidden-sm hidden-xs">
            <h1 class="h4">Unistore, Inc.</h1>

            <address>
                1305 Market Street, Suite 800<br>
                San Francisco, CA 94102<br>
                <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>

            <address>
                <strong>Support</strong><br>
                <a href="mailto:#">sup@example.com</a>
            </address>

        </div>
    </div>
</div>

<hr>

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-9 payments">
            <p>Pay your order in the most convenient way</p>

            <div class="payment-icons">
                <img src="{{asset('assets/img/payments/paypal.svg')}}" alt="paypal">
                <img src="{{asset('assets/img/payments/visa.svg')}}" alt="visa">
                <img src="{{asset('assets/img/payments/master-card.svg')}}" alt="mc">
                <img src="{{asset('assets/img/payments/discover.svg')}}" alt="discover">
                <img src="{{asset('assets/img/payments/american-express.svg')}}" alt="ae">
            </div>
            <br>

        </div>
        <div class="col-sm-4 col-md-3 align-right align-center-xs">
            <hr class="offset-sm hidden-sm">
            <hr class="offset-sm">
            <p>Unistore Pro © 2016 <br> Designed By <a href="http://sunrise.ru.com/" target="_blank">Sunrise Digital</a></p>
            <hr class="offset-lg visible-xs">
        </div>
    </div>
</div>
<script src="{{asset('assets/js/jquery-latest.min.js')}}"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/core.js')}}"></script>
<script src="{{asset('assets/js/carousel.js')}}"></script>
<script src="{{asset('assets/js/carousel-recommendation.js')}}"></script>
</body>
</html>
