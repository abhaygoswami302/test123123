<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\LegoMinifiguresImport;
use App\Models\Product;
use App\Models\Temporary;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AdminLegoMinifigures extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $temporaries = Temporary::orderBy('created_at', 'DESC')->get();

        if($temporaries->all() == []){
            return redirect()->back()->with('error', 'No Temporary Products To Upload');

        }else{
        

        foreach($temporaries as $key => $temporary){

            $temppp = Product::where('toy_hash', '=', $temporary->toy_hash)->first();

            if($temppp <> null){
                $mytemp = Temporary::where('toy_hash', '=', $temppp->toy_hash)->first();
                $key = $key+1;
                return redirect()->back()->with(['toy_hash_error' => 'Toy Hash Already Exists', 'rows' => $mytemp, 'line' => $key]);
            }

            $product = new Product();

            /*$product->user_id = $temporary->user_id;
            $product->user_name = $temporary->user_name;*/
            $product->collection_id = $temporary->collection_id;
            $product->collection_name = $temporary->collection_name; 
            $product->series = $temporary->series; 
            $product->casting_name = $temporary->casting_name;
            $product->category_id = $temporary->category_id; 
            $product->subseries_id = $temporary->subseries_id; 
            $product->theme_id = $temporary->theme_id;
            $product->name  = $temporary->name;
            $product->category_name = $temporary->category_name;
            $product->subseries_name =  $temporary->subseries_name;
            $product->theme =  $temporary->theme;
            $product->model_name =  $temporary->model_name;
            $product->year =  $temporary->year;
            $product->colour = $temporary->colour;
            $product->tampo = $temporary->tampo;
            /*$product->decoration = $temporary->decoration;*/
            $product->base_colour = $temporary->base_colour;
            $product->type = $temporary->type;
            $product->window_colour = $temporary->window_colour;
            $product->interior_colour = $temporary->interior_colour;
            $product->wheel_type = $temporary->wheel_type;
            $product->visibility = $temporary->visibility;
            $product->country = $temporary->country;
            $product->class = $temporary->class;
            $product->notes = $temporary->notes;
            $product->toy_hash = $temporary->toy_hash;
            $product->col_hash = $temporary->col_hash;
            $product->series_hash = $temporary->series_hash;
            $product->lego_mf_fig_num = $temporary->lego_mf_fig_num;
            $product->lego_mf_name = $temporary->lego_mf_name;
            $product->lego_mf_num_parts = $temporary->lego_mf_num_parts;
            $product->image1 = $temporary->image1;
            $product->image2 = $temporary->image2; 
            $product->image3 = $temporary->image3;            
            $product->image4 = $temporary->image4;
            $product->image5 = $temporary->image5;
            $product->save();
    
            $temporary->delete();
            }
        }

            /*Temporary::query()
            ->where('user_id','=', Auth::user()->id)
            ->each(function ($oldRecord) {
            $request = $oldRecord->replicate();
            });*/

        return redirect()->back()->with('admin.legoproductsLoaded', 'Lego MiniFigures Products Uploaded Successfully');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $temporaries = Temporary::where('collection_name', '=', 'Lego MiniFigures')->latest()->paginate(40);

        return view('admin.csvs.create_lego_minigures', compact('temporaries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Excel::import(new LegoMinifiguresImport,request()->file('file'));
        return redirect()->back();
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
        $product = Temporary::where('id', '=', $id)->first();
        return view('admin.lego_minifigures.temp_edit', compact('product'));
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
        $product = Temporary::where('id', '=', $id)->first();
        $product->name = $request->name;
        $product->lego_mf_fig_num = $request->fig_num; 
        $product->lego_mf_num_parts = $request->num_parts;
        $product->visibility = $request->visibility;
        $product->save();

        return redirect()->route('lego_minifigures.create')->with([
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
        $temporaries = Temporary::where('id', '=', $id)->first();
        $temporaries->delete();

        return redirect()->back()->with('message', 'Temporary Lego Product Deleted');
    }
}
