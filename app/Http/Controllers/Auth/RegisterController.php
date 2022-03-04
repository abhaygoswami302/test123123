<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
 /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function redirectTo()
    {  
        Auth::logout();
    	$this->redirectTo="/login";
        return $this->redirectTo;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['nullable'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'flag' => ['required', 'string'],
            'image' => [ 'mimes:jpeg,jpg,png,gif', 'required', 'max:10000'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $membership = "";
        if($data['flag'] == 1){
            $membership = 'Basic';
        }elseif($data['flag'] == 2){
            $membership = 'Standard';
        }elseif($data['flag'] == 3){
            $membership = 'Premium';
        }

        $digits = 4;
        $random= rand(pow(10, $digits-1), pow(10, $digits)-1);

        $username = $data['name'].'_'.$random;

        $image = $data['image'];
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path("images/user/profiles");
        $image->move($destinationPath, $name);
        $profile_picture ="images/user/profiles/".$name;

        return User::create([
            'name' => $data['name'],
            'username' => $username,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'flag' => $data['flag'],
            'membership' => $membership,
            'image' => $profile_picture,
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm($planID,$flag)
    {
        return view('auth.register', compact('planID','flag'));
    }
}
