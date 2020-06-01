<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\EditProductRequest;
use App\Http\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    function getAll()
    {
        $products = $this->productService->getAll();
        return view('products.list', compact('products'));
    }

    public function getAllStore()
    {
        $products = $this->productService->getAll();
        return view('home.store', compact('products'));
    }

    function create()
    {
        return view('products.create');
    }

    function store(CreateProductRequest $request)
    {
        $this->productService->create($request);

        \alert("Created Successful", '', 'success')->autoClose(2000)->timerProgressBar();
        return redirect()->route('product.list');
    }

    function delete($id)
    {
        $product = $this->productService->find($id);
        $filePath = $product->image;
        $product->delete();
        if ($filePath !== 'images/default-avatar.png') {
            Storage::delete("public/" . $filePath);
        }
        notify("Deleted product $product->name", 'success');
        return redirect()->route('product.list');
    }

    function edit($id)
    {
        $product = $this->productService->find($id);
        return view('products.edit', compact('product'));
    }

    function update(EditProductRequest $request, $id)
    {
        $product = $this->productService->find($id);
        $this->productService->update($product, $request);
        toast('Update Completed', 'success')->position('top')->autoClose(3000)->timerProgressBar();
        return redirect()->route('product.list');
    }

    function productDetail($id)
    {
        $product = $this->productService->find($id);
        return view('products.detail', compact('product'));
    }

    function search(Request $request)
    {
        if ($this->productService->searchByKeyword($request)) {
            $products = $this->productService->searchByKeyword($request);
            return view('products.list', compact('products'));
        }
        return redirect()->route('product.list');
    }
}
