<?php

namespace App\Http\Controllers;

use App\Repository\ICategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CategoryController extends Controller
{
    public $category;

    public function __construct(ICategoryRepository $category)
    {
        $this->category = $category;
    }

    public function showCategory()
    {
        $categories = $this->category->getAllCategory();
        return View::make('admin.category.index', compact('categories'));
    }

    public function createCategory()
    {
        return View::make('admin.category.create');
    }

    public function getCategory($id)
    {
        $category=$this->category->getCategoryById($id);
        return View::make('admin.category.edit',compact('category'));
    }

    public function saveCategory(Request $request, $id = null)
    {
        $collection = $request->except(['_token', '_method']);

        if (!is_null($id)) {
            $this->category->createOrUpdate($id, $collection);
        } else {
            $this->category->createOrUpdate($id = null, $collection);
        }

        return redirect()->route('category.show');
    }

    public function deleteCategory($id)
    {
        $this->category->deleteCategory($id);
        return redirect()->route('category.show');
    }
}
