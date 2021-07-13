<?php


namespace App\Repository;


use App\Models\Category;

class CategoryRepository implements ICategoryRepository
{
    protected $category = null;

    public function getAllCategory()
    {
        return Category::all();
    }

    public function getCategoryById($id)
    {
        return Category::find($id);
    }

    public function createOrUpdate($id = null, $collection = [])
    {
        if (is_null($id)) {
            $category = new Category();
            $category->name = $collection['name'];
            return $category->save();
        }
        $category = Category::find($id);
        $category->name = $collection['name'];
        return $category->save();
    }

    public function deleteCategory($id)
    {
        return Category::find($id)->delete();
    }
}
