<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use function alert;

class CartController extends Controller
{
    protected $cartService;

    public function __construct(ProductService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function showCart()
    {
        if (count(Cart::content())) {
            $products = Cart::content();
            return view('home.cart-content', compact('products'));
        }
        alert('Your cart is empty', 'Back to shopping?', 'warning');
        return redirect()->route('store');
    }

    public function add($id)
    {
        $product = $this->cartService->find($id);
        Cart::add($product->id, $product->name, 1, $product->price, 1, ['image' => $product->image, 'category' => $product->category->name])->associate('Product');
        return response()->json(
            [
                'status' => 'success',
                'totalItem' => Cart::count(),
                'listItem' => Cart::content()
            ]);
    }

    public function remove($id)
    {
        Cart::remove($id);
        return response()->json(
            [
                'status' => 'success',
                'totalItem' => Cart::count(),
                'subTotal' => Cart::subtotal()
            ]);
    }

    public function updatePlus($id)
    {
        $row = Cart::get($id);
        Cart::update($id, $row->qty + 1);
        return response()->json(
            [
                'status' => 'success',
                'totalItem' => Cart::count(),
                'subTotal' => Cart::subtotal()
            ]);
    }

    public function updateMinus($id)
    {
        $row = Cart::get($id);
        if ($row->qty > 1) {
            Cart::update($id, $row->qty - 1);
        }
        return response()->json(
            [
                'status' => 'success',
                'totalItem' => Cart::count(),
                'subTotal' => Cart::subtotal()
            ]);
    }
}
