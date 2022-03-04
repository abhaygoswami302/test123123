<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Suggestion;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function coming_soon()
    {
        return view('guest.coming_soon');
    }

    public function apps_coming_soon()
    {
        return view('guest.apps_coming_soon');
    }

    public function suggestionsPost(Request $request)
    {
        Suggestion::create($request->all());
        return redirect()->back()->with('message', 'Thank You For Your Suggestion');
    }

    public function feedback(){
        return view('guest.feedback');
    }

    public function pricing()
    {
        return view('auth.pricing');
    }
}
