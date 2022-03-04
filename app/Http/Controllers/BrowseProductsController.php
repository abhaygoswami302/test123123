<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Theme;
use Illuminate\Http\Request;

class BrowseProductsController extends Controller
{
    public function byyear($year)
    {
        $products = Product::where('year', '=', $year)->where('visibility', '=', '1')->paginate(5);
        return view('guest.BrowseProducts.byyear', compact('products', 'year'));
    }
    
    public function bycasting($casting)
    {
        $products = Product::where('casting_name', '=', $casting)->where('visibility', '=', '1')->paginate(30);
        return view('guest.BrowseProducts.bycasting', compact('products', 'casting'));
    }
        
    public function byseries($series)
    {
        $products = Product::where('series', '=', $series)->where('visibility', '=', '1')->paginate(30);
        return view('guest.BrowseProducts.byseries', compact('products', 'series'));
    }

    public function bytheme($theme)
    {
        $products = Product::where('theme_id', '=', $theme)->where('visibility', '=', '1')->paginate(30);
        $themename = Theme::where('id', '=', $theme)->first();
        $themename = $themename->name;
        return view('guest.BrowseProducts.bytheme', compact('products', 'themename'));
    }
}
