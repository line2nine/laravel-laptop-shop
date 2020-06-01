<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $homeService;

    public function __construct(ProductService $homeService)
    {
        $this->homeService = $homeService;
    }

    public function index()
    {
        return view('home.main');
    }

    public function showStore()
    {
        $homeProducts = $this->homeService->getAll();
        return view('home.store', compact('homeProducts'));
    }

    function productDetail($id)
    {
        $product = $this->homeService->find($id);
        return view('home.product', compact('product'));
    }
}
