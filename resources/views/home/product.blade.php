@extends('layout.main-layout')
@section('product')
    <section class="product">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-md-7 white no-padding">
                    <div class="carousel-product" data-count="4" data-current="1">

                        <div class="items">
                            <button class="btn btn-control" data-direction="right"> <i class="ion-ios-arrow-right"></i></button>
                            <button class="btn btn-control" data-direction="left"> <i class="ion-ios-arrow-left"></i></button>

                            <div class="item center" data-marker="1">
                                <img src="{{asset('storage/' . $product->image)}}" alt="Microsoft Surface Studio" class="background"/>
                            </div>

                            <div class="item" data-marker="2">
                                <img src="{{asset('storage/' . $product->image)}}" alt="Microsoft Surface Studio" class="background"/>
                            </div>

                            <div class="item" data-marker="3">
                                <img src="{{asset('storage/' . $product->image)}}" alt="Microsoft Surface Studio" class="background"/>
                            </div>

                            <div class="item" data-marker="4">
                                <img src="{{asset('storage/' . $product->image)}}" alt="Microsoft Surface Studio" class="background"/>

                                <div class="tiles">
                                    <a href="#video" data-gallery="#video" data-source="youtube" data-id="BzMLA8YIgG0">
                                        <img src="{{asset('storage/' . $product->image)}}" alt="Surface Studio">

                                        <div class="overlay"></div>
                                        <div class="content">
                                            <div class="content-outside">
                                                <div class="content-inside">
                                                    <i class="ion-ios-play"></i>
                                                    <h2 class="white hidden-xs">Introducing Microsoft <br> Surface Studio</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <ul class="markers">
                            <li data-marker="1" class="active"></li>
                            <li data-marker="2"></li>
                            <li data-marker="3"></li>
                            <li data-marker="4"></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-5 col-md-5 no-padding-xs">
                    <div class="caption">
                        <img src="{{asset('assets/img/brands/microsoft.png')}}" alt="Microsoft" class="brand hidden-xs hidden-sm" />

                        <h1>{{$product->name}}</h1>

                        <p> &middot; {{$product->description}}</p>
                        <hr class="offset-md hidden-sm">
                        <hr class="offset-sm visible-sm">
                        <hr class="offset-xs visible-sm">

                        <p class="price">${{$product->price}}</p>
                        <hr class="offset-md">

                        <button class="btn btn-primary rounded"> <i class="ion-bag"></i> Add to cart</button>
                        <button class="btn btn-link"> <i class="ion-ios-heart"></i> See later </button>
                    </div>
                </div>
            </div>
            <hr class="offset-sm hidden-xs">

            <div class="row">
                <div class="col-sm-7 white sm-padding">
                    <hr class="offset-sm visible-xs">

                    <h2 class="h1">{{$product->name}}</h2>
                    <br>

                    <p>
                        {{$product->detail}}
                    </p>
                    <br>

                    <h2>Product specifications</h2>
                    <br>

                    <div class="row specification">
                        <div class="col-sm-4"> <label>Operating system</label> </div>
                        <div class="col-sm-8"> <p>Windows 10™</p> </div>
                    </div>

                    <div class="row specification">
                        <div class="col-sm-4"> <label>Display</label> </div>
                        <div class="col-sm-8">
                            <p>
                                Screen: 28" PixelSense Display<br>
                                Resolution: 4500 x 3000 (192 DPI)<br>
                                Color settings: sRGB, DCI-P3, and Vivid color profiles, individually color calibrated<br>
                                Touch: 10-point multi-touch
                            </p>
                        </div>
                    </div>

                    <div class="row specification">
                        <div class="col-sm-4"> <label>Processor</label> </div>
                        <div class="col-sm-8"> <p>Quad-core 6th Gen Intel Core i5 or i7</p> </div>
                    </div>

                    <div class="row specification">
                        <div class="col-sm-4"> <label>Processor technology</label> </div>
                        <div class="col-sm-8"> <p>Intel Turbo Boost Technology</p> </div>
                    </div>

                    <div class="row specification">
                        <div class="col-sm-4"> <label>Graphics</label> </div>
                        <div class="col-sm-8"> <p>NVIDIA GeForce GTX 965M 2GB GPU GDDR5 memory or NVIDIA GeForce GTX 980M 4GB GPU GDDR5 memory</p> </div>
                    </div>

                    <div class="row specification">
                        <div class="col-sm-4"> <label>Memory</label> </div>
                        <div class="col-sm-8"> <p>8GB, 16GB, or 32GB RAM</p> </div>
                    </div>

                    <div class="row specification">
                        <div class="col-sm-4"> <label>Hard drive</label> </div>
                        <div class="col-sm-8"> <p>Rapid hybrid drive options: 64GB SSD with 1TB HDD, 128GB SSD with 1TB HDD, 128GB SSD with 2TB HDD</p> </div>
                    </div>

                    <div class="row specification">
                        <div class="col-sm-4"> <label>Wireless</label> </div>
                        <div class="col-sm-8">
                            <p>
                                Wi-Fi: 802.11ac Wi-Fi wireless networking, IEEE 802.11 a/b/g/n compatible<br>
                                Bluetooth: Bluetooth 4.0 wireless technology<br>
                                Xbox Wireless built-in
                            </p>
                        </div>
                    </div>

                    <div class="row specification">
                        <div class="col-sm-4"> <label>Power supply</label> </div>
                        <div class="col-sm-8"> <p>45 W AC power adapter</p> </div>
                    </div>

                    <div class="row specification">
                        <div class="col-sm-4"> <label>Battery</label> </div>
                        <div class="col-sm-8"> <p>3-cell, 36 Wh Li-ion</p> </div>
                    </div>

                    <hr class="offset-lg">
                </div>
                <div class="col-sm-5 no-padding-xs">
                    <div class="talk white">
                        <h2 class="h3">Do you have any questions?</h2>
                        <p class="">Whatsuping now with our manager</p>
                        <hr class="offset-md">

                        <a href="tel:+80005554465" class="btn btn-primary btn-sm"> <i class="ion-social-whatsapp"></i> 8000 555-44-65 </a>
                        <hr class="offset-md visible-xs">
                    </div>
                    <hr class="offset-sm hidden-xs">

                    <div class="comments white">
                        <h2 class="h3">What do you think? (#3)</h2>
                        <br>

                        <div class="wrapper">
                            <div class="content">
                                <h3>Anne Hathaway</h3>
                                <label>2 years ago</label>
                                <p>
                                    Apple Music brings iTunes music streaming to the UK. But is it worth paying for? In our Apple Music review, we examine the service's features, UK pricing, audio quality and music library
                                </p>


                                <h3>Chris Hemsworth</h3>
                                <label>Today</label>
                                <p>
                                    Samsung's Galaxy S7 smartphone is getting serious hype. Here's what it does better than Apple's iPhone 6s.
                                </p>


                                <h3>Anne Hathaway</h3>
                                <label>2 years ago</label>
                                <p>
                                    Apple Music brings iTunes music streaming to the UK. But is it worth paying for? In our Apple Music review, we examine the service's features, UK pricing, audio quality and music library
                                </p>
                            </div>
                        </div>
                        <hr class="offset-lg">
                        <hr class="offset-md">

                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Modal-Comment"> <i class="ion-chatbox-working"></i> Add comment </button>
                        <hr class="offset-md visible-xs">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="offset-lg">
    @include('home.relate-product')
@endsection
