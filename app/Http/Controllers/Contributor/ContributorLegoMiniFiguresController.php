<?php

namespace App\Http\Controllers\Contributor;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ContributorLegoMiniFiguresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('collection_name', '=', 'Lego MiniFigures')->latest()->paginate(40);
        return view('contributor.lego_minifigures.index', compact('products'));
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
        $product = Product::where('id', '=', $id)->first();
        return view('contributor.lego_minifigures.edit', compact('product'));
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
        $this->validate($request, [
            'name' => 'required',
            'fig_num' => 'required',
            'num_parts' => 'required',
        ]);

        $product = Product::where('id', '=', $id)->first();
        $product->name = $request->name;
        $product->lego_mf_fig_num = $request->fig_num; 
        $product->lego_mf_num_parts = $request->num_parts;
        $product->visibility = $request->visibility;
        if($request->file('image1') <> null){
            $image1 = $request->file('image1');
            $namewithextension1 = $image1->getClientOriginalName();
            $name1 = time().'.'.$image1->getClientOriginalExtension();
            $name11 = explode('.', $namewithextension1)[0].'_'.$name1;
            $destinationPath = public_path("images/Lego MiniFigures/");
            $image1->move($destinationPath, $name11);
            $image11 ="images/Lego MiniFigures/".$name11;
            $product->image1 = $image11;
        }

        if($request->file('image2') <> null){
            $image2 = $request->file('image2');
            $namewithextension2 = $image2->getClientOriginalName();
            $name2 = time().'.'.$image2->getClientOriginalExtension();
            $name21 = explode('.', $namewithextension2)[0].'_'.$name2;
            $destinationPath = public_path("images/Lego MiniFigures/");
            $image2->move($destinationPath, $name21);
            $image21 ="images/Lego MiniFigures/".$name21;
            $product->image2 = $image21;
        }

        if($request->file('image3') <> null){
            $image3 = $request->file('image3');
            $namewithextension3 = $image3->getClientOriginalName();
            $name3 = time().'.'.$image3->getClientOriginalExtension();
            $name31 = explode('.', $namewithextension3)[0].'_'.$name3;
            $destinationPath = public_path("images/Lego MiniFigures/");
            $image3->move($destinationPath, $name31);
            $image31 ="images/Lego MiniFigures/".$name31;
            $product->image3 = $image31;
        }

        if($request->file('image4') <> null){
            $image4 = $request->file('image4');
            $namewithextension4 = $image4->getClientOriginalName();
            $name4 = time().'.'.$image4->getClientOriginalExtension();
            $name41 = explode('.', $namewithextension4)[0].'_'.$name4;
            $destinationPath = public_path("images/Lego MiniFigures/");
            $image4->move($destinationPath, $name41);
            $image41 ="images/Lego MiniFigures/".$name41;
            $product->image4 = $image41;
        }

        if($request->file('image5') <> null){
            $image5 = $request->file('image5');
            $namewithextension5 = $image5->getClientOriginalName();
            $name5 = time().'.'.$image5->getClientOriginalExtension();
            $name51 = explode('.', $namewithextension5)[0].'_'.$name5;
            $destinationPath = public_path("images/Lego MiniFigures/");
            $image5->move($destinationPath, $name51);
            $image51 ="images/Lego MiniFigures/".$name51;
            $product->image5 = $image51;
        }

        $product->save();

        return redirect()->back()->with([
            'lego_minifigures_products_edit'=> 'Product Edited Successfully',
            'product_id' => $product->id
        ]);
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
