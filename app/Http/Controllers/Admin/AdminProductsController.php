<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductPostRequest;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\Subseries;
use App\Models\Theme;
use App\Models\UserCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('collection_name', '=', 'Hot Wheels')->latest()->paginate(40);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        $subseries = Subseries::latest()->get();
        $themes = Theme::latest()->get();

        return view('admin.products.create', compact('categories', 'subseries', 'themes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'year' => 'required|numeric',
            'colour' => 'max:255',
            'tampo' => 'max:255|nullable',
            'base_colour' => 'max:255|nullable',
            'type' => 'max:255|nullable',
            'window_colour' => 'max:255|nullable',
            'interior_colour' => 'max:255|nullable',
            'wheel_type' => 'max:255|nullable',
            'country' => 'max:255|nullable',
            'class' => 'max:255|required',
            'notes' => 'nullable',
            'visibility' => 'required|max:20',
            'toy_hash' => 'max:50|required|unique:temporaries,toy_hash|unique:products,toy_hash',
            'col_hash' => 'max:50',
            'series_hash' => 'max:50',
            'image1' => 'mimes:jpeg,jpg,png|max:10000|nullable', 
            'image2' => 'mimes:jpeg,jpg,png|max:10000|nullable', 
            'image3' => 'mimes:jpeg,jpg,png|max:10000|nullable', 
            'image4' => 'mimes:jpeg,jpg,png|max:10000|nullable', 
            'image5' => 'mimes:jpeg,jpg,png|max:10000|nullable', 
        ]);

        $product = new Product();
        $category = Category::where('id', '=', $request->category_name)->first();
        $subseries = Subseries::where('id', '=', $request->subseries_name)->first();
        $collection = Collection::where('id', '=', $subseries->collection_id)->first();
        $theme = Theme::where('id', '=', $request->theme)->first();

        /*$product->user_id = Auth::user()->id;
        $product->user_name = Auth::user()->name;*/
        $product->collection_id = $collection->id;
        $product->collection_name = $collection->name;
        $product->series = $request->series;
        $product->casting_name = $request->casting_name;
        $product->category_id = $category->id;
        $product->subseries_id = $subseries->id;
        if($theme <> null){
            $product->theme_id = $theme->id;
            $product->theme =  $theme->name;
        }
        $product->name  = $request->name;
        $product->category_name = $category->name;
        $product->subseries_name =  $subseries->name;
        $product->model_name =  $request->model_name;
        $product->year =  $request->year;
        $product->colour = $request->colour;
        $product->tampo = $request->tampo;
        $product->decoration = $request->decoration;
        $product->base_colour = $request->base_colour;
        $product->type = $request->type;
        $product->window_colour = $request->window_colour;
        $product->interior_colour = $request->interior_colour;
        $product->wheel_type = $request->wheel_type;
        $product->visibility = $request->visibility;
        $product->country = $request->country;
        $product->class = $request->class;
        $product->toy_hash = $request->toy_hash;
        $product->col_hash = $request->col_hash;
        $product->series_hash = $request->series_hash;
        $product->notes = $request->notes;
      
        if($request->file('image1') <> null){
            $image1 = $request->file('image1');
            $namewithextension1 = $image1->getClientOriginalName();
            $name1 = time().'.'.$image1->getClientOriginalExtension();
            $name11 = explode('.', $namewithextension1)[0].'_'.$name1;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image1->move($destinationPath, $name11);
            $image11 ="images/$category->name/$collection->name/".$name11;
            $product->image1 = $image11;
        }

        if($request->file('image2') <> null){
            $image2 = $request->file('image2');
            $namewithextension2 = $image2->getClientOriginalName();
            $name2 = time().'.'.$image2->getClientOriginalExtension();
            $name21 = explode('.', $namewithextension2)[0].'_'.$name2;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image2->move($destinationPath, $name21);
            $image21 ="images/$category->name/$collection->name/".$name21;
            $product->image2 = $image21;
        }

        if($request->file('image3') <> null){
            $image3 = $request->file('image3');
            $namewithextension3 = $image3->getClientOriginalName();
            $name3 = time().'.'.$image3->getClientOriginalExtension();
            $name31 = explode('.', $namewithextension3)[0].'_'.$name3;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image3->move($destinationPath, $name31);
            $image31 ="images/$category->name/$collection->name/".$name31;
            $product->image3 = $image31;
        }

        if($request->file('image4') <> null){
            $image4 = $request->file('image4');
            $namewithextension4 = $image4->getClientOriginalName();
            $name4 = time().'.'.$image4->getClientOriginalExtension();
            $name41 = explode('.', $namewithextension4)[0].'_'.$name4;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image4->move($destinationPath, $name41);
            $image41 ="images/$category->name/$collection->name/".$name41;
            $product->image4 = $image41;
        }

        if($request->file('image5') <> null){
            $image5 = $request->file('image5');
            $namewithextension5 = $image5->getClientOriginalName();
            $name5 = time().'.'.$image5->getClientOriginalExtension();
            $name51 = explode('.', $namewithextension5)[0].'_'.$name5;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image5->move($destinationPath, $name51);
            $image51 ="images/$category->name/$collection->name/".$name51;
            $product->image5 = $image51;
        }

        $product->save();

        $product_stored_id = Product::where('toy_hash', '=', $request->toy_hash)
        ->where('name', '=', $request->name)->first();

        $usercollection = new UserCollection();
        $usercollection->user_id = Auth::user()->id;
        $usercollection->product_id = $product_stored_id->id;
        $usercollection->save();

        return redirect()->back()->with([
            'admin_product_added'=> 'Product Added Successfully',
            'product_id' => $product->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', '=', $id)->first();
        return view('admin.products.show', compact('product'));
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
        return view('admin.products.edit', compact('product'));
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
            'year' => 'required|numeric',
            'colour' => 'max:255',
            'tampo' => 'max:255|nullable',
            'base_colour' => 'max:255|nullable',
            'type' => 'max:255|nullable',
            'window_colour' => 'max:255|nullable',
            'interior_colour' => 'max:255|nullable',
            'wheel_type' => 'max:255|nullable',
            'country' => 'max:255|nullable',
            'class' => 'max:255|required',
            'notes' => 'nullable',
            'visibility' => 'required|max:20',
            'toy_hash' => 'max:50|required',
            'col_hash' => 'max:50',
            'series_hash' => 'max:50',
            'image1' => 'mimes:jpeg,jpg,png|max:10000|nullable', 
            'image2' => 'mimes:jpeg,jpg,png|max:10000|nullable', 
            'image3' => 'mimes:jpeg,jpg,png|max:10000|nullable', 
            'image4' => 'mimes:jpeg,jpg,png|max:10000|nullable', 
            'image5' => 'mimes:jpeg,jpg,png|max:10000|nullable', 
        ]);

      $product_toy_hash = Product::where('toy_hash', '=', $request->toy_hash)
                            ->where('id', '<>', $id)->first();

      if($product_toy_hash <> null){
          return redirect()->back()->with('error', 'Toy Hash Already Exists');
      }

        $product = Product::where('id', '=', $id)->first();
        $product->name = $request->name;
        $product->category_name = $request->category_name; 
        $product->subseries_name = $request->subseries_name;
        $product->theme = $request->theme;
        $product->model_name = $request->model_name;
        $product->collection_name = $request->collection_name;
        $product->series = $request->series;
        $product->casting_name = $request->casting_name;
        $product->year = $request->year; 
        $product->colour = $request->colour;
        $product->tampo = $request->tampo;
        $product->base_colour = $request->base_colour;
        $product->type = $request->type;
        $product->window_colour = $request->window_colour;
        $product->interior_colour = $request->interior_colour;
        $product->wheel_type = $request->wheel_type;
        $product->visibility = $request->visibility;
        $product->country = $request->country;
        $product->class = $request->class;
        $product->toy_hash = $request->toy_hash;
        $product->col_hash = $request->col_hash;
        $product->series_hash = $request->series_hash;
        $product->notes = $request->notes;

        if($request->file('image1') <> null){
            $image1 = $request->file('image1');
            $namewithextension1 = $image1->getClientOriginalName();
            $name1 = time().'.'.$image1->getClientOriginalExtension();
            $name11 = explode('.', $namewithextension1)[0].'_'.$name1;
            $destinationPath = public_path("images/$request->category_name/$request->collection_name/");
            $image1->move($destinationPath, $name11);
            $image11 ="images/$request->category_name/$request->collection_name/".$name11;
            $product->image1 = $image11;
        }

        if($request->file('image2') <> null){
            $image2 = $request->file('image2');
            $namewithextension2 = $image2->getClientOriginalName();
            $name2 = time().'.'.$image2->getClientOriginalExtension();
            $name21 = explode('.', $namewithextension2)[0].'_'.$name2;
            $destinationPath = public_path("images/$request->category_name/$request->collection_name/");
            $image2->move($destinationPath, $name21);
            $image21 ="images/$request->category_name/$request->collection_name/".$name21;
            $product->image2 = $image21;
        }

        if($request->file('image3') <> null){
            $image3 = $request->file('image3');
            $namewithextension3 = $image3->getClientOriginalName();
            $name3 = time().'.'.$image3->getClientOriginalExtension();
            $name31 = explode('.', $namewithextension3)[0].'_'.$name3;
            $destinationPath = public_path("images/$request->category_name/$request->collection_name/");
            $image3->move($destinationPath, $name31);
            $image31 ="images/$request->category_name/$request->collection_name/".$name31;
            $product->image3 = $image31;
        }

        if($request->file('image4') <> null){
            $image4 = $request->file('image4');
            $namewithextension4 = $image4->getClientOriginalName();
            $name4 = time().'.'.$image4->getClientOriginalExtension();
            $name41 = explode('.', $namewithextension4)[0].'_'.$name4;
            $destinationPath = public_path("images/$request->category_name/$request->collection_name/");
            $image4->move($destinationPath, $name41);
            $image41 ="images/$request->category_name/$request->collection_name/".$name41;
            $product->image4 = $image41;
        }

        if($request->file('image5') <> null){
            $image5 = $request->file('image5');
            $namewithextension5 = $image5->getClientOriginalName();
            $name5 = time().'.'.$image5->getClientOriginalExtension();
            $name51 = explode('.', $namewithextension5)[0].'_'.$name5;
            $destinationPath = public_path("images/$request->category_name/$request->collection_name/");
            $image5->move($destinationPath, $name51);
            $image51 ="images/$request->category_name/$request->collection_name/".$name51;
            $product->image5 = $image51;
        }

        $product->save();

        return redirect()->back()->with([
            'admin_products_edit'=> 'Product Edited Successfully',
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
        $product = Product::where('id', '=', $id)->first();
        $product->delete();

        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }
}
