
@extends('layouts.mainlayout')
@section('fucked')
<div class="carousel" data-count="3" data-current="2">
    <!-- <button class="btn btn-control"></button> -->

    <div class="items">
        <div class="item" data-marker="1">
            <img src="{{asset('assets/img/carousel/bckg.jpg')}}" alt="Background" class="background"/>

            <div class="content">
                <div class="outside-content">
                    <div class="inside-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 align-center">
                                    <h1>New amazing laptops</h1>
                                    <p>Provide lightweight and powerull</p>
                                    <a href="./catalog/">More laptops ></a>
                                    <br><br>
                                </div>
                                <div class="col-sm-6 col-sm-offset-3 align-center">
                                    <img src="{{asset('assets/img/carousel/newlaptops.jpg')}}" alt="Laptops"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item active" data-marker="2">
            <img src="{{asset('assets/img/carousel/bckg.jpg')}}" alt="Background" class="background"/>

            <div class="content">
                <div class="outside-content">
                    <div class="inside-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2 align-center">
                                    <img src="{{asset('assets/img/carousel/surfaces.jpg')}}" alt="Surface Pro"/>
                                </div>
                                <div class="col-sm-12 align-center">
                                    <h1>8 Windows Hybrid Laptops</h1>
                                    <p>The laptop comes with an Intel i5 chip and 8GB of RAM.</p>
                                    <a href="./catalog/">View surfaces ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item" data-marker="3">
            <img src="{{asset('assets/img/carousel/bckg.jpg')}}" alt="Background" class="background"/>

            <div class="content">
                <div class="outside-content">
                    <div class="inside-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-5 col-sm-offset-1 align-center">
                                    <img src="{{asset('assets/img/carousel/ipadair2.jpg')}}" alt="iPad Air 2"
                                         class="hidden-xs hidden-sm"/>
                                    <img src="{{asset('assets/img/carousel/ipadair2m.jpg')}}" alt="iPad Air 2"
                                         class="hidden-md hidden-lg"/>
                                </div>
                                <div class="col-sm-4 align-left">
                                    <br class="hidden-xs hidden-sm"><br class="hidden-xs hidden-sm"><br
                                        class="hidden-xs hidden-sm">
                                    <br class="hidden-xs hidden-sm"><br class="hidden-xs hidden-sm"><br
                                        class="hidden-xs hidden-sm">
                                    <h1>Luxury devices</h1>
                                    <br>

                                    <p>
                                        Luxury watches, business tablets and 3D touch: How Apple plans to stay ahead
                                        in mobile.
                                        When it comes to the brand’s latest iPhones, the biggest excitement isn’t
                                        focused on the addition of a rose gold coloured device but the new 3D touch
                                        sensors.
                                    </p>
                                    <a href="./blog/item-photo.html">View article ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <ul class="markers">
        <li data-marker="1"><img src="{{asset('assets/img/carousel/newlaptops.jpg')}}" alt="Background"/></li>
        <li data-marker="2" class="active"><img src="{{asset('assets/img/carousel/surfaces.jpg')}}"
                                                alt="Background"/></li>
        <li data-marker="3"><img src="{{asset('assets/img/carousel/ipadair2.jpg')}}" alt="Background"/></li>
    </ul>
</div>


@endsection
