<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCategoryController extends Controller
{
    public function show($id)
    {
        $category = Category::where('id', '=', $id)->first();
        $collection = Collection::where('id', '=', $category->collection_id)->first();
        $user = User::where('id', '=', Auth::user()->id)->first();
        $products = $user->products->sortByDesc('updated_at')
                                        ->where('category_id', '=', $id);
       
        /*$products = Product::where('user_id', '=', Auth::user()->id)->where('category_id', '=', $id)
        ->orderBy('updated_at', 'DESC')->get();*/
        return view('user.categories.show', compact('category', 'collection', 'products'));    

    }
}
