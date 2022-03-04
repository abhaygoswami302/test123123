<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Subseries;
use App\Models\UserCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditorHotToysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('collection_name', '=', 'Hot Toys')->latest()->paginate(40);
        return view('editor.hot_toys.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('collection_name', '=', 'Hot Toys')->get();
        $subseries = Subseries::where('collection_name', '=', 'Hot Toys')->get();
        return view('editor.hot_toys.create', compact('categories', 'subseries'));
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
            'name'  => 'required',
            'category_name' => 'required',
            'toy_hash' => 'required|unique:temporaries,toy_hash|unique:products,toy_hash',
        ]);

        $collection_name = Collection::where('name', '=', 'Hot Toys')->first();

        if($collection_name == null){
            $mycollection = new Collection();
            $mycollection->name = 'Hot Toys';
            $mycollection->description = 'Hot Toys';
            $mycollection->save();
        }

        $lm_collection = Collection::where('name', '=', 'Hot Toys')->first();

        $category = Category::where('name', '=', $request->category_name)->first();

        if($category == null){
            $collection = Collection::where('name', '=', 'Hot Toys')->first();
        
            $category = new Category();
            $category->collection_id = $collection->id;
            $category->collection_name = $collection->name;
            $category->name = $request->category_name;
            $category->description = 'N/A';
            $category->save();
        }
    
        $category = Category::where('name', '=', $request->category_name)->first();

        if($category <> null){
            $subseries_name = Subseries::where('name', '=', $request->subseries_name)->first();

            if($subseries_name == null){
                $mysubseries = new Subseries();
                $mysubseries->category_id = $category->id;
                $mysubseries->collection_id = $lm_collection->id;
                $mysubseries->name = $request->subseries_name;
                $mysubseries->series_name = $request->subseries_name;
                $mysubseries->collection_name = 'Hot Toys';
                $mysubseries->category_name = $category->name;
                $mysubseries-> save();     
            }
        }
        
        $lm_series = Subseries::where('name', '=', $request->subseries_name)->first();

        $category = Category::where('name', '=', $request->category_name)->first();
        
        if($request->visibility <> '1'){
            $visibility = 0;
        }else{
            $visibility = 1;
        }


        $product = new Product();
        $product->collection_id = $lm_collection->id;
        $product->collection_name = $lm_collection->name;
        $product->series = $lm_series->name;
        $product->casting_name = 'Hot Toys';
        $product->category_id = $category->id;
        $product->subseries_id =  $lm_series->id;
        $product->name  = $request->name;
        $product->category_name = $category->name;
        $product->subseries_name = $lm_series->name;
        $product->theme = 'Hot Toys';
        $product->model_name = $request->model_name;
        $product->year =  $request->year;
        $product->notes = $request->notes;
        $product->visibility =  $visibility;
        $product->toy_hash =  $request->toy_hash;
        if($request->file('image1') <> null){
            $image1 = $request->file('image1');
            $namewithextension1 = $image1->getClientOriginalName();
            $name1 = time().'.'.$image1->getClientOriginalExtension();
            $name11 = explode('.', $namewithextension1)[0].'_'.$name1;
            $destinationPath = public_path("images/$category->name/$lm_collection->name/");
            $image1->move($destinationPath, $name11);
            $image11 ="images/$category->name/$lm_collection->name/".$name11;
            $product->image1 = $image11;
        }

        if($request->file('image2') <> null){
            $image2 = $request->file('image2');
            $namewithextension2 = $image2->getClientOriginalName();
            $name2 = time().'.'.$image2->getClientOriginalExtension();
            $name21 = explode('.', $namewithextension2)[0].'_'.$name2;
            $destinationPath = public_path("images/$category->name/$lm_collection->name/");
            $image2->move($destinationPath, $name21);
            $image21 ="images/$category->name/$lm_collection->name/".$name21;
            $product->image2 = $image21;
        }

        if($request->file('image3') <> null){
            $image3 = $request->file('image3');
            $namewithextension3 = $image3->getClientOriginalName();
            $name3 = time().'.'.$image3->getClientOriginalExtension();
            $name31 = explode('.', $namewithextension3)[0].'_'.$name3;
            $destinationPath = public_path("images/$category->name/$lm_collection->name/");
            $image3->move($destinationPath, $name31);
            $image31 ="images/$category->name/$lm_collection->name/".$name31;
            $product->image3 = $image31;
        }

        if($request->file('image4') <> null){
            $image4 = $request->file('image4');
            $namewithextension4 = $image4->getClientOriginalName();
            $name4 = time().'.'.$image4->getClientOriginalExtension();
            $name41 = explode('.', $namewithextension4)[0].'_'.$name4;
            $destinationPath = public_path("images/$category->name/$lm_collection->name/");
            $image4->move($destinationPath, $name41);
            $image41 ="images/$category->name/$lm_collection->name/".$name41;
            $product->image4 = $image41;
        }

        if($request->file('image5') <> null){
            $image5 = $request->file('image5');
            $namewithextension5 = $image5->getClientOriginalName();
            $name5 = time().'.'.$image5->getClientOriginalExtension();
            $name51 = explode('.', $namewithextension5)[0].'_'.$name5;
            $destinationPath = public_path("images/$category->name/$lm_collection->name/");
            $image5->move($destinationPath, $name51);
            $image51 ="images/$category->name/$lm_collection->name/".$name51;
            $product->image5 = $image51;
        }
        $product->save();

        $tempProductImage = Product::where('toy_hash', '=', $request->toy_hash)
        ->first();

        $collection = Collection::where('name', '=', 'Hot Toys')->first();

        $productImage = ProductImage::where('product_id', '=', $tempProductImage->id)->first();
        if($productImage == null){
            $productImage = new ProductImage();
        }
        $productImage->product_id = $tempProductImage->id;
        $productImage->name = $tempProductImage->name;
        $productImage->collection_name = $tempProductImage->collection_name;

        if($request->file('image6') <> null){
            $image6 = $request->file('image6');
            $namewithextension6 = $image6->getClientOriginalName();
            $name6 = time().'.'.$image6->getClientOriginalExtension();
            $name61 = explode('.', $namewithextension6)[0].'_'.$name6;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image6->move($destinationPath, $name61);
            $image61 ="images/$category->name/$collection->name/".$name61;
            $productImage->image6 = $image61;
        }



        if($request->file('image7') <> null){
            $image7 = $request->file('image7');
            $namewithextension7 = $image7->getClientOriginalName();
            $name7 = time().'.'.$image7->getClientOriginalExtension();
            $name71 = explode('.', $namewithextension7)[0].'_'.$name7;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image7->move($destinationPath, $name71);
            $image71 ="images/$category->name/$collection->name/".$name71;
            $productImage->image7 = $image71;
        }

        if($request->file('image8') <> null){
            $image8 = $request->file('image8');
            $namewithextension8 = $image8->getClientOriginalName();
            $namewithextension8 = time().'.'.$image8->getClientOriginalExtension();
            $namewithextension81 = explode('.', $namewithextension8)[0].'_'.$namewithextension8;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image8->move($destinationPath, $namewithextension81);
            $image81 ="images/$category->name/$collection->name/".$namewithextension81;
            $productImage->image8 = $image81;
        }

        if($request->file('image9') <> null){
            $image9 = $request->file('image9');
            $namewithextension9 = $image9->getClientOriginalName();
            $name9 = time().'.'.$image9->getClientOriginalExtension();
            $name91 = explode('.', $namewithextension9)[0].'_'.$name9;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image9->move($destinationPath, $name91);
            $image91 ="images/$category->name/$collection->name/".$name91;
            $productImage->image9 = $image91;
        }

        if($request->file('image10') <> null){
            $image10 = $request->file('image10');
            $namewithextension10 = $image10->getClientOriginalName();
            $name10 = time().'.'.$image10->getClientOriginalExtension();
            $name101 = explode('.', $namewithextension10)[0].'_'.$name10;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image10->move($destinationPath, $name101);
            $image101 ="images/$category->name/$collection->name/".$name101;
            $productImage->image10 = $image101;
        }

        if($request->file('image11') <> null){
            $image11 = $request->file('image11');
            $namewithextension11 = $image11->getClientOriginalName();
            $name11 = time().'.'.$image11->getClientOriginalExtension();
            $name111 = explode('.', $namewithextension11)[0].'_'.$name11;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image11->move($destinationPath, $name111);
            $image111 ="images/$category->name/$collection->name/".$name111;
            $productImage->image11 = $image111;
        }

        if($request->file('image12') <> null){
            $image12 = $request->file('image12');
            $namewithextension12 = $image12->getClientOriginalName();
            $name12 = time().'.'.$image12->getClientOriginalExtension();
            $name121 = explode('.', $namewithextension12)[0].'_'.$name12;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image12->move($destinationPath, $name121);
            $image121 ="images/$category->name/$collection->name/".$name121;
            $productImage->image12 = $image121;
        }

        if($request->file('image13') <> null){
            $image13 = $request->file('image13');
            $namewithextension13 = $image13->getClientOriginalName();
            $name13 = time().'.'.$image13->getClientOriginalExtension();
            $name131 = explode('.', $namewithextension13)[0].'_'.$name13;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image13->move($destinationPath, $name131);
            $image131 ="images/$category->name/$collection->name/".$name131;
            $productImage->image13 = $image131;
        }

        if($request->file('image14') <> null){
            $image14 = $request->file('image14');
            $namewithextension14 = $image14->getClientOriginalName();
            $name14 = time().'.'.$image14->getClientOriginalExtension();
            $name141 = explode('.', $namewithextension14)[0].'_'.$name14;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image14->move($destinationPath, $name141);
            $image141 ="images/$category->name/$collection->name/".$name141;
            $productImage->image14 = $image141;
        }

        if($request->file('image15') <> null){
            $image15 = $request->file('image15');
            $namewithextension15 = $image15->getClientOriginalName();
            $name15 = time().'.'.$image15->getClientOriginalExtension();
            $name151 = explode('.', $namewithextension15)[0].'_'.$name15;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image15->move($destinationPath, $name151);
            $image151 ="images/$category->name/$collection->name/".$name151;
            $productImage->image15 = $image151;
        }

        if($request->file('image16') <> null){
            $image16 = $request->file('image16');
            $namewithextension16 = $image16->getClientOriginalName();
            $name16 = time().'.'.$image16->getClientOriginalExtension();
            $name161 = explode('.', $namewithextension16)[0].'_'.$name16;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image16->move($destinationPath, $name161);
            $image161 ="images/$category->name/$collection->name/".$name161;
            $productImage->image16 = $image161;
        }

        if($request->file('image17') <> null){
            $image17 = $request->file('image17');
            $namewithextension17 = $image17->getClientOriginalName();
            $name17 = time().'.'.$image17->getClientOriginalExtension();
            $name171 = explode('.', $namewithextension17)[0].'_'.$name17;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image17->move($destinationPath, $name171);
            $image171 ="images/$category->name/$collection->name/".$name171;
            $productImage->image17 = $image171;
        }

        if($request->file('image18') <> null){
            $image18 = $request->file('image18');
            $namewithextension18 = $image18->getClientOriginalName();
            $name18 = time().'.'.$image18->getClientOriginalExtension();
            $name181 = explode('.', $namewithextension18)[0].'_'.$name18;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image18->move($destinationPath, $name181);
            $image181 ="images/$category->name/$collection->name/".$name181;
            $productImage->image18 = $image181;
        }

        if($request->file('image19') <> null){
            $image19 = $request->file('image19');
            $namewithextension19 = $image19->getClientOriginalName();
            $name19 = time().'.'.$image19->getClientOriginalExtension();
            $name191 = explode('.', $namewithextension19)[0].'_'.$name19;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image19->move($destinationPath, $name191);
            $image191 ="images/$category->name/$collection->name/".$name191;
            $productImage->image19 = $image191;
        }

        if($request->file('image20') <> null){
            $image20 = $request->file('image20');
            $namewithextension20 = $image20->getClientOriginalName();
            $name20 = time().'.'.$image20->getClientOriginalExtension();
            $name201 = explode('.', $namewithextension20)[0].'_'.$name20;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image20->move($destinationPath, $name201);
            $image201 ="images/$category->name/$collection->name/".$name201;
            $productImage->image20 = $image201;
        }

        if($request->file('image21') <> null){
            $image21 = $request->file('image21');
            $namewithextension21 = $image21->getClientOriginalName();
            $name21 = time().'.'.$image21->getClientOriginalExtension();
            $name211 = explode('.', $namewithextension21)[0].'_'.$name21;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image21->move($destinationPath, $name211);
            $image211 ="images/$category->name/$collection->name/".$name211;
            $productImage->image21 = $image211;
        }

        if($request->file('image22') <> null){
            $image22 = $request->file('image22');
            $namewithextension22 = $image22->getClientOriginalName();
            $name22 = time().'.'.$image22->getClientOriginalExtension();
            $name221 = explode('.', $namewithextension22)[0].'_'.$name22;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image22->move($destinationPath, $name221);
            $image221 ="images/$category->name/$collection->name/".$name221;
            $productImage->image22 = $image221;
        }

        if($request->file('image23') <> null){
            $image23 = $request->file('image23');
            $namewithextension23 = $image23->getClientOriginalName();
            $name23 = time().'.'.$image23->getClientOriginalExtension();
            $name231 = explode('.', $namewithextension23)[0].'_'.$name23;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image23->move($destinationPath, $name231);
            $image231 ="images/$category->name/$collection->name/".$name231;
            $productImage->image23 = $image231;
        }

        if($request->file('image24') <> null){
            $image24 = $request->file('image24');
            $namewithextension24 = $image24->getClientOriginalName();
            $name24 = time().'.'.$image24->getClientOriginalExtension();
            $name241 = explode('.', $namewithextension24)[0].'_'.$name24;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image24->move($destinationPath, $name241);
            $image241 ="images/$category->name/$collection->name/".$name241;
            $productImage->image24 = $image241;
        }

        if($request->file('image25') <> null){
            $image25 = $request->file('image25');
            $namewithextension25 = $image25->getClientOriginalName();
            $name25 = time().'.'.$image25->getClientOriginalExtension();
            $name251 = explode('.', $namewithextension25)[0].'_'.$name25;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image25->move($destinationPath, $name251);
            $image251 ="images/$category->name/$collection->name/".$name251;
            $productImage->image25 = $image251;
        }

        if($request->file('image26') <> null){
            $image26 = $request->file('image26');
            $namewithextension26 = $image26->getClientOriginalName();
            $name26 = time().'.'.$image26->getClientOriginalExtension();
            $name261 = explode('.', $namewithextension26)[0].'_'.$name26;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image26->move($destinationPath, $name261);
            $image261 ="images/$category->name/$collection->name/".$name261;
            $productImage->image26 = $image261;
        }

        if($request->file('image27') <> null){
            $image27 = $request->file('image27');
            $namewithextension27 = $image27->getClientOriginalName();
            $name27 = time().'.'.$image27->getClientOriginalExtension();
            $name271 = explode('.', $namewithextension27)[0].'_'.$name27;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image27->move($destinationPath, $name271);
            $image271 ="images/$category->name/$collection->name/".$name271;
            $productImage->image27 = $image271;
        }

        if($request->file('image28') <> null){
            $image28 = $request->file('image28');
            $namewithextension28 = $image28->getClientOriginalName();
            $name28 = time().'.'.$image28->getClientOriginalExtension();
            $name281 = explode('.', $namewithextension28)[0].'_'.$name28;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image28->move($destinationPath, $name281);
            $image281 ="images/$category->name/$collection->name/".$name281;
            $productImage->image28 = $image281;
        }

        if($request->file('image29') <> null){
            $image29 = $request->file('image29');
            $namewithextension29 = $image29->getClientOriginalName();
            $name29 = time().'.'.$image29->getClientOriginalExtension();
            $name291 = explode('.', $namewithextension29)[0].'_'.$name29;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image29->move($destinationPath, $name291);
            $image291 ="images/$category->name/$collection->name/".$name291;
            $productImage->image29 = $image291;
        }

        if($request->file('image30') <> null){
            $image30 = $request->file('image30');
            $namewithextension30 = $image30->getClientOriginalName();
            $name30 = time().'.'.$image30->getClientOriginalExtension();
            $name301 = explode('.', $namewithextension30)[0].'_'.$name30;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image30->move($destinationPath, $name301);
            $image301 ="images/$category->name/$collection->name/".$name301;
            $productImage->image30 = $image301;
        }

        if($request->file('image31') <> null){
            $image31 = $request->file('image31');
            $namewithextension31 = $image31->getClientOriginalName();
            $name31 = time().'.'.$image31->getClientOriginalExtension();
            $name311 = explode('.', $namewithextension31)[0].'_'.$name31;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image31->move($destinationPath, $name311);
            $image311 ="images/$category->name/$collection->name/".$name311;
            $productImage->image31 = $image311;
        }

        if($request->file('image32') <> null){
            $image32 = $request->file('image32');
            $namewithextension32 = $image32->getClientOriginalName();
            $name32 = time().'.'.$image32->getClientOriginalExtension();
            $name321 = explode('.', $namewithextension32)[0].'_'.$name32;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image32->move($destinationPath, $name321);
            $image321 ="images/$category->name/$collection->name/".$name321;
            $productImage->image32 = $image321;
        }

        if($request->file('image33') <> null){
            $image33 = $request->file('image33');
            $namewithextension33 = $image33->getClientOriginalName();
            $name33 = time().'.'.$image33->getClientOriginalExtension();
            $name331 = explode('.', $namewithextension33)[0].'_'.$name33;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image33->move($destinationPath, $name331);
            $image331 ="images/$category->name/$collection->name/".$name331;
            $productImage->image33 = $image331;
        }

        if($request->file('image34') <> null){
            $image34 = $request->file('image34');
            $namewithextension34 = $image34->getClientOriginalName();
            $name34 = time().'.'.$image34->getClientOriginalExtension();
            $name341 = explode('.', $namewithextension34)[0].'_'.$name34;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image34->move($destinationPath, $name341);
            $image341 ="images/$category->name/$collection->name/".$name341;
            $productImage->image34 = $image341;
        }

        if($request->file('image35') <> null){
            $image35 = $request->file('image35');
            $namewithextension35 = $image35->getClientOriginalName();
            $name35 = time().'.'.$image35->getClientOriginalExtension();
            $name351 = explode('.', $namewithextension35)[0].'_'.$name35;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image35->move($destinationPath, $name351);
            $image351 ="images/$category->name/$collection->name/".$name351;
            $productImage->image35 = $image351;
        }

        if($request->file('image36') <> null){
            $image36 = $request->file('image36');
            $namewithextension36 = $image36->getClientOriginalName();
            $name36 = time().'.'.$image36->getClientOriginalExtension();
            $name361 = explode('.', $namewithextension36)[0].'_'.$name36;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image36->move($destinationPath, $name361);
            $image361 ="images/$category->name/$collection->name/".$name361;
            $productImage->image36 = $image361;
        }

        if($request->file('image37') <> null){
            $image37 = $request->file('image37');
            $namewithextension37 = $image37->getClientOriginalName();
            $name37 = time().'.'.$image37->getClientOriginalExtension();
            $name371 = explode('.', $namewithextension37)[0].'_'.$name37;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image37->move($destinationPath, $name371);
            $image371 ="images/$category->name/$collection->name/".$name371;
            $productImage->image37 = $image371;
        }


        if($request->file('image38') <> null){
            $image38 = $request->file('image38');
            $namewithextension38 = $image38->getClientOriginalName();
            $name38 = time().'.'.$image38->getClientOriginalExtension();
            $name381 = explode('.', $namewithextension38)[0].'_'.$name38;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image38->move($destinationPath, $name381);
            $image381 ="images/$category->name/$collection->name/".$name381;
            $productImage->image38 = $image381;
        }

        $productImage->save();

        $product_stored_id = Product::where('toy_hash', '=', $request->toy_hash)
        ->where('name', '=', $request->name)->first();

        $usercollection = new UserCollection();
        $usercollection->user_id = Auth::user()->id;
        $usercollection->product_id = $product_stored_id->id;
        $usercollection->save();

        return redirect()->route('editor_hot_toys.create')->with('message', 'Product Added Successfully');
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
        $categories = Category::where('collection_name', '=', 'Hot Toys')->get();
        $subseries = Subseries::where('collection_name', '=', 'Hot Toys')->get();
        return view('editor.hot_toys.edit', compact('product', 'categories', 'subseries'));

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
            'toy_hash' => 'required',
        ]);

        $product = Product::where('id', '=', $id)->first();
        $category = Category::where('name', '=', $product->category_name)->first();
        $subseries = Subseries::where('name', '=', $product->subseries_name)->where('collection_name', '=', 'Hot Toys')->first();
        $collection = Collection::where('id', '=', $subseries->collection_id)->first();


        /*$product->user_id = Auth::user()->id;
        $product->user_name = Auth::user()->name;*/
        $product->collection_id = $collection->id;
        $product->collection_name = $collection->name;
        $product->series = $category->name . " : " . $subseries->name;
        $product->casting_name = $subseries->casting;
        $product->category_id = $category->id;
        $product->subseries_id = $subseries->id;
        $product->name  = $request->name;
        $product->category_name = $request->category_name;
        $product->subseries_name =  $request->subseries_name;
        $product->model_name =  $request->model_name;
        $product->year =  $request->year;
        $product->visibility = $request->visibility;
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


        $product->toy_hash = $request->toy_hash;
        $product->save();

        
        $tempProductImage = Product::where('toy_hash', '=', $request->toy_hash)
        ->where('name', '=', $request->name)
        ->where('collection_name', '=', 'Hot Toys')
        ->first();

        $productImage = ProductImage::where('product_id', '=', $request->product_id)->first();
        $productImage->product_id = $tempProductImage->id;
        $productImage->name = $tempProductImage->name;
        $productImage->collection_name = $tempProductImage->collection_name;

        if($request->file('image6') <> null){
            $image6 = $request->file('image6');
            $namewithextension6 = $image6->getClientOriginalName();
            $name6 = time().'.'.$image6->getClientOriginalExtension();
            $name61 = explode('.', $namewithextension6)[0].'_'.$name6;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image6->move($destinationPath, $name61);
            $image61 ="images/$category->name/$collection->name/".$name61;
            $productImage->image6 = $image61;
        }



        if($request->file('image7') <> null){
            $image7 = $request->file('image7');
            $namewithextension7 = $image7->getClientOriginalName();
            $name7 = time().'.'.$image7->getClientOriginalExtension();
            $name71 = explode('.', $namewithextension7)[0].'_'.$name7;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image7->move($destinationPath, $name71);
            $image71 ="images/$category->name/$collection->name/".$name71;
            $productImage->image7 = $image71;
        }

        if($request->file('image8') <> null){
            $image8 = $request->file('image8');
            $namewithextension8 = $image8->getClientOriginalName();
            $namewithextension8 = time().'.'.$image8->getClientOriginalExtension();
            $namewithextension81 = explode('.', $namewithextension8)[0].'_'.$namewithextension8;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image8->move($destinationPath, $namewithextension81);
            $image81 ="images/$category->name/$collection->name/".$namewithextension81;
            $productImage->image8 = $image81;
        }

        if($request->file('image9') <> null){
            $image9 = $request->file('image9');
            $namewithextension9 = $image9->getClientOriginalName();
            $name9 = time().'.'.$image9->getClientOriginalExtension();
            $name91 = explode('.', $namewithextension9)[0].'_'.$name9;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image9->move($destinationPath, $name91);
            $image91 ="images/$category->name/$collection->name/".$name91;
            $productImage->image9 = $image91;
        }

        if($request->file('image10') <> null){
            $image10 = $request->file('image10');
            $namewithextension10 = $image10->getClientOriginalName();
            $name10 = time().'.'.$image10->getClientOriginalExtension();
            $name101 = explode('.', $namewithextension10)[0].'_'.$name10;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image10->move($destinationPath, $name101);
            $image101 ="images/$category->name/$collection->name/".$name101;
            $productImage->image10 = $image101;
        }

        if($request->file('image11') <> null){
            $image11 = $request->file('image11');
            $namewithextension11 = $image11->getClientOriginalName();
            $name11 = time().'.'.$image11->getClientOriginalExtension();
            $name111 = explode('.', $namewithextension11)[0].'_'.$name11;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image11->move($destinationPath, $name111);
            $image111 ="images/$category->name/$collection->name/".$name111;
            $productImage->image11 = $image111;
        }

        if($request->file('image12') <> null){
            $image12 = $request->file('image12');
            $namewithextension12 = $image12->getClientOriginalName();
            $name12 = time().'.'.$image12->getClientOriginalExtension();
            $name121 = explode('.', $namewithextension12)[0].'_'.$name12;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image12->move($destinationPath, $name121);
            $image121 ="images/$category->name/$collection->name/".$name121;
            $productImage->image12 = $image121;
        }

        if($request->file('image13') <> null){
            $image13 = $request->file('image13');
            $namewithextension13 = $image13->getClientOriginalName();
            $name13 = time().'.'.$image13->getClientOriginalExtension();
            $name131 = explode('.', $namewithextension13)[0].'_'.$name13;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image13->move($destinationPath, $name131);
            $image131 ="images/$category->name/$collection->name/".$name131;
            $productImage->image13 = $image131;
        }

        if($request->file('image14') <> null){
            $image14 = $request->file('image14');
            $namewithextension14 = $image14->getClientOriginalName();
            $name14 = time().'.'.$image14->getClientOriginalExtension();
            $name141 = explode('.', $namewithextension14)[0].'_'.$name14;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image14->move($destinationPath, $name141);
            $image141 ="images/$category->name/$collection->name/".$name141;
            $productImage->image14 = $image141;
        }

        if($request->file('image15') <> null){
            $image15 = $request->file('image15');
            $namewithextension15 = $image15->getClientOriginalName();
            $name15 = time().'.'.$image15->getClientOriginalExtension();
            $name151 = explode('.', $namewithextension15)[0].'_'.$name15;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image15->move($destinationPath, $name151);
            $image151 ="images/$category->name/$collection->name/".$name151;
            $productImage->image15 = $image151;
        }

        if($request->file('image16') <> null){
            $image16 = $request->file('image16');
            $namewithextension16 = $image16->getClientOriginalName();
            $name16 = time().'.'.$image16->getClientOriginalExtension();
            $name161 = explode('.', $namewithextension16)[0].'_'.$name16;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image16->move($destinationPath, $name161);
            $image161 ="images/$category->name/$collection->name/".$name161;
            $productImage->image16 = $image161;
        }

        if($request->file('image17') <> null){
            $image17 = $request->file('image17');
            $namewithextension17 = $image17->getClientOriginalName();
            $name17 = time().'.'.$image17->getClientOriginalExtension();
            $name171 = explode('.', $namewithextension17)[0].'_'.$name17;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image17->move($destinationPath, $name171);
            $image171 ="images/$category->name/$collection->name/".$name171;
            $productImage->image17 = $image171;
        }

        if($request->file('image18') <> null){
            $image18 = $request->file('image18');
            $namewithextension18 = $image18->getClientOriginalName();
            $name18 = time().'.'.$image18->getClientOriginalExtension();
            $name181 = explode('.', $namewithextension18)[0].'_'.$name18;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image18->move($destinationPath, $name181);
            $image181 ="images/$category->name/$collection->name/".$name181;
            $productImage->image18 = $image181;
        }

        if($request->file('image19') <> null){
            $image19 = $request->file('image19');
            $namewithextension19 = $image19->getClientOriginalName();
            $name19 = time().'.'.$image19->getClientOriginalExtension();
            $name191 = explode('.', $namewithextension19)[0].'_'.$name19;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image19->move($destinationPath, $name191);
            $image191 ="images/$category->name/$collection->name/".$name191;
            $productImage->image19 = $image191;
        }

        if($request->file('image20') <> null){
            $image20 = $request->file('image20');
            $namewithextension20 = $image20->getClientOriginalName();
            $name20 = time().'.'.$image20->getClientOriginalExtension();
            $name201 = explode('.', $namewithextension20)[0].'_'.$name20;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image20->move($destinationPath, $name201);
            $image201 ="images/$category->name/$collection->name/".$name201;
            $productImage->image20 = $image201;
        }

        if($request->file('image21') <> null){
            $image21 = $request->file('image21');
            $namewithextension21 = $image21->getClientOriginalName();
            $name21 = time().'.'.$image21->getClientOriginalExtension();
            $name211 = explode('.', $namewithextension21)[0].'_'.$name21;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image21->move($destinationPath, $name211);
            $image211 ="images/$category->name/$collection->name/".$name211;
            $productImage->image21 = $image211;
        }

        if($request->file('image22') <> null){
            $image22 = $request->file('image22');
            $namewithextension22 = $image22->getClientOriginalName();
            $name22 = time().'.'.$image22->getClientOriginalExtension();
            $name221 = explode('.', $namewithextension22)[0].'_'.$name22;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image22->move($destinationPath, $name221);
            $image221 ="images/$category->name/$collection->name/".$name221;
            $productImage->image22 = $image221;
        }

        if($request->file('image23') <> null){
            $image23 = $request->file('image23');
            $namewithextension23 = $image23->getClientOriginalName();
            $name23 = time().'.'.$image23->getClientOriginalExtension();
            $name231 = explode('.', $namewithextension23)[0].'_'.$name23;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image23->move($destinationPath, $name231);
            $image231 ="images/$category->name/$collection->name/".$name231;
            $productImage->image23 = $image231;
        }

        if($request->file('image24') <> null){
            $image24 = $request->file('image24');
            $namewithextension24 = $image24->getClientOriginalName();
            $name24 = time().'.'.$image24->getClientOriginalExtension();
            $name241 = explode('.', $namewithextension24)[0].'_'.$name24;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image24->move($destinationPath, $name241);
            $image241 ="images/$category->name/$collection->name/".$name241;
            $productImage->image24 = $image241;
        }

        if($request->file('image25') <> null){
            $image25 = $request->file('image25');
            $namewithextension25 = $image25->getClientOriginalName();
            $name25 = time().'.'.$image25->getClientOriginalExtension();
            $name251 = explode('.', $namewithextension25)[0].'_'.$name25;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image25->move($destinationPath, $name251);
            $image251 ="images/$category->name/$collection->name/".$name251;
            $productImage->image25 = $image251;
        }

        if($request->file('image26') <> null){
            $image26 = $request->file('image26');
            $namewithextension26 = $image26->getClientOriginalName();
            $name26 = time().'.'.$image26->getClientOriginalExtension();
            $name261 = explode('.', $namewithextension26)[0].'_'.$name26;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image26->move($destinationPath, $name261);
            $image261 ="images/$category->name/$collection->name/".$name261;
            $productImage->image26 = $image261;
        }

        if($request->file('image27') <> null){
            $image27 = $request->file('image27');
            $namewithextension27 = $image27->getClientOriginalName();
            $name27 = time().'.'.$image27->getClientOriginalExtension();
            $name271 = explode('.', $namewithextension27)[0].'_'.$name27;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image27->move($destinationPath, $name271);
            $image271 ="images/$category->name/$collection->name/".$name271;
            $productImage->image27 = $image271;
        }

        if($request->file('image28') <> null){
            $image28 = $request->file('image28');
            $namewithextension28 = $image28->getClientOriginalName();
            $name28 = time().'.'.$image28->getClientOriginalExtension();
            $name281 = explode('.', $namewithextension28)[0].'_'.$name28;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image28->move($destinationPath, $name281);
            $image281 ="images/$category->name/$collection->name/".$name281;
            $productImage->image28 = $image281;
        }

        if($request->file('image29') <> null){
            $image29 = $request->file('image29');
            $namewithextension29 = $image29->getClientOriginalName();
            $name29 = time().'.'.$image29->getClientOriginalExtension();
            $name291 = explode('.', $namewithextension29)[0].'_'.$name29;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image29->move($destinationPath, $name291);
            $image291 ="images/$category->name/$collection->name/".$name291;
            $productImage->image29 = $image291;
        }

        if($request->file('image30') <> null){
            $image30 = $request->file('image30');
            $namewithextension30 = $image30->getClientOriginalName();
            $name30 = time().'.'.$image30->getClientOriginalExtension();
            $name301 = explode('.', $namewithextension30)[0].'_'.$name30;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image30->move($destinationPath, $name301);
            $image301 ="images/$category->name/$collection->name/".$name301;
            $productImage->image30 = $image301;
        }

        if($request->file('image31') <> null){
            $image31 = $request->file('image31');
            $namewithextension31 = $image31->getClientOriginalName();
            $name31 = time().'.'.$image31->getClientOriginalExtension();
            $name311 = explode('.', $namewithextension31)[0].'_'.$name31;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image31->move($destinationPath, $name311);
            $image311 ="images/$category->name/$collection->name/".$name311;
            $productImage->image31 = $image311;
        }

        if($request->file('image32') <> null){
            $image32 = $request->file('image32');
            $namewithextension32 = $image32->getClientOriginalName();
            $name32 = time().'.'.$image32->getClientOriginalExtension();
            $name321 = explode('.', $namewithextension32)[0].'_'.$name32;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image32->move($destinationPath, $name321);
            $image321 ="images/$category->name/$collection->name/".$name321;
            $productImage->image32 = $image321;
        }

        if($request->file('image33') <> null){
            $image33 = $request->file('image33');
            $namewithextension33 = $image33->getClientOriginalName();
            $name33 = time().'.'.$image33->getClientOriginalExtension();
            $name331 = explode('.', $namewithextension33)[0].'_'.$name33;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image33->move($destinationPath, $name331);
            $image331 ="images/$category->name/$collection->name/".$name331;
            $productImage->image33 = $image331;
        }

        if($request->file('image34') <> null){
            $image34 = $request->file('image34');
            $namewithextension34 = $image34->getClientOriginalName();
            $name34 = time().'.'.$image34->getClientOriginalExtension();
            $name341 = explode('.', $namewithextension34)[0].'_'.$name34;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image34->move($destinationPath, $name341);
            $image341 ="images/$category->name/$collection->name/".$name341;
            $productImage->image34 = $image341;
        }

        if($request->file('image35') <> null){
            $image35 = $request->file('image35');
            $namewithextension35 = $image35->getClientOriginalName();
            $name35 = time().'.'.$image35->getClientOriginalExtension();
            $name351 = explode('.', $namewithextension35)[0].'_'.$name35;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image35->move($destinationPath, $name351);
            $image351 ="images/$category->name/$collection->name/".$name351;
            $productImage->image35 = $image351;
        }

        if($request->file('image36') <> null){
            $image36 = $request->file('image36');
            $namewithextension36 = $image36->getClientOriginalName();
            $name36 = time().'.'.$image36->getClientOriginalExtension();
            $name361 = explode('.', $namewithextension36)[0].'_'.$name36;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image36->move($destinationPath, $name361);
            $image361 ="images/$category->name/$collection->name/".$name361;
            $productImage->image36 = $image361;
        }

        if($request->file('image37') <> null){
            $image37 = $request->file('image37');
            $namewithextension37 = $image37->getClientOriginalName();
            $name37 = time().'.'.$image37->getClientOriginalExtension();
            $name371 = explode('.', $namewithextension37)[0].'_'.$name37;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image37->move($destinationPath, $name371);
            $image371 ="images/$category->name/$collection->name/".$name371;
            $productImage->image37 = $image371;
        }


        if($request->file('image38') <> null){
            $image38 = $request->file('image38');
            $namewithextension38 = $image38->getClientOriginalName();
            $name38 = time().'.'.$image38->getClientOriginalExtension();
            $name381 = explode('.', $namewithextension38)[0].'_'.$name38;
            $destinationPath = public_path("images/$category->name/$collection->name/");
            $image38->move($destinationPath, $name381);
            $image381 ="images/$category->name/$collection->name/".$name381;
            $productImage->image38 = $image381;
        }


        $productImage->save();



        return redirect()->back()->with([
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
        //
    }
}
