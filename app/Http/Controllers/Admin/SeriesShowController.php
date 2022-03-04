<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SeriesShowController extends Controller
{
    public function index($series)
    {
        $products = Product::where('series', '=', $series)->latest()->get();
        return view('admin.series.custom_show', compact('products', 'series'));
    }
}
