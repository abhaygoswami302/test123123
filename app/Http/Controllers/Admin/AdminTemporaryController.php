<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\AdminTempImport;
use App\Imports\TempImport;
use App\Imports\TemporaryImport;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\Subseries;
use App\Models\Temporary;
use App\Models\Theme;
use Illuminate\Contracts\Validation\Validator;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\WithValidation;

class AdminTemporaryController extends Controller
{
    public function index()
    {
        $products = Temporary::where('collection_name', '=', 'Hot Wheels')->latest()->get();
        return view('admin.csvs.index', compact('products'));
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import(Request $request) 
    {

    if($request->hasFile('photos'))
    {
        $allowedfileExtension=['jpg','png', 'jpeg'];
        $files = $request->file('photos');
        foreach($files as $file){
            $namewithextension = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);
          
            if($check == false){
                return redirect()->back()->with('error', "Allowed file extensions : jpg, jpeg, png. Given file -- $namewithextension --");
            }
        }
            $extensions = array("xls","xlsx");

            $result = array($request->file('file')->getClientOriginalExtension());
        
            if(in_array($result[0],$extensions)){
                // Do something when Succeeded 
            }else{
                return redirect()->back()->with('error', "Allowed CSV file extensions : xls, xlsx, Given file -- $namewithextension --");
            }

        foreach($files as $file){
            $namewithextension = $file->getClientOriginalName();
            $name1 = explode('.', $namewithextension)[0];
            //$name =  $name1 .'_'. time().'.'.$file->getClientOriginalExtension();
            $name =  $name1 .'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path("tempimages/");
            $file->move($destinationPath, $name);
        }
    }

        Excel::import(new AdminTempImport,request()->file('file'));

        return redirect()->back();
       // return redirect()->back()->with('csvmessage', 'CSV Uploaded Successfully | Images Uploaded Successfully');
    }

    public function tempEdit($id)
    {
        $temp = Temporary::where('id', '=', $id)->first();
        $categories = Category::latest()->get();
        $subseries = Subseries::latest()->get();
        $themes = Theme::latest()->get();
        return view('admin.csvs.edit', compact('temp', 'categories', 'subseries', 'themes'));
    }

    public function tempUpdate($id, Request $request)
    {
        $temporary = Temporary::where('id', '=', $id)->first();
        $category = Category::where('name', '=', $temporary->category_name)->first();
        $subseries = Subseries::where('name', '=', $temporary->subseries_name)->first();
        $collection = Collection::where('id', '=', $subseries->collection_id)->first();
        $theme = Theme::where('name', '=', $temporary->theme)->first();

        /*$temporary->user_id = Auth::user()->id;
        $temporary->user_name = Auth::user()->name;*/
        $temporary->collection_id = $collection->id;
        $temporary->collection_name = $collection->name;
        $temporary->series = $category->name . " : " . $subseries->name;
        $temporary->casting_name = $subseries->casting;
        $temporary->category_id = $category->id;
        $temporary->subseries_id = $subseries->id;
        if($theme <> null){
        $temporary->theme_id = $theme->id;
        $temporary->theme =  $request->theme;
        }
        $temporary->name  = $request->name;
        $temporary->category_name = $request->category_name;
        $temporary->subseries_name =  $request->subseries_name;
        $temporary->model_name =  $request->model_name;
        $temporary->year =  $request->year;
        $temporary->colour = $request->colour;
        $temporary->tampo = $request->tampo;
        /*$temporary->decoration = $request->decoration;*/
        $temporary->base_colour = $request->base_colour;
        $temporary->type = $request->type;
        $temporary->window_colour = $request->window_colour;
        $temporary->interior_colour = $request->interior_colour;
        $temporary->wheel_type = $request->wheel_type;
        $temporary->visibility = $request->visibility;
        $temporary->country = $request->country;
        $temporary->class = $request->class;
        $temporary->notes = $request->notes;

        if($request->file('image1') <> null){
            $image1 = $request->file('image1');
            $namewithextension1 = $image1->getClientOriginalName();
            $name1 = time().'.'.$image1->getClientOriginalExtension();
            $name11 = explode('.', $namewithextension1)[0].'_'.$name1;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image1->move($destinationPath, $name11);
            $image11 ="images/$category->name/$collection->name/".$name11;
            $temporary->image1 = $image11;
        }

        if($request->file('image2') <> null){
            $image2 = $request->file('image2');
            $namewithextension2 = $image2->getClientOriginalName();
            $name2 = time().'.'.$image2->getClientOriginalExtension();
            $name21 = explode('.', $namewithextension2)[0].'_'.$name2;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image2->move($destinationPath, $name21);
            $image21 ="images/$category->name/$collection->name/".$name21;
            $temporary->image2 = $image21;
        }

        if($request->file('image3') <> null){
            $image3 = $request->file('image3');
            $namewithextension3 = $image3->getClientOriginalName();
            $name3 = time().'.'.$image3->getClientOriginalExtension();
            $name31 = explode('.', $namewithextension3)[0].'_'.$name3;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image3->move($destinationPath, $name31);
            $image31 ="images/$category->name/$collection->name/".$name31;
            $temporary->image3 = $image31;
        }

        if($request->file('image4') <> null){
            $image4 = $request->file('image4');
            $namewithextension4 = $image4->getClientOriginalName();
            $name4 = time().'.'.$image4->getClientOriginalExtension();
            $name41 = explode('.', $namewithextension4)[0].'_'.$name4;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image4->move($destinationPath, $name41);
            $image41 ="images/$category->name/$collection->name/".$name41;
            $temporary->image4 = $image41;
        }

        if($request->file('image5') <> null){
            $image5 = $request->file('image5');
            $namewithextension5 = $image5->getClientOriginalName();
            $name5 = time().'.'.$image5->getClientOriginalExtension();
            $name51 = explode('.', $namewithextension5)[0].'_'.$name5;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image5->move($destinationPath, $name51);
            $image51 ="images/$category->name/$collection->name/".$name51;
            $temporary->image5 = $image51;
        }


        $temporary->toy_hash = $request->toy_hash;
        $temporary->col_hash = $request->col_hash;
        $temporary->series_hash = $request->series_hash;
        $temporary->save();

        return redirect()->route('admin.tempIndex')->with('tempEdit', 'Product Edited Successfully');
    }

    public function tempDelete($id)
    {
        $temp = Temporary::where('id', '=', $id)->first();
        $temp->delete();

        return redirect()->back()->with('tempDelete', 'Product Deleted Successfully');
    }

    public function loadProducts()
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

        return redirect()->route('admin.csv.create')->with('admin.productsLoaded', 'Products Uploaded Successfully');
    }

    public function destroy_temp_products()
    {
         $temporaries = Temporary::all();

         foreach($temporaries as $temp123){
            $temp123->delete();
         }

         return redirect()->back()->with('message', 'All Temporary Products Deleted');
    }
}
