<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\Subseries;
use Illuminate\Http\Request;

class AdminSeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Subseries::where('name', '<>', 'Lego MiniFigures')->latest()->get();
        return view('admin.series.index', compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('name', '<>', 'Lego MiniFigures')->latest()->get();
        return view('admin.series.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $collection = Collection::where('name', '=', $request->collection_name)->first();
        $category = Category::where('id', '=', $request->category_id)->first();

        $testseries = Subseries::where('category_name', '=', $category->name)
                                    ->where('name', '=', $request->name)->first();
    
        if($testseries <> null){
            return redirect()->back()->with('error', 'Subseries Already Exists With This Category');
        }

        $testseries123 = Subseries::where('category_name', '=', $category->name)
                                ->where('name', '=', $request->name)
                                ->where('series_name', '=', $request->series_name)->first();

        if($testseries123 <> null){
            return redirect()->back()->with('error', 'Series Already Exists With This Category And Subcategory');
        }

        $subseries = new Subseries();
        $subseries->category_id = $category->id;
        $subseries->collection_id = $collection->id;
        $subseries->name = $request->name;
        $subseries->series_name = $request->series_name;
        $subseries->category_name = $category->name;
        $subseries->collection_name = $collection->name;
        $subseries->save();

        return redirect()->back()->with('message', 'Subseries Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $series = Subseries::where('id', '=', $id)->first();
        
        if($series->collection_name == 'Hot Toys'){
            $products = Product::where('subseries_name', '=', $series->name)
            ->where('collection_name', '=', $series->collection_name)->latest()->paginate(40);
        }else{
            $products = Product::where('category_name', '=', $series->category_name)
            ->where('subseries_name', '=', $series->name)->latest()->paginate(40);
        }
    
        return view('admin.series.show', compact('products', 'series'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
