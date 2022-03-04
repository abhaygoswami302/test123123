<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $collections = Collection::all();
        $collections_count = count($collections);
        $products = Product::all();
        $products_count = count($products);
        $visible_products = Product::where('visibility' , '=', '1')->get();
        $visible_products_count = count($visible_products); 
        $hidden_products = Product::where('visibility' , '=', '0')->get();
        $hidden_products_count = count($hidden_products); 
        return view('admin.dashboard.index', compact('collections_count', 'products_count', 'visible_products_count', 'hidden_products_count'));
    }

    public function visible_products()
    {
        $products = Product::where('visibility', '=', '1')->latest()->paginate(40);
        return view('admin.dashboard.visible_products', compact('products'));
    }

    public function hidden_products()
    {
        $products = Product::where('visibility', '=', '0')->latest()->paginate(40);
        return view('admin.dashboard.hidden_products', compact('products'));
    }
}
