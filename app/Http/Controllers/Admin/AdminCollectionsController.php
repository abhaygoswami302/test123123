<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Collection;
use Collator;
use Illuminate\Http\Request;

class AdminCollectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Collection::latest()->get();
        return view('admin.collections.index', compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.collections.create');
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
            'image' => 'mimes:jpeg,jpg,png|max:10000', 
        ]);

        if($request->file('image') <> null){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path("images/Collections/");
            $image->move($destinationPath, $name);
            $collection_image ="images/Collections/".$name;
        }

        $collection = new Collection();
        $collection->name = $request->name;
        $collection->description = $request->description;
        if($request->file('image') <> null){
            $collection->image = $collection_image;
        }
        $collection->save();

        return redirect()->back()->with('message', 'Collection Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::where('collection_id', '=', $id)->get();
        $collection = Collection::where('id', '=', $id)->first();
        return view('admin.collections.show', compact('categories', 'collection'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $collection = Collection::where('id', '=', $id)->first();
        return view('admin.collections.edit', compact('collection'));
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
        $collection = Collection::where('id', '=', $id)->first();

        $collection->description = $request->description;

        if($request->file('image') <> null){
            $image1 = $request->file('image');
            $namewithextension1 = $image1->getClientOriginalName();
            $name1 = time().'.'.$image1->getClientOriginalExtension();
            $name11 = explode('.', $namewithextension1)[0].'_'.$name1;
            $destinationPath = public_path("images/$request->name/");
            $image1->move($destinationPath, $name11);
            $image11 ="images/$request->name/".$name11;
            $collection->image = $image11;
        }

        $collection->save();

        return redirect()->route('admin_collections.index')->with('message', 'Collection Updated');
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
