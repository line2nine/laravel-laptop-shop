@extends('layout.main-layout')
@section('content-two')
    <h2>NEW PRODUCTS</h2>
    <hr class="offset-md">

    <div class="row products">
        <div class="col-sm-6 col-md-4 product">
            <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
            <a href="core"><img src="../assets/img/products/surface-pro.jpg" alt="Surface Pro"/></a>

            <div class="content">
                <h1 class="h4">Surface Pro</h1>
                <p class="price">$199.99</p>
                <label>Hybrid</label>

                <a href="../catalog/product.html" class="btn btn-link"> Details</a>
                <button class="btn btn-primary btn-rounded btn-sm"><i class="ion-bag"></i> Add to cart</button>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 product">
            <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
            <a href="core"><img src="../assets/img/products/lenovo-yoga.jpg" alt="Lenovo Yoga"/></a>

            <div class="content">
                <h1 class="h4">Lenovo Yoga</h1>
                <p class="price">$199.99</p>
                <label>Hybrid</label>

                <a href="../catalog/product.html" class="btn btn-link"> Details</a>
                <button class="btn btn-primary btn-rounded btn-sm"><i class="ion-bag"></i> Add to cart</button>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 product">
            <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
            <a href="core"><img src="../assets/img/products/asus-transformer.jpg" alt="ASUS Transformer"/></a>

            <div class="content">
                <h1 class="h4">ASUS Transformer</h1>
                <p class="price">$199.99</p>
                <label>Hybrid</label>

                <a href="../catalog/product.html" class="btn btn-link"> Details</a>
                <button class="btn btn-primary btn-rounded btn-sm"><i class="ion-bag"></i> Add to cart</button>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 product hidden-md hidden-lg">
            <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
            <a href="core"><img src="../assets/img/products/mi-pad-2.jpg" alt="Mi Pad 2/"></a>

            <div class="content">
                <h1 class="h4">Mi Pad 2</h1>
                <p class="sale">$199.99</p>
                <p class="price through">$249.99</p>
                <label>Tablets</label>

                <a href="../catalog/product.html" class="btn btn-link"> Details</a>
                <button class="btn btn-primary btn-rounded btn-sm"><i class="ion-bag"></i> Add to cart</button>
            </div>
        </div>
    </div>
    </div>

    <div class="container">
        <h2>RECOMMENDATION FOR YOU</h2>
        <hr class="offset-md">

        <div class="row products">
            <div class="col-sm-6 col-md-3 product">
                <a href="#favorites" class="favorites" data-favorite="inactive"><i
                        class="ion-ios-heart-outline"></i></a>
                <a href="core"><img src="../assets/img/products/chrome-book-11.jpg" alt="HP Chromebook 11"/></a>

                <div class="content">
                    <h1 class="h4">HP Chromebook 11</h1>
                    <p class="price">$199.99</p>
                    <label>Laptops</label>

                    <a href="../catalog/product.html" class="btn btn-link"> Details</a>
                    <button class="btn btn-primary btn-rounded btn-sm"><i class="ion-bag"></i> Add to cart</button>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 product">
                <a href="#favorites" class="favorites" data-favorite="inactive"><i
                        class="ion-ios-heart-outline"></i></a>
                <a href="core"><img src="../assets/img/products/chrome-book-14.jpg" alt="HP Chromebook 14"/></a>

                <div class="content">
                    <h1 class="h4">HP Chromebook 14</h1>
                    <p class="sale">$209.99</p>
                    <p class="price through">$249.99</p>
                    <label>Laptops</label>

                    <a href="../catalog/product.html" class="btn btn-link"> Details</a>
                    <button class="btn btn-primary btn-rounded btn-sm"><i class="ion-bag"></i> Add to cart</button>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 product">
                <a href="#favorites" class="favorites" data-favorite="inactive"><i
                        class="ion-ios-heart-outline"></i></a>
                <a href="core"><img src="../assets/img/products/chrome-book-asus.jpg" alt="HP Chromebook 14"/></a>

                <div class="content">
                    <h1 class="h4">Asus Chromebook</h1>
                    <p class="price">$299.99</p>
                    <label>Laptops</label>

                    <a href="../catalog/product.html" class="btn btn-link"> Details</a>
                    <button class="btn btn-primary btn-rounded btn-sm"><i class="ion-bag"></i> Add to cart</button>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 product">
                <a href="#favorites" class="favorites" data-favorite="inactive"><i
                        class="ion-ios-heart-outline"></i></a>
                <a href="core"><img src="../assets/img/products/chrome-book-14.jpg" alt="HP Chromebook 14"/></a>

                <div class="content">
                    <h1 class="h4">HP Chromebook 14</h1>
                    <p class="sale">$209.99</p>
                    <p class="price through">$249.99</p>
                    <label>Laptops</label>

                    <a href="../catalog/product.html" class="btn btn-link"> Details</a>
                    <button class="btn btn-primary btn-rounded btn-sm"><i class="ion-bag"></i> Add to cart</button>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <h2>NEW ARTICLES</h2>
        <hr class="offset-md">

        <div class="row blog">
            <div class="col-sm-6 col-md-6 item">

                <div class="body">
                    <a href="../blog/item-photo.html" class="view"><i class="ion-ios-book-outline"></i></a>

                    <a href="../blog/item-photo.html">
                        <img src="../assets/img/blog/img1.jpg" title="Apple Devices" alt="Apple Devices">
                    </a>

                    <div class="caption">
                        <h1 class="h3">The next generation of Multi-Touch</h1>
                        <label> 07.01.2017</label>
                        <hr class="offset-sm">

                        <p>
                            The original iPhone introduced the world to Multi-Touch, forever changing the way people
                            experience technology. With 3D Touch, you can do things that were never possible before. It
                            senses how deeply you press the display, letting you do all kinds of essential things more
                            quickly and simply. And it gives you real-time feedback in the form of subtle taps from the
                            all-new Taptic Engine.
                        </p>
                        <hr class="offset-sm">

                        <a href="../blog/item-photo.html"> View article <i class="ion-ios-arrow-right"></i> </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 item">
                <div class="body">
                    <a href="../blog/item-video.html" class="view"><i class="ion-ios-book-outline"></i></a>
                    <a href="../blog/item-video.html">
                        <img src="../assets/img/blog/img2.jpg" title="Coffee" alt="Coffee">
                    </a>

                    <div class="caption">
                        <h1 class="h3">MacBook Pro - brand new day for business.</h1>
                        <label> 02.01.2017</label>
                        <hr class="offset-sm">

                        <p>
                            Organizations everywhere are realizing the potential that Mac brings to their employees by
                            giving them the freedom to use the tools they already know and love. Software and hardware
                            made for each other. Because Apple designs both the software and hardware, every Mac
                            delivers the best possible experience for employees.
                        </p>
                        <hr class="offset-sm">

                        <a href="../blog/item-video.html"> View article <i class="ion-ios-arrow-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
