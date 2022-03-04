<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{

    public function store(Request $request)
    {
        $product_image = null;
        if($request->file('image') <> null){
            $image1 = $request->file('image');
            $namewithextension1 = $image1->getClientOriginalName();
            $name1 = time().'.'.$image1->getClientOriginalExtension();
            $name11 = explode('.', $namewithextension1)[0].'_'.$name1;
            $destinationPath = public_path("images/feedback/");
            $image1->move($destinationPath, $name11);
            $image11 ="images/feedback/".$name11;
            $product_image = $image11;
        }
        $product = Product::find($request->id);
        Feedback::create(array_merge($request->all(), [
            'product_id' => $request->id, 
            'user_id' => Auth::user()->id,
            'username' => Auth::user()->name,
            'product_name' => $product->name,
            'image' => $product_image,
        ]));
        return redirect()->back()->with('message', 'Thank You For Your Feedback');
    }
}
