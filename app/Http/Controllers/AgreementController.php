<?php

namespace App\Http\Controllers;

use App\Models\Plan as ModelsPlan;
use App\Models\TempUsers;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use PayPal\Api\Agreement;
use PayPal\Api\Payer;
use PayPal\Api\Plan;
use PayPal\Exception\PayPalConnectionException;

class AgreementController extends Controller
{
    public function createAgreement(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required', 
            'email' => 'required|unique:temp_users,email|unique:users,email',
        ]);
        
        $membership = "";
        if($request->flag == 1){
            $membership = 'Basic';
        }elseif($request->flag == 2){
            $membership = 'Standard';
        }elseif($request->flag == 3){
            $membership = 'Premium';
        }

        $image = $request->image;
        $profile_picture = null;
        if($image <> null){
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path("images/user/profiles");
            $image->move($destinationPath, $name);
            $profile_picture ="images/user/profiles/".$name;
        }

        $digits = 4;
        $random= rand(pow(10, $digits-1), pow(10, $digits)-1);

        $username = $request->name.'_'.$random;

        $temp_user = new TempUsers();

        $temp_user->csrf_token = $request->_token;
        $temp_user->planID = $request->planID;
        $temp_user->flag = $request->flag;
        $temp_user->name = $request->name;
        $temp_user->username = $username;
        $temp_user->email = $request->email;
        $temp_user->membership = $membership;
        $temp_user->image = $profile_picture;
        $temp_user->password = Hash::make($request->password);
       
        $temp_user->save();

        Session::put('useless', $request->_token);
        Session::put('another_useless', $request->email);

        $myplan = ModelsPlan::where('id', '=', $request->planID)->first();
        $planID = $myplan->plan_id;
        //dd($planID);

        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'ARDeB7R9KkGpmx6GMXeYzpGKUZGQ1UQN5XJU2nU1FWUwPtKLDb9x1pZv_eQ5Is-Grde4k9XHHuYC6LAX',     // ClientID
                'EH6m80MctWOQ9NhRPVcci4vzvmDuLWg7kPz66pJvPx7lTFf2HFMvigd5tfoaa8y05-Mjg_BDibTjUkCp'      // ClientSecret
            )
        );

        $agreement = new Agreement();

        $mytime = Carbon::now();
        $date123 = $mytime->toDateTimeString();

        $date = $mytime->addDays('1');

        $agreement->setName('Base Agreement')
            ->setDescription('Basic Agreement')
            ->setStartDate($date);

        $plan = new Plan();
        $plan->setId($planID);
        $agreement->setPlan($plan);
       // dd($agreement);
        
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $agreement->setPayer($payer);

        /*$shippingAddress = new ShippingAddress();
          $shippingAddress->setLine1('111 First Street')
            ->setCity('Saratoga')
            ->setState('CA')
            ->setPostalCode('95070')
            ->setCountryCode('US');
        
        $agreement->setShippingAddress($shippingAddress);*/

        //$request = clone $agreement;

        try {
            $agreement = $agreement->create($apiContext);
        } catch (PayPalConnectionException $ex) {
            echo $ex->getCode(); // Prints the Error Code
            echo $ex->getData(); // Prints the detailed error message 
            die($ex);
        } catch (Exception $ex) {
            die($ex);
        }
     
       $approvalUrl = $agreement->getApprovalLink();

       return redirect($approvalUrl);   
    }

    public function executeAgreement($status, Request $request)
    {
      //  Session::put('useless', $request->_token);
      //  Session::put('another_useless', $request->email);
     
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'ARDeB7R9KkGpmx6GMXeYzpGKUZGQ1UQN5XJU2nU1FWUwPtKLDb9x1pZv_eQ5Is-Grde4k9XHHuYC6LAX',     // ClientID
                'EH6m80MctWOQ9NhRPVcci4vzvmDuLWg7kPz66pJvPx7lTFf2HFMvigd5tfoaa8y05-Mjg_BDibTjUkCp'      // ClientSecret
            )
        );

        if($status == 'true'){
            $token = request('token');
            $agreement = new Agreement();
            $agreement->execute($token, $apiContext);

            $temp_user123 = TempUsers::where('csrf_token', '=', Session::get('useless'))
                                    ->where('email', '=', Session::get('another_useless'))->first();
            //dd($temp_user123);
            if(Auth::check()){
                $user = User::where('id', '=', Auth::user()->id)->first();
            }else{
                $user = new User();
            }
            $user->name = $temp_user123->name;
            $user->email = $temp_user123->email;
            $user->username = $temp_user123->username;  
            $user->login_status = 'offline';
            $user->last_login_timestamp =  Carbon::now()->toDateTimeString();
            $user->flag = $temp_user123->flag;
            $user->planID = $temp_user123->planID;
            $user->membership = $temp_user123->membership;
            if(Auth::check()){
               
            }else{
                $user->password = $temp_user123->password;
            }
           
            $user->image = $temp_user123->image;
            $user->save();

            $temp_user123->delete();
          
            return redirect()->route('login')->with('message', 'Subscription Done! Congratulationsssss');
        }

    }
}
