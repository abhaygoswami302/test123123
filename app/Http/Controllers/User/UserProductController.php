<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductPostRequest;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\Subseries;
use App\Models\Theme;
use App\Models\User;
use App\Models\UserCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProductController extends Controller
{
    public function index()
    {
        $user = User::where('id', '=', Auth::user()->id)->first();
        $products = $user->products()->orderBy('updated_at', 'DESC')->paginate(40);
        //$products = Product::where('user_id', '=', Auth::user()->id)->latest()->paginate(20);
        return view('user.products.index', compact('products'));
    }
    public function show($id)
    {
        $product = Product::where('id', '=', $id)->first();
        $products = Product::take(3)->latest()->get();
        return view('user.products.show', compact('product', 'products'));
    }

    public function create()
    {
        $products = Product::latest()->take(5)->get();
        $categories = Category::latest()->get();
        $subseries = Subseries::latest()->get();
        $themes = Theme::latest()->get();

        $count_exceeded_flag = 0;
        $user_membership = User::where('id', '=', Auth::user()->id)->first();
        if($user_membership->membership == 'Standard'){
            $collection_count = UserCollection::where('user_id', '=', Auth::user()->id)->get();
            if(count($collection_count) >= 5){
                $count_exceeded_flag = 1;
            }
        }        

        return view('user.products.create', compact('count_exceeded_flag', 'products', 'categories', 'subseries', 'themes'));
    }

    public function store(ProductPostRequest $request)
    {
        $validated = $request->validate([
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
        
        if($request->file('image1') <> null){
            $image1 = $request->file('image1');
            $namewithextension1 = $image1->getClientOriginalName();
            $name1 = time().'.'.$image1->getClientOriginalExtension();
            $name11 = explode('.', $namewithextension1)[0].'_'.$name1;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image1->move($destinationPath, $name11);
            $image11 ="images/$category->name/$collection->name/".$name11;
        }

        if($request->file('image2') <> null){
            $image2 = $request->file('image2');
            $namewithextension2 = $image2->getClientOriginalName();
            $name2 = time().'.'.$image2->getClientOriginalExtension();
            $name21 = explode('.', $namewithextension2)[0].'_'.$name2;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image2->move($destinationPath, $name21);
            $image12 ="images/$category->name/$collection->name/".$name21;
        }

        if($request->file('image3') <> null){
            $image3 = $request->file('image3');
            $namewithextension3 = $image3->getClientOriginalName();
            $name3 = time().'.'.$image3->getClientOriginalExtension();
            $name31 = explode('.', $namewithextension3)[0].'_'.$name3;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image3->move($destinationPath, $name31);
            $image13 ="images/$category->name/$collection->name/".$name31;
        }

        if($request->file('image4') <> null){
            $image4 = $request->file('image4');
            $namewithextension4 = $image4->getClientOriginalName();
            $name4 = time().'.'.$image4->getClientOriginalExtension();
            $name41 = explode('.', $namewithextension4)[0].'_'.$name4;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image4->move($destinationPath, $name41);
            $image14 ="images/$category->name/$collection->name/".$name41;
        }

        if($request->file('image5') <> null){
            $image5 = $request->file('image5');
            $namewithextension5 = $image5->getClientOriginalName();
            $name5 = time().'.'.$image5->getClientOriginalExtension();
            $name51 = explode('.', $namewithextension5)[0].'_'.$name5;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image5->move($destinationPath, $name51);
            $image15 ="images/$category->name/$collection->name/".$name51;
        }
        
        /*$product->user_id = Auth::user()->id;
        $product->user_name = Auth::user()->name;*/
        $product->collection_id = $collection->id;
        $product->category_id = $category->id;
        $product->subseries_id = $subseries->id;
        $product->name = $request->name;
        $product->series = $request->series;
        $product->category_name = $category->name;
        $product->collection_name = $request->collection_name;
        $product->subseries_name = $subseries->name;
        if($theme <> null){
            $product->theme = $theme->name;
            $product->theme_id = $theme->id;
        }
        $product->model_name = $request->model_name;
        $product->casting_name = $request->casting_name;  
        $product->year = $request->year;
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
        $product->notes = $request->notes;
        $product->toy_hash = $request->toy_hash;
        $product->col_hash = $request->col_hash;
        $product->series_hash = $request->series_hash;
        if($request->file('image1') <> null){
            $product->image1 = $image11;
        }
        if($request->file('image2') <> null){
            $product->image2 = $image12;
        }
        if($request->file('image3') <> null){
            $product->image3 = $image13;
        }
        if($request->file('image4') <> null){
            $product->image4 = $image14;
        }
        if($request->file('image5') <> null){
            $product->image5 = $image15;
        }

        $product->save();

        $product_stored_id = Product::where('toy_hash', '=', $request->toy_hash)
                                ->where('name', '=', $request->name)->first();

        $usercollection = new UserCollection();
        $usercollection->user_id = Auth::user()->id;
        $usercollection->product_id = $product_stored_id->id;
        $usercollection->save();

        return redirect()->back()->with('productform', 'New Product Inserted Successfully');
    }

    public function edit($id)
    {
        $product = Product::where('id','=', $id)->first();
        return view('user.products.edit', compact('product'));
    }

    public function update($id, Request $request)
    {
        $product = Product::where('id','=', $id)->first();
        $validated = $request->validate([
            'year' => 'required|numeric',
            'colour' => 'max:255',
            'tampo' => 'max:255|nullable',
            'decoration' => 'max:255|nullable',
            'base_colour' => 'max:255|nullable',
            'type' => 'max:255|nullable',
            'window_colour' => 'max:255|nullable',
            'interior_colour' => 'max:255|nullable',
            'wheel_type' => 'max:255|nullable',
            'country' => 'max:255|nullable',
            'notes' => 'nullable',
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000', 
            'visibility' => 'required|max:20',
        ]);

        $product_toy_hash = Product::where('toy_hash', '=', $request->toy_hash)
        ->where('id', '<>', $id)->first();

        if($product_toy_hash <> null){
            return redirect()->back()->with('error', 'Toy Hash Already Exists');
        }

        $category = Category::where('name', '=', $request->category_name)->first();
        $subseries = Subseries::where('name', '=', $request->subseries_name)->first();
        $collection = Collection::where('name', '=', $subseries->collection_name)->first();
        $theme = Theme::where('name', '=', $request->theme)->first();
        
        if($request->file('image1') <> null){
            $image1 = $request->file('image1');
            $namewithextension1 = $image1->getClientOriginalName();
            $name1 = time().'.'.$image1->getClientOriginalExtension();
            $name11 = explode('.', $namewithextension1)[0].'_'.$name1;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image1->move($destinationPath, $name11);
            $image11 ="images/$category->name/$collection->name/".$name11;
        }

        if($request->file('image2') <> null){
            $image2 = $request->file('image2');
            $namewithextension2 = $image2->getClientOriginalName();
            $name2 = time().'.'.$image2->getClientOriginalExtension();
            $name21 = explode('.', $namewithextension2)[0].'_'.$name2;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image2->move($destinationPath, $name21);
            $image12 ="images/$category->name/$collection->name/".$name21;
        }

        if($request->file('image3') <> null){
            $image3 = $request->file('image3');
            $namewithextension3 = $image3->getClientOriginalName();
            $name3 = time().'.'.$image3->getClientOriginalExtension();
            $name31 = explode('.', $namewithextension3)[0].'_'.$name3;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image3->move($destinationPath, $name31);
            $image13 ="images/$category->name/$collection->name/".$name31;
        }

        if($request->file('image4') <> null){
            $image4 = $request->file('image4');
            $namewithextension4 = $image4->getClientOriginalName();
            $name4 = time().'.'.$image4->getClientOriginalExtension();
            $name41 = explode('.', $namewithextension4)[0].'_'.$name4;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image4->move($destinationPath, $name41);
            $image14 ="images/$category->name/$collection->name/".$name41;
        }

        if($request->file('image5') <> null){
            $image5 = $request->file('image5');
            $namewithextension5 = $image5->getClientOriginalName();
            $name5 = time().'.'.$image5->getClientOriginalExtension();
            $name51 = explode('.', $namewithextension5)[0].'_'.$name5;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image5->move($destinationPath, $name51);
            $image15 ="images/$category->name/$collection->name/".$name51;
        }
        
        /*$product->user_id = Auth::user()->id;*/
        /*$product->user_name = Auth::user()->name;*/
        $product->collection_id = $collection->id;
        $product->category_id = $category->id;
        $product->subseries_id = $subseries->id;
        $product->name = $request->name;
        $product->series = $request->series;
        $product->category_name = $category->name;
        $product->collection_name = $request->collection_name;
        $product->subseries_name = $subseries->name;
        if($theme <> null){
            $product->theme = $theme->name;
        $product->theme_id = $theme->id;
        }
        $product->model_name = $request->model_name;
        $product->casting_name = $request->casting_name;  
        $product->year = $request->year;
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
        $product->notes = $request->notes;
        $product->toy_hash = $request->toy_hash;
        $product->col_hash = $request->col_hash;
        $product->series_hash = $request->series_hash;
        if($request->file('image1') <> null){
            $product->image1 = $image11;
        }
        if($request->file('image2') <> null){
            $product->image2 = $image12;
        }
        if($request->file('image3') <> null){
            $product->image3 = $image13;
        }
        if($request->file('image4') <> null){
            $product->image4 = $image14;
        }
        if($request->file('image5') <> null){
            $product->image5 = $image15;
        }

        $product->save();

        return redirect()->back()->with('message', 'Product Edited Successfully');

    }

    public function destroy($id)
    {
        $product = Product::where('id', '=', $id)->first();
        $product->delete();

        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }
}
