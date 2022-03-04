<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CollectionProductsController extends Controller
{
    public function index($id)
    {
        $products = Product::where('category_id', '=', $id)->latest()->get();
        $category = Category::where('id', '=', $id)->first();
        return view('admin.collections.collection_products', compact('products', 'category'));
    }
}
