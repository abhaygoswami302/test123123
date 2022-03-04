<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $collections = Collection::where('name', '<>', 'Lego MiniFigures')->latest()->get();
        return view('admin.categories.create', compact('collections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'collection_id' => 'required|numeric',
            'image' => 'mimes:jpeg,jpg,png|max:10000', 
        ]);

        if($request->file('image') <> null){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path("images/Collections/");
            $image->move($destinationPath, $name);
            $category_image ="images/Collections/".$name;
        }

        $collection = Collection::where('id', '=', $request->collection_id)->first();
        $category = new Category();
        $category->name = $request->name;
        $category->collection_id = $collection->id;
        $category->collection_name = $collection->name;
        $category->description = $request->description;
        if($request->file('image') <> null){
            $category->image = $category_image;
        }
        $category->save();

        return redirect()->back()->with('message', 'Category Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::where('category_id', '=', $id)->latest()->get();
        $category = Category::where('id', '=', $id)->first();
        return view('admin.categories.show', compact('products', 'category'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id', '=', $id)->first();
        return view('admin.categories.edit', compact('category'));
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
        $category = Category::where('id', '=', $id)->first();

        $category->description = $request->description;

        if($request->file('image') <> null){
            $image1 = $request->file('image');
            $namewithextension1 = $image1->getClientOriginalName();
            $name1 = time().'.'.$image1->getClientOriginalExtension();
            $name11 = explode('.', $namewithextension1)[0].'_'.$name1;
            $destinationPath = public_path("images/$request->name/");
            $image1->move($destinationPath, $name11);
            $image11 ="images/$request->name/".$name11;
            $category->image = $image11;
        }


        $category->save();

        return redirect()->route('admin_categories.index')->with('message', 'Category Updated');
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
