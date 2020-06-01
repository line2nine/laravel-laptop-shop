<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('index')}}"> LStore Pro </a>
            <a class="navbar-brand pull-right hidden-sm hidden-md hidden-lg" href="#open-cart"> <i class="ion-bag"></i> 7 </a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{route('store')}}">Store</a></li>
                <li><a href="./blog/">Blog</a></li>
                <li><a href="./contacts/">Contacts</a></li>
                <li class="dropdown">
                    <a href="./store/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        More <i class="ion-android-arrow-dropdown"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="./store/product.html">Product</a></li>
                        <li><a href="./about/">About Us</a></li>
                        <li><a href="./checkout/">Checkout</a></li>
                        <li><a href="./faq/">FAQ</a></li>
                        <li><a href="./gallery/">Gallery</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Variations</li>
                        <li><a href="./blog/item-photo.html">Article Photo</a></li>
                        <li><a href="./blog/item-video.html">Article Video</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->


        <div class="search hidden-xs" data-style="hidden">
            <div class="input">
                <button type="button"><i class="ion-ios-search"></i></button>

                <input type="text" name="search" value="" placeholder="Type here..." />
            </div>
        </div>
    </div><!--/.container-fluid -->
</nav>
