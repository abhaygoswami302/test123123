<?php

namespace App\Http\Controllers;

use App\Models\UserCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class removeProductFromCollectionController extends Controller
{
    public function destroy($id)
    {
        $usercollection = UserCollection::where('user_id', '=', Auth::user()->id)
                                ->where('product_id', '=', $id)->first();
        $usercollection->delete();

        return redirect()->back()->with('message', 'Product Successfully Removed From Your Collection');
    }
}
