<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCollectionController extends Controller
{
    public function show($id)
    {
        $collection = Collection::where('id', '=', $id)->first();
        $user = User::where('id', '=', Auth::user()->id)->first();
        $categories = $user->products->where('collection_id', '=', $id)->sortByDesc('updated_at')->groupBy('category_name');
        
        /*$categories = Product::where('user_id', '=', Auth::user()->id)
        ->orderBy('updated_at', 'DESC')->get()->groupBy('category_name');*/
        
        return view('user.collections.show', compact('collection', 'categories'));     
    }

    public function collection_products($id)
    {
        $category = Category::where('id', '=', $id)->first();
        $collection = Collection::where('id', '=', $category->collection_id)->first();
        $user = User::where('id', Auth::user()->id)->first();
        $products = $user->products->where('category_id', '=', $id)->sortByDesc('updated_at');
        /*$products = Product::where('user_id', '=', Auth::user()->id)->where('category_id', '=', $id)
        ->orderBy('updated_at', 'DESC')->get();*/
        return view('user.collections.collection_products', compact('category', 'collection', 'products'));    
    }
}
