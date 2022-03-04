<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('user.profile.edit');
    }

    public function store(Request $request)
    {
        $user = User::where('id', '=', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->gender = $request->gender;
        $user->membership = $request->membership;
        $user->location = $request->location;
        $user->email = $request->email;

        if($request->file('image') == null && 
        $user->image <> 'user_profile/female.svg' && 
        $user->image <> 'user_profile/male.svg' && 
        $user->image <> 'user_profile/female_lgbt.jpg' &&
        $user->image <> 'user_profile/male_lgbt.jpg' &&
        $user->image <> 'user_profile/user_avatar.png' &&
        $user->image == null){
            if($request->gender == 'female'){
                $image_name = 'user_profile/female.svg';
            }elseif($request->gender == 'male'){
                $image_name = 'user_profile/male.svg';
            }elseif($request->gender == 'lgbtq_female'){
                $image_name = 'user_profile/female_lgbt.jpg';
            }elseif($request->gender == 'lgbtq_male'){
                $image_name = 'user_profile/male_lgbt.jpg';
            }elseif($request->gender == 'do_not_mention'){
                $image_name = 'user_profile/user_avatar.png';
            }
            $user->image = $image_name;

        }elseif($request->file('image') <> null){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path("user_profiles/");
            $image->move($destinationPath, $name);
            $image_name ="user_profiles/".$name;
            $user->image = $image_name;

        }

        $user->save();

        return redirect()->back()->with('message', 'Profile Updated Successfully');
    }
}
