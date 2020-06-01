@extends('layout.main-layout')
@section('store')
    <hr class="offset-top">

    <div class="tags">
        <div class="container">
            <div class="btn-group pull-right sorting">
                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ion-arrow-down-b"></i> Sorting by name
                </button>

                <ul class="dropdown-menu">
                    <li class="active"><a href="#"> <i class="ion-arrow-down-c"></i> Name [A-Z]</a></li>
                    <li><a href="#"> <i class="ion-arrow-up-c"></i> Name [Z-A]</a></li>
                    <li><a href="#"> <i class="ion-arrow-down-c"></i> Price [Low-High]</a></li>
                    <li><a href="#"> <i class="ion-arrow-up-c"></i> Price [High-Low]</a></li>
                </ul>
            </div>

            <p>Search by tags</p>
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default btn-sm active">
                    <input type="radio" name="options" id="option1" checked> All products
                </label>
                <label class="btn btn-default btn-sm">
                    <input type="radio" name="options" id="option2"> Desktops
                </label>
                <label class="btn btn-default btn-sm">
                    <input type="radio" name="options" id="option3"> Laptops
                </label>
                <label class="btn btn-default btn-sm">
                    <input type="radio" name="options" id="option4"> Tablets
                </label>
                <label class="btn btn-default btn-sm">
                    <input type="radio" name="options" id="option5"> Hybrids
                </label>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Filter -->
            <div class="col-sm-4 col-md-3">
                <hr class="offset-lg">

                <div class="filter">
                    <div class="item">
                        <div class="title">
                            <a href="#clear" data-action="open" class="down"> <i class="ion-android-arrow-dropdown"></i> Open</a>
                            <a href="#clear" data-action="clear"> <i class="ion-ios-trash-outline"></i> Clear</a>
                            <h1 class="h4">Type</h1>
                        </div>

                        <div class="controls">
                            <div class="checkbox-group" data-status="inactive">
                                <div class="checkbox"><i class="ion-android-done"></i></div>
                                <div class="label" data-value="Desktops">Desktops</div>
                                <input type="checkbox" name="checkbox" value="">
                            </div>

                            <div class="checkbox-group" data-status="inactive">
                                <div class="checkbox"><i class="ion-android-done"></i></div>
                                <div class="label" data-value="Laptops">Laptops</div>
                                <input type="checkbox" name="checkbox" value="">
                            </div>

                            <div class="checkbox-group" data-status="inactive">
                                <div class="checkbox"><i class="ion-android-done"></i></div>
                                <div class="label" data-value="Tablets">Tablets</div>
                                <input type="checkbox" name="checkbox" value="">
                            </div>

                            <div class="checkbox-group" data-status="inactive">
                                <div class="checkbox"><i class="ion-android-done"></i></div>
                                <div class="label" data-value="Hybrid">Hybrids</div>
                                <input type="checkbox" name="checkbox" value="">
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="item">
                        <div class="title">
                            <a href="#clear" data-action="open" class="down"> <i class="ion-android-arrow-dropdown"></i> Open</a>
                            <a href="#clear" data-action="clear"> <i class="ion-ios-trash-outline"></i> Clear</a>
                            <h1 class="h4">Screen</h1>
                        </div>

                        <div class="controls grid">
                            <div class="checkbox-group" data-status="inactive">
                                <div class="checkbox"><i class="ion-android-done"></i></div>
                                <div class="label" data-value="7 in">7 in</div>
                                <input type="checkbox" name="checkbox" value="">
                            </div>

                            <div class="checkbox-group" data-status="inactive">
                                <div class="checkbox"><i class="ion-android-done"></i></div>
                                <div class="label" data-value="10 in">10 in</div>
                                <input type="checkbox" name="checkbox" value="">
                            </div>

                            <div class="checkbox-group" data-status="inactive">
                                <div class="checkbox"><i class="ion-android-done"></i></div>
                                <div class="label" data-value="11 in">11 in</div>
                                <input type="checkbox" name="checkbox" value="">
                            </div>

                            <div class="checkbox-group" data-status="inactive">
                                <div class="checkbox"><i class="ion-android-done"></i></div>
                                <div class="label" data-value="14 in">14 in</div>
                                <input type="checkbox" name="checkbox" value="">
                            </div>

                            <div class="checkbox-group" data-status="inactive">
                                <div class="checkbox"><i class="ion-android-done"></i></div>
                                <div class="label" data-value="15 in">15 in</div>
                                <input type="checkbox" name="checkbox" value="">
                            </div>

                            <div class="checkbox-group" data-status="inactive">
                                <div class="checkbox"><i class="ion-android-done"></i></div>
                                <div class="label" data-value="17 in">17 in</div>
                                <input type="checkbox" name="checkbox" value="">
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="item">
                        <div class="title">
                            <a href="#clear" data-action="open" class="down"> <i class="ion-android-arrow-dropdown"></i> Open</a>
                            <a href="#clear" data-action="clear-price"> <i class="ion-ios-trash-outline"></i> Clear</a>
                            <h1 class="h4">Price</h1>
                        </div>

                        <div class="controls">
                            <br>
                            <div id="slider-price"></div>
                            <br>
                            <p id="amount"></p>
                        </div>
                    </div>
                    <br>

                    <div class="item lite">
                        <div class="title">
                            <a href="#clear" data-action="open" class="down"> <i class="ion-android-arrow-dropdown"></i> Open</a>
                            <a href="#clear" data-action="clear"> <i class="ion-ios-trash-outline"></i> Clear</a>
                            <h1 class="h4">Manufacturer</h1>
                        </div>

                        <div class="controls">
                            <div class="checkbox-group" data-status="inactive">
                                <div class="checkbox"><i class="ion-android-done"></i></div>
                                <div class="label" data-value="Hp">Hp</div>
                                <input type="checkbox" name="checkbox" value="">
                            </div>

                            <div class="checkbox-group" data-status="inactive">
                                <div class="checkbox"><i class="ion-android-done"></i></div>
                                <div class="label" data-value="ASUS">ASUS</div>
                                <input type="checkbox" name="checkbox" value="">
                            </div>

                            <div class="checkbox-group" data-status="inactive">
                                <div class="checkbox"><i class="ion-android-done"></i></div>
                                <div class="label" data-value="Acer">Acer</div>
                                <input type="checkbox" name="checkbox" value="">
                            </div>

                            <div class="checkbox-group" data-status="inactive">
                                <div class="checkbox"><i class="ion-android-done"></i></div>
                                <div class="label" data-value="Dell">Dell</div>
                                <input type="checkbox" name="checkbox" value="">
                            </div>

                            <div class="checkbox-group" data-status="inactive">
                                <div class="checkbox"><i class="ion-android-done"></i></div>
                                <div class="label" data-value="Sony">Sony</div>
                                <input type="checkbox" name="checkbox" value="">
                            </div>

                            <div class="checkbox-group" data-status="inactive">
                                <div class="checkbox"><i class="ion-android-done"></i></div>
                                <div class="label" data-value="Apple">Apple</div>
                                <input type="checkbox" name="checkbox" value="">
                            </div>

                            <div class="checkbox-group" data-status="inactive">
                                <div class="checkbox"><i class="ion-android-done"></i></div>
                                <div class="label" data-value="Lenovo">Lenovo</div>
                                <input type="checkbox" name="checkbox" value="">
                            </div>

                            <div class="checkbox-group" data-status="inactive">
                                <div class="checkbox"><i class="ion-android-done"></i></div>
                                <div class="label" data-value="Microsoft">Microsoft</div>
                                <input type="checkbox" name="checkbox" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /// -->

            <!-- Products -->
            <div class="col-sm-8 col-md-9">
                <hr class="offset-lg">

                <div class="products">
                    <div class="row">

                        @foreach($homeProducts as $key => $homeProduct)
                        <div class="col-sm-6 col-md-4 product">
                            <div class="body">
                                <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
                                <a href="./"><img src="{{asset('storage/' . $homeProduct->image)}}" alt="Apple iMac 27 Retina"/></a>

                                <div class="content">
                                    <h1 class="h3">{{$homeProduct->name}}</h1>
                                    <p class="price">${{$homeProduct->price}}</p>
                                    <label>{{$homeProduct->category->name}}</label>

                                    <a class="btn btn-link" href="{{route('detail', $homeProduct->id)}}"><i class="ion-android-open"></i> Details</a>
                                    <button class="btn btn-primary btn-sm rounded"> <i class="ion-bag"></i> Add to cart</button>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>

                <nav>
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="ion-ios-arrow-left"></i></span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="disabled"><a href="#">..</a></li>
                        <li><a href="#">10</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="ion-ios-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- /// -->
        </div>
    </div>
@endsection
