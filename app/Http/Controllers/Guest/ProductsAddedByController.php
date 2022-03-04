<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductsAddedByController extends Controller
{
    public function show($id)
    {
        $user = User::where('id', '=', $id)->first();
        $products = Product::where('user_id', '=', $id)
                            ->where('visibility', '=', '1')->latest()->get();

        $total_products = Product::where('user_id', '=', $id)->get();
        $total_products = count($total_products);

        $visible_products = Product::where('user_id', '=', $id)->where('visibility', '=', '1')->get();
        $visible_products = count($visible_products);

        $hidden_products = Product::where('user_id', '=', $id)->where('visibility', '=', '0')->get();
        $hidden_products = count($hidden_products);

        return view('guest.products.users', compact('user', 'products', 'total_products', 'visible_products', 'hidden_products'));
    }
}
