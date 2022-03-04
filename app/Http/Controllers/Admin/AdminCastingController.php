<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Casting;
use App\Models\Category;
use App\Models\Subseries;
use Illuminate\Http\Request;

class AdminCastingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $castings = Casting::latest()->get();
        return view('admin.castings.index', compact('castings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        $subseries = [];
        return view('admin.castings.create', compact('categories', 'subseries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subseries = Subseries::where('id', '=', $request->subseries_id)->first();        
        $casting = new Casting();
        $casting->subseries_id = $subseries->id;
        $casting->subseries_name = $subseries->name;
        $casting->casting_name= $request->name;
        if($request->file('image') <> null){
            $image1 = $request->file('image');
            $namewithextension1 = $image1->getClientOriginalName();
            $name1 = time().'.'.$image1->getClientOriginalExtension();
            $name11 = explode('.', $namewithextension1)[0].'_'.$name1;
            $destinationPath = public_path("images/castings/");
            $image1->move($destinationPath, $name11);
            $image11 ="images/castings/".$name11;
            $casting->image = $image11;
        }
        $casting->description = $request->description;
        $casting->save();

        return redirect()->back()->with('message', 'New Casting Added Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
