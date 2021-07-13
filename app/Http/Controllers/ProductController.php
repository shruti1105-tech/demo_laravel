<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repository\ICategoryRepository;
use App\Repository\IProductRepository;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public $product;
    public $category;

    public function __construct(IProductRepository $product, ICategoryRepository $category)
    {
        $this->category = $category;
        $this->product = $product;
    }

    public function showProduct()
    {
        $products = $this->product->getAllProduct();
        return View::make('admin.product.index', compact('products'));
    }

    public function createProduct()
    {
        $category = $this->category->getAllCategory();
        return View::make('admin.product.create', compact('category'));
    }

    public function getProduct($id)
    {
        $product = $this->product->getProductById($id);
        $category = $this->category->getCategoryById($id);
        return View::make('admin.product.edit', compact('product', 'category'));
    }

    public function saveProduct(Request $request, $id = null)
    {
        $collection = $request->except(['_token', '_method']);

        if (!is_null($id)) {
            $this->product->createOrUpdate($id, $collection);
        } else {
            $this->product->createOrUpdate($id = null, $collection);
        }

        return redirect()->route('product.show');
    }

    public function deleteProduct($id)
    {
        $this->product->deleteProduct($id);
        return redirect()->route('product.show');
    }

}
