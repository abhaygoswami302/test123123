<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Temporary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CSVController extends Controller
{
    public function create()
    {
        $temporaries = Temporary::latest()->paginate(40);
        return view('admin.csvs.create', compact('temporaries'));
    }
}
