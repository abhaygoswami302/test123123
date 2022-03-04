<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('visibility', '=', '1')->inRandomOrder()->paginate(50);
        $categories = Product::where('visibility', '=', '1')->distinct()->orderBy('category_name', 'ASC')->get(['category_name']);
        $series = Product::where('visibility', '=', '1')->distinct()->orderBy('series', 'ASC')->get(['series']);
        $casting_name = Product::where('visibility', '=', '1')->distinct()->orderBy('casting_name', 'ASC')->get(['casting_name']);
        $year = Product::where('visibility', '=', '1')->distinct()->orderBy('year', 'DESC')->get(['year']);
        $filtered_products = [];

        $requestName = '';
        $requestCategoryName = '';
        $requestSeries = '';
        $requestCastingName = '';
        $requestYear = '';

        return view('guest.products.index', compact('products', 'categories', 
        'series', 'casting_name', 'year', 'filtered_products',  'requestName', 
        'requestCategoryName', 'requestSeries', 'requestCastingName', 'requestYear'));

       // $products = Product::orderBy('created_at', 'DESC')->get();
       // return view('guest.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $demo = Product::where('series', '=', $product->series)->where('visibility', '=', '1')->first();
        $products = Product::where('series', '=', $product->series)
                            ->where('visibility', '=', '1')
                            ->orWhere('category_name', '=', $demo->category_name)
                            ->take(3)->inRandomOrder()->get();
        return view('guest.products.show', compact('product', 'products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
