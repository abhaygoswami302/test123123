<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsFilterController extends Controller
{
    public function index()
    {
        $products = Product::where('visibility', '=', '1')->latest()->paginate(50);
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
    }

    public function filter(Request $request)
    {

        if($request->name == null && $request->category_name == null && $request->series == null && $request->casting_name == null && $request->year == null){
            $products = Product::where('visibility', '=', '1')->latest()->paginate(50);
        }else{
         
            /*$products = Product::where([
                ['name', 'like', "%{$request->name}%"], 
                ['category_name', 'like', "%{$request->category_name}%"],
                ['series', 'like', "%{$request->series}%"],
                ['casting_name', 'like', "%{$request->casting_name}%"],
                ['year', 'like', "%{$request->year}%"]
            ])->latest()->paginate(50);*/
        
            $products = Product::where('visibility', '=', '1')
                                ->searchName($request->name)
                                ->searchCategoryName($request->category_name)
                                ->searchSeries($request->series)
                                ->searchCastingName($request->casting_name)
                                ->searchYear($request->year)->paginate(50);

             //SomeModel::searchBloodGroup($bloodGroup)->searchLocation($location)->get();

            /*$products = Product::where('visibility', '=', '1')
                        ->where('name', 'like', "%{$request->name}%")
                        ->where('category_name', 'like', "%{$request->category_name}%")
                        ->where('series', 'like', "%{$request->series}%")
                        ->where('casting_name', 'like', "%{$request->casting_name}%")
                        ->where('year', 'like', "%{$request->year}%")
                        ->latest()->paginate(50);*/
        }



        $categories = Product::distinct()->orderBy('category_name', 'DESC')->get(['category_name']);
        $series = Product::distinct()->orderBy('series', 'DESC')->get(['series']);
        $casting_name = Product::distinct()->orderBy('casting_name', 'DESC')->get(['casting_name']);
        $year = Product::distinct()->orderBy('year', 'DESC')->get(['year']);

        $requestName = $request->name;
        $requestCategoryName = $request->category_name;
        $requestSeries = $request->series;
        $requestCastingName = $request->casting_name;
        $requestYear = $request->year;

        return view('guest.products.index2', compact( 'products', 'categories', 'series', 'casting_name', 'year',
                    'requestName', 'requestCategoryName', 'requestSeries', 'requestCastingName', 'requestYear'));
    }
}
