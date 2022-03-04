<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function general_disclaimer()
    {
        return view('auth.documents.general_disclaimer');
    }

    public function privacy_policy()
    {
        return view('auth.documents.privacy_policy');
    }

    public function terms_and_conditions()
    {
        return view('auth.documents.terms_and_conditions');
    }
}
