<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ClearProductsOtp;
use App\Models\Casting;
use App\Models\Category;
use App\Models\Mainlineseries;
use App\Models\OTP;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Temporary;
use App\Models\User;
use App\Models\UserCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ClearProductsController extends Controller
{
    public function index()
    {
        $user = User::where('id', '=', Auth::user()->id)->first();
        $digits = 4;
        $random= rand(pow(10, $digits-1), pow(10, $digits)-1);

        Mail::to($user)->send(new ClearProductsOtp($random));

        $otp = new OTP();
        $otp->name = $user->name;
        $otp->email = $user->email;
        $otp->otp = $random;
        $otp->save();

        return view('admin.clearProducts.index');
    }

    public function store(Request $request)
    {
        $otp = OTP::where('name', '=', $request->name)
                        ->where('email', '=', $request->email)
                        ->where('otp', '=', $request->otp)
                        ->first();
    
                        $password = Hash::make($request->password);
        $user = User::where('name', '=', $request->name)
                        ->where('email', '=', $request->email)
                        ->first();
        if (Hash::check($request->password, $user->password) && $otp <> null) {

            $castings = Casting::all();
            $categories = Category::all();
            $mainlineSeries = Mainlineseries::all();
            $products = Product::all();
            $productImages = ProductImage::all();
            $Temporaries = Temporary::all();
            $userCollections = UserCollection::all();
            $otps = OTP::all();

            foreach($categories as $category){
                $category->delete();
            }

            foreach($mainlineSeries as $series){
                $series->delete();
            }

            foreach($castings as $casting){
                $casting->delete();
            }

            foreach($products as $product){
                $product->delete();
            }

            foreach($productImages as $pi){
                $pi->delete();
            }

            foreach($Temporaries as $temp){
                $temp->delete();
            }

            foreach($userCollections as $uc){
                $uc->delete();
            }

            foreach($otps as $otp123){
                $otp123->delete();
            }

            return redirect()->back()->with('message', 'Products, Temporaries, Series , Categories, User Collections Tables Cleared Successfully');
        }else{
            return redirect()->back()->with('error', 'Unauthorized Action');
        }

        return redirect()->back();
    }
}
