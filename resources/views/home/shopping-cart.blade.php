<div class="cart" data-toggle="inactive">
    <div class="label">
        <i class="ion-bag"></i> <span id="bagCount">{{\Gloudemans\Shoppingcart\Facades\Cart::count()}}</span>
    </div>

    <div class="overlay"></div>

    <div class="window">
        <div class="title">
            <button type="button" class="close"><i class="ion-android-close"></i></button>
            <h4>Shopping cart</h4>
        </div>

        <div class="content">
            @foreach(Cart::content() as $key => $product)
            <div class="media" id="product-{{$product->rowId}}">
                <div class="media-left">
                    <a href="{{route('detail', $product->id)}}">
                        <img class="media-object" src="{{asset('storage/' . $product->options->image)}}" alt="HP Chromebook 11"/>
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">{{$product->name}}</h4>
                    <label>{{$product->options->category}}</label>
                    <p class="price">${{$product->price}}</p>
                </div>
                <div class="controls">
                    <div class="input-group">
                <span class="input-group-btn">
                  <button class="btn btn-default btn-sm" type="button" data-action="minus" data-id="{{$product->rowId}}"><i class="ion-minus-round"></i></button>
                </span>
                        <input id="qtyid-{{$product->rowId}}" data-qty="{{$product->qty}}" type="text" class="form-control input-sm" placeholder="Qty" value="{{$product->qty}}" readonly="">
                        <span class="input-group-btn">
                  <button class="btn btn-default btn-sm" type="button" data-action="plus" data-id="{{$product->rowId}}"><i class="ion-plus-round"></i></button>
                </span>
                    </div><!-- /input-group -->

                    <a href="#remove" data-id="{{$product->rowId}}"> <i class="ion-trash-b"></i> Remove </a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="checkout container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 align-right">
                    <a class="btn btn-primary" href="{{route('cart.content')}}"> Checkout order </a>
                </div>
            </div>
        </div>
    </div>
</div>
