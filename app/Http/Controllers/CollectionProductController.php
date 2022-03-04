<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use Illuminate\Http\Request;

class CollectionProductController extends Controller
{
    public function index($id)
    {
        $category = Category::where('id', '=', $id)->first();
        $collection = Collection::where('id', '=', $category->collection_id)->first();
        $subseries = Product::where('category_id', '=', $id)->where('visibility', '=', '1')
        ->orderBy('year', 'DESC')->get()->groupBy('year');
    
        $subseries123 = Product::where('category_id', '=', $id)->where('visibility', '=', '1')
            ->orderBy('year', 'DESC')->get()->groupBy('year');

        return view('guest.collections.collection_products', 
        compact('subseries', 'subseries123', 'category', 'collection'));
        
    }
}
