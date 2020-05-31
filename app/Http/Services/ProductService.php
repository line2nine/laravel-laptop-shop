<?php


namespace App\Http\Services;


use App\Http\Repositories\ProductRepository;
use App\Product;
use Illuminate\Support\Facades\Storage;

class ProductService
{
    protected $productRepo;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function getAll()
    {
        return $this->productRepo->getAll();
    }

    public function find($id)
    {
        return $this->productRepo->find($id);
    }

    public function create($request)
    {
        $productRepo = new Product();
        $productRepo->name = $request->name;
        $productRepo->description = $request->description;
        $productRepo->detail = $request->detail;
        $productRepo->price = $request->price;
        if ($request->hasFile('image')) {
            $productRepo->image = $request->image->store('images', 'public');
        } else {
            $productRepo->image = 'images/default-product.jpg';
        }
        $this->productRepo->save($productRepo);
    }

    public function update($productRepo, $request)
    {
        $productRepo->name = $request->name;
        $productRepo->description = $request->description;
        $productRepo->detail = $request->detail;
        $productRepo->price = $request->price;
        $oldFilePath = $productRepo->image;
        $newFilePath = $request->image;
        if ($oldFilePath !== 'images/default-product.jpg' && $newFilePath !== null) {
            Storage::delete("public/" . $oldFilePath);
        }
        if ($request->hasFile('image')) {
            $productRepo->image = $request->image->store('images', 'public');
        }
        $this->productRepo->save($productRepo);
    }

    public function searchByKeyword($request)
    {
        $keyword = $request->keyword;
        if ($keyword){
            return $this->productRepo->searchProduct($keyword);
        }
        return false;
    }
}
