<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikedProductController extends Controller
{
    public function index()
    {
        $user = User::where('id', '=', Auth::user()->id)->first();
        $products = $user->products->sortByDesc('updated_at');

        return view('user.liked.index', compact('products'));
    }

}
