<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\PasswordReset as MailPasswordReset;
use App\Models\PasswordReset;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PasswordResetUccController extends Controller
{
    public function index()
    {
        return view('auth.password_layout');
    }

    public function emailPost(Request $request)
    {
        $user = User::where('email', '=', $request->email)->first();

        if($user == null){
            return redirect()->back()->with('error', 'No Such Email Record Exists');

        }else{
            $token = Str::random(100);
            $email = $request->email;
            $PasswordReset = new PasswordReset();
            $PasswordReset->email = $email;
            $PasswordReset->token = $token;
            $PasswordReset->save();
    
            $user = PasswordReset::where('token', '=', $token)
                                        ->where('email', '=', $request->email)->first();
            
            Mail::to($user)->send(new MailPasswordReset($token, $email));
            return redirect()->back()->with('message', 'Password Reset Link Sent To Your Mail');    
        }
    }

    public function reset_password_custom($token, $email)
    {

        
      
        $user = User::where('email', '=', $email)->first();

        if($user == null){
            return redirect()->back()->with('error', 'No Such Email Record Exists');
        }

        $PasswordReset = PasswordReset::where('token', '=', $token)
        ->where('email', '=', $email)->first();
    
        if($PasswordReset == null){
            return redirect()->back()->with('error', 'No Such Record Exists');
        }else{
            return view('auth.passwords.password_reset_email', compact('token', 'email'));
        }
    }

    public function reset_password_edit(Request $request)
    {
        $user = User::where('email', '=', $request->email)->first();

        if($user == null){
            return redirect()->back()->with('error', 'No Such Email Record Exists');
        }

        $validated = $request->validate([
            "email" => "required|email",
            "password" => "required|confirmed",
        ]);
       
        $PasswordReset = PasswordReset::where('token', '=', $request->token)
                                ->where('email', '=', $request->email)->first();

        if($PasswordReset == null){
            return redirect()->route('welcome');
        }else{   
            $user = User::where('email', '=', $request->email)->first();
            $user->password = Hash::make($request->password);
            $user->save();
            $PasswordReset->delete();

            return redirect()->route('login')->with('message', 'Password Updated Successfully');
        }
       
    }
}
