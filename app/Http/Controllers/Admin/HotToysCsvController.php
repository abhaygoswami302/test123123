<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\HotToysImport;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Temporary;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HotToysCsvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $temporaries = Temporary::where('collection_name', '=', 'Hot Toys')->orderBy('created_at', 'DESC')->get();

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
            $product->category_name = $temporary->category_name;
            $product->lego_mf_name = $temporary->lego_mf_name;
            $product->lego_mf_num_parts = $temporary->lego_mf_num_parts;
            $product->image1 = $temporary->image1;
            $product->image2 = $temporary->image2; 
            $product->image3 = $temporary->image3;            
            $product->image4 = $temporary->image4;
            $product->image5 = $temporary->image5;
            $product->save();

            $temp = Temporary::where('toy_hash', '=', $temporary->toy_hash)
            ->where('name', '=', $temporary->name)
            ->where('collection_name', '=',  $temporary->collection_name)
            ->first();

            $product_id = Product::where('toy_hash', '=', $temporary->toy_hash)
            ->where('name', '=', $temporary->name)
            ->where('collection_name', '=',  $temporary->collection_name)
            ->first();

            ProductImage::create([
            'product_id'  => $product_id->id,
            'name'  => $temporary->name,
            'collection_name'  => $temporary->collection_name,
            'image5' => $temporary->image5,
            'image6' => $temporary->image6,
            'image7' => $temporary->image7,
            'image8' => $temporary->image8,
            'image9' => $temporary->image9,
            'image10' => $temporary->image10,
            'image11' => $temporary->image11,
            'image12' => $temporary->image12,
            'image13' => $temporary->image13,
            'image14' => $temporary->image14,
            'image15' => $temporary->image15,
            'image16' => $temporary->image16,
            'image17' => $temporary->image17,
            'image18' => $temporary->image18,
            'image19' => $temporary->image19,
            'image20' => $temporary->image20,
            'image21' => $temporary->image21,
            'image22' => $temporary->image22,
            'image23' => $temporary->image23,
            'image24' => $temporary->image24,
            'image25' => $temporary->image25,
            'image26' => $temporary->image26,
            'image27' => $temporary->image27,
            'image28' => $temporary->image28,
            'image29' => $temporary->image29,
            'image30' => $temporary->image30,
            'image31' => $temporary->image31,
            'image32' => $temporary->image32,
            'image33' => $temporary->image33,
            'image34' => $temporary->image34,
            'image35' => $temporary->image35,
            'image36' => $temporary->image36,
            'image37' => $temporary->image37,
            'image38' => $temporary->image38,
            ]);

            //dd($temporary);
            $temporary->delete();
            }
        }

        return redirect()->back()->with('admin.hottoysproductsLoaded', 'Hot Toys Products Uploaded Successfully');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $temporaries = Temporary::where('collection_name', '=', 'Hot Toys')->latest()->paginate(40);
        return view('admin.hottoys.csv.create', compact('temporaries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Excel::import(new HotToysImport,request()->file('file'));
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
        $categories = Category::where('collection_name', '=', 'Hot Toys')->get();
        return view('admin.hottoys.csv.edit', compact('product', 'categories'));
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
            'name'  => 'required',
            'category_name' => 'required',
            'toy_hash' => 'required|unique:products,toy_hash',
        ]);

        $product = Temporary::where('id', '=', $id)->first();
        $product->name = $request->name;
        $product->category_name = $request->category_name; 
        $product->notes = $request->notes;
        $product->toy_hash = $request->toy_hash;
        $product->visibility = $request->visibility;
        $product->save();

        return redirect()->route('hotToysCsv.create')->with([
            'hot_toys_products_edit'=> 'Product Edited Successfully',
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
        return redirect()->back()->with('message', 'Temporary Hot Toys Product Deleted');

    }
}
