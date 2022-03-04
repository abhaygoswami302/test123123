<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\HotWheelToys;
use App\Models\Product;
use App\Models\User;
use App\Models\UserCollection;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $categories = Category::take(8)->inRandomOrder()->get();

        $usercollections = UserCollection::take(9)->get();

        /* $hotWheelToys = HotWheelToys::inRandomOrder()->get();

        if(count($hotWheelToys) == 0){
            if(count($usercollections) > 0){
                
                foreach ($usercollections as $key => $ucollection) {
                    $user = User::where('id', '=', $ucollection->user_id)->first();
                    $product = Product::where('id', '=', $ucollection->product_id)->first();
    
                    $hotWheelToy = new HotWheelToys();
                    $hotWheelToy->username = $user->username;
                    $hotWheelToy->collection_name = $product->collection_name;
                    $hotWheelToy->category_name = $product->category_name;
                    $hotWheelToy->model_name = $product->model_name;
                    $hotWheelToy->image = $product->image1;
                    
                    $hotWheelToy->save();
                }
            }
        }

        $hotWheelToys = HotWheelToys::inRandomOrder()->get();*/

        $hot_toy_products = Product::inRandomOrder()->take(9)->get();
    
        return view('welcome', compact('categories', 'hot_toy_products'));
    }
}
