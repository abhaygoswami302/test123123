<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VisibleHiddenProductsController extends Controller
{
    public function visibleProducts()
    {
        $user = User::where('id', '=', Auth::user()->id)->first();
        $products = $user->products->sortByDesc('updated_at')->where('visibility', '=', '1');
        /*$products = Product::where('user_id', '=', Auth::user()->id)->where('visibility', '=', '1')->get();*/
        return view('user.visibleHiddenProducts.visible', compact('products'));
    }

    public function hiddenProducts()
    {
        $user = User::where('id', '=', Auth::user()->id)->first();
        $products = $user->products->sortByDesc('updated_at')->where('visibility', '=', '0');
        /*$products = Product::where('user_id', '=', Auth::user()->id)->where('visibility', '=', '0')->get();*/
        return view('user.visibleHiddenProducts.hidden', compact('products'));
    }
}
