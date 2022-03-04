<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\Subseries;
use App\Models\Temporary;
use App\Models\UserCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLegoMiniFiguresController extends Controller
{
    public function selectForm(Request $request)
    {
        if($request->new_product_flag == '1'){
            return view('user.products.create_lego_minifigures');
        }elseif($request->new_product_flag == '2'){
            return redirect()->route('userproduct.create');
        }elseif($request->new_product_flag == '3'){
            return redirect()->route('user_hot_toys.create');
        }else{
            return redirect()->back();
        }
    }

    public function create()
    {
        return view('user.products.create_lego_minifigures');
    }

    public function store(Request $request)
    {
        $collection_name = Collection::where('name', '=', 'Lego MiniFigures')->first();

        if($collection_name == null){
            $mycollection = new Collection();
            $mycollection->name = 'Lego MiniFigures';
            $mycollection->description = 'Lego MiniFigures';
            $mycollection-> save();
        }

        $lm_collection = Collection::where('name', '=', 'Lego MiniFigures')->first();

        $category_name = Category::where('name', '=', 'Lego MiniFigures')->first();

        if($category_name == null){
            $mycategory = new Category();
            $mycategory->collection_id = $lm_collection->id;
            $mycategory->collection_name = $lm_collection->name;
            $mycategory->name = 'Lego MiniFigures';
            $mycategory->description = 'Lego MiniFigures';
            $mycategory-> save();
        }

        $lm_category = Category::where('name', '=', 'Lego MiniFigures')->first();

        $subseries_name = Subseries::where('name', '=', 'Lego MiniFigures')->first();

        if($subseries_name == null){
            $mysubseries = new Subseries();
            $mysubseries->category_id = $lm_category->id;
            $mysubseries->collection_id = $lm_collection->id;
            $mysubseries->name = 'Lego MiniFigures';
            $mysubseries->series_name = 'Lego MiniFigures';
            $mysubseries->collection_name = 'Lego MiniFigures';
            $mysubseries->category_name = 'Lego MiniFigures';
            $mysubseries-> save();
        }

        $lm_series = Subseries::where('name', '=', 'Lego MiniFigures')->first();

        $digits = 10;
        $random= rand(pow(10, $digits-1), pow(10, $digits)-1);
        $toy_hash = 'toy_hash_for_lego_mf'.$random;
             
        $product = new Product();
        $product->collection_id = $lm_collection->id;
        $product->collection_name = $lm_collection->name;
        $product->series = 'Lego MiniFigures';
        $product->casting_name ='Lego MiniFigures';
        $product->category_id = $lm_category->id;
        $product->subseries_id = $lm_series->id;
        $product->name = $request->product_name;
        $product->category_name = 'Lego MiniFigures';
        $product->subseries_name = 'Lego MiniFigures';
        $product->theme = 'Lego MiniFigures';
        $product->model_name = 'Lego MiniFigures';
        $product->year = '0';
        $product->visibility = $request->visibility;
        $product->toy_hash = $toy_hash;
        $product->lego_mf_fig_num = $request->fig_num;
        $product->lego_mf_name = $request->product_name;
        $product->lego_mf_num_parts = $request->num_parts;

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
        
        $product_stored_id = Product::where('toy_hash', '=', $toy_hash)
        ->where('name', '=', $request->product_name)->first();

        $usercollection = new UserCollection();
        $usercollection->user_id = Auth::user()->id;
        $usercollection->product_id = $product_stored_id->id;
        $usercollection->save();

        return redirect()->route('user.lego.minifigures.create')->with('message', 'Lego MiniFigures Product Created successfully');
    }
}
