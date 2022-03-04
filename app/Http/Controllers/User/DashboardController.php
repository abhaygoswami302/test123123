<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        //$collections = Collection::orderBy('updated_at', 'DESC')->take(9)->get();
        //$categories = Category::orderBy('updated_at', 'DESC')->take(9)->get();
        
        /*$collections = Product::where('user_id', '=', Auth::user()->id)
        ->orderBy('updated_at', 'DESC')->get()->groupBy('collection_name');
        $categories = Product::where('user_id', '=', Auth::user()->id)
        ->orderBy('updated_at', 'DESC')->get()->groupBy('category_name');
        $products = Product::where([
            ['user_id', '=', Auth::user()->id]
        ])->orderBy('updated_at', 'DESC')->paginate(6);
        */
        $user = User::where('id', '=', Auth::user()->id)->first();

        $collections = $user->products->sortByDesc('updated_at')->groupBy('collection_name');
        $categories = $user->products->sortByDesc('updated_at')->groupBy('category_name');
        $products = $user->products->sortByDesc('updated_at')->take(6);

        $total_products = $user->products;
        $total_products = count($total_products);

        return view('user.dashboard', compact('collections' , 'total_products', 'categories', 'products'));

    }
}
