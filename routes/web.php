<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/home', function () {
    return view('admin.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/category',[CategoryController::class,'showCategory'])->name('category.show');
Route::get('/category/create',[CategoryController::class,'createCategory'])->name('category.create');
Route::post('/category/create',[CategoryController::class,'saveCategory'])->name('category.store');
Route::get('/category/edit/{id}',[CategoryController::class,'getCategory'])->name('category.edit');
Route::put('/category/edit/{id}',[CategoryController::class,'saveCategory'])->name('category.update');
Route::get('/category/delete/{id}',[CategoryController::class,'deleteCategory'])->name('category.delete');


Route::get('/product',[ProductController::class,'showProduct'])->name('product.show');
Route::get('/product/create',[ProductController::class,'createProduct'])->name('product.create');
Route::post('/product/create',[ProductController::class,'saveProduct'])->name('product.store');
Route::get('/product/edit/{id}',[ProductController::class,'getProduct'])->name('product.edit');
Route::put('/product/edit/{id}',[ProductController::class,'saveProduct'])->name('product.update');
Route::get('/product/delete/{id}',[ProductController::class,'deleteProduct'])->name('product.delete');
