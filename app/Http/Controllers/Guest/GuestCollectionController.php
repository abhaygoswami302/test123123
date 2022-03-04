<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use Illuminate\Http\Request;

class GuestCollectionController extends Controller
{
    public function index()
    {
        $collections = Collection::latest()->get();
        return view('guest.collections.guest_collections', compact('collections'));
    }
}
