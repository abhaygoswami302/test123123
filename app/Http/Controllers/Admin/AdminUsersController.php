<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminUsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name', 'ASC')->paginate(20);
        return view('admin.users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::where('id', '=', $id)->first();
        $products = $user->products()->orderBy('created_at', 'DESC')->paginate(10);
        /*$products = Product::where('user_id', '=', $id)->
        orderBy('created_at', 'DESC')->paginate(10);*/
        return view('admin.users.show', compact('products', 'user'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required', 
            'email' => 'required|unique:temp_users,email|unique:users,email',
            'password' => 'required|confirmed|min:6',

        ]);

        if($request->flag == '2'){
            $user = new User();
            $user->name = $request->name;
            $user->flag = $request->flag;
            $user->email = $request->email;
            $user->location = $request->location;
            $user->membership = 'Standard';
            $user->password = Hash::make($request->password);
            $user->added_by_admin = '1';
            $user->save();
            return redirect()->back()->with('user_created', 'New Standard User Created');
        }elseif($request->flag == '3'){
            $user = new User();
            $user->name = $request->name;
            $user->flag = $request->flag;
            $user->email = $request->email;
            $user->location = $request->location;
            $user->membership = 'Premium';
            $user->password = Hash::make($request->password);
            $user->added_by_admin = '1';
            $user->save();
            return redirect()->back()->with('user_created', 'New Premium User Created');
        }elseif($request->flag == '11'){
            $user = new User();
            $user->name = $request->name;
            $user->flag = $request->flag;
            $user->email = $request->email;
            $user->location = $request->location;
            $user->membership = 'Editor';
            $user->password = Hash::make($request->password);
            $user->added_by_admin = '1';
            $user->save();
            return redirect()->back()->with('user_created', 'New Editor Role User Created');
        }elseif($request->flag == '21'){
            $user = new User();
            $user->name = $request->name;
            $user->flag = $request->flag;
            $user->email = $request->email;
            $user->location = $request->location;
            $user->membership = 'Contributor';
            $user->password = Hash::make($request->password);
            $user->added_by_admin = '1';
            $user->save();
            return redirect()->back()->with('user_created', 'New Contributor Role User Created');
        }else{
            return redirect()->back();
        }    
    }
    
    public function premium()
    {
        $users = User::where('flag', '=', '3')->orderBy('name', 'ASC')->paginate(12);
        return view('admin.users.premium', compact('users'));
    }

    public function standard()
    {
        $users = User::where('flag', '=', '2')->orderBy('name', 'ASC')->paginate(12);
        return view('admin.users.standard', compact('users'));
    }

    public function basic()
    {
        $users = User::where('flag', '=', '1')->orderBy('name', 'ASC')->paginate(12);
        return view('admin.users.basic', compact('users'));
    }

    public function destroy($id)
    {
        $user = User::where('id', '=', $id)->first();
        $user->delete();

        return redirect()->back()->with('user_deleted', 'User Deleted Successfully');
    }

    public function adminUsers()
    {
        $users = User::where('added_by_admin', '=', '1')->orderBy('name')->orderBy('created_at', 'DESC')->get();
        return view('admin.users.adminUsers', compact('users'));

    }
}
