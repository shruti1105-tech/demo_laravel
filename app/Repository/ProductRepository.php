<?php


namespace App\Repository;


use App\Models\Product;

class ProductRepository implements IProductRepository
{

    public function getAllProduct()
    {
        return Product::all();
    }

    public function getProductById($id)
    {
        return Product::find($id);
    }

    public function createOrUpdate($id = null, $collection = [])
    {
        if (is_null($id)) {
            $product = new Product();
            $product->name = $collection['name'];
            $product->details = $collection['details'];
            $product->category_id=$collection['category_id'];
            return $product->save();
        }
        $product = Product::find($id);
        $product->name = $collection['name'];
        $product->details = $collection['details'];
        $product->category_id=$collection['category_id'];
        return $product->save();
    }

    public function deleteProduct($id)
    {
        return Product::find($id)->delete();
    }
}
