<?php



namespace App\Http\Controllers;



use App\Models\Plan as ModelsPlan;

use Illuminate\Http\Request;

use PayPal\Api\ChargeModel;

use PayPal\Api\Currency;

use PayPal\Api\MerchantPreferences;

use PayPal\Api\Patch;

use PayPal\Api\PatchRequest;

use PayPal\Api\PaymentDefinition;

use PayPal\Api\Plan;

use PayPal\Common\PayPalModel;



class PlanController extends Controller

{

    public function createPlan()

    {

        $apiContext = new \PayPal\Rest\ApiContext(

            new \PayPal\Auth\OAuthTokenCredential(

                'ARDeB7R9KkGpmx6GMXeYzpGKUZGQ1UQN5XJU2nU1FWUwPtKLDb9x1pZv_eQ5Is-Grde4k9XHHuYC6LAX',     // ClientID

                'EH6m80MctWOQ9NhRPVcci4vzvmDuLWg7kPz66pJvPx7lTFf2HFMvigd5tfoaa8y05-Mjg_BDibTjUkCp'      // ClientSecret

            )

        );



        $plan = new Plan();



        $plan->setName('Standard Monthly Plan')

            ->setDescription('Monthly Standard Plan')

            ->setType('fixed');



        $paymentDefinition = new PaymentDefinition();



        $paymentDefinition->setName('Regular Payments Each Month')

            ->setType('REGULAR')

            ->setFrequency('Month')

            ->setFrequencyInterval("1")

            ->setCycles("12")

            ->setAmount(new Currency(array('value' => 10, 'currency' => 'AUD')));

        $chargeModel = new ChargeModel();

        $chargeModel->setType('SHIPPING')

            ->setAmount(new Currency(array('value' => 0, 'currency' => 'AUD')));

        $paymentDefinition->setChargeModels(array($chargeModel));



        $merchantPreferences = new MerchantPreferences();



        $merchantPreferences->setReturnUrl("https://ultimatecollectionscompany.com/execute-agreement/true")

            ->setCancelUrl("https://ultimatecollectionscompany.com/execute-agreement/false")

            ->setAutoBillAmount("yes")

            ->setInitialFailAmountAction("CONTINUE")

            ->setMaxFailAttempts("0")

            ->setSetupFee(new Currency(array('value' => 0, 'currency' => 'AUD')));



        $plan->setPaymentDefinitions(array($paymentDefinition));

        $plan->setMerchantPreferences($merchantPreferences);



        $request = clone $plan;



        $output = $plan->create($apiContext);



        return redirect()->route('execute.plan', $output->id);

    }



    public function executePlan($planID)

    {

        $apiContext = new \PayPal\Rest\ApiContext(

            new \PayPal\Auth\OAuthTokenCredential(

                'ARDeB7R9KkGpmx6GMXeYzpGKUZGQ1UQN5XJU2nU1FWUwPtKLDb9x1pZv_eQ5Is-Grde4k9XHHuYC6LAX',     // ClientID

                'EH6m80MctWOQ9NhRPVcci4vzvmDuLWg7kPz66pJvPx7lTFf2HFMvigd5tfoaa8y05-Mjg_BDibTjUkCp'      // ClientSecret

            )

        );



        $createdPlan = Plan::get($planID, $apiContext);



        $patch = new Patch();



        $value = new PayPalModel('{

               "state":"ACTIVE"

             }');

    

        $patch->setOp('replace')

            ->setPath('/')

            ->setValue($value);

        $patchRequest = new PatchRequest();

        $patchRequest->addPatch($patch);

    

        $createdPlan->update($patchRequest, $apiContext);

    

        $plan = Plan::get($planID, $apiContext);

        

        $Eloquent_Plan = new ModelsPlan();



        $Eloquent_Plan->plan_id = $plan->id;

        $Eloquent_Plan->state = $plan->state;

        $Eloquent_Plan->name = $plan->name;

        $Eloquent_Plan->description = $plan->description;

        $Eloquent_Plan->type = $plan->type;

        $Eloquent_Plan->payment_definitions_id = $plan->payment_definitions[0]->id;

        $Eloquent_Plan->payment_definitions_name = $plan->payment_definitions[0]->name;

        $Eloquent_Plan->payment_definitions_type = $plan->payment_definitions[0]->type;

        $Eloquent_Plan->payment_definitions_frequency = $plan->payment_definitions[0]->frequency;

        $Eloquent_Plan->pd_currency = $plan->payment_definitions[0]->amount->currency;

        $Eloquent_Plan->pd_value = $plan->payment_definitions[0]->amount->value;

        $Eloquent_Plan->pd_cycles = $plan->payment_definitions[0]->cycles;

        $Eloquent_Plan->pd_charge_model_id = $plan->payment_definitions[0]->charge_models[0]->id;

        $Eloquent_Plan->pd_cm_type = $plan->payment_definitions[0]->charge_models[0]->type;

        $Eloquent_Plan->pd_cm_amount_currency = $plan->payment_definitions[0]->charge_models[0]->amount->currency;

        $Eloquent_Plan->pd_cm_amount_value = $plan->payment_definitions[0]->charge_models[0]->amount->value;

        $Eloquent_Plan->pd_frequency_interval = $plan->payment_definitions[0]->frequency_interval;

        $Eloquent_Plan->merchant_preferences_setup_currency = $plan->merchant_preferences->setup_fee->currency;

        $Eloquent_Plan->merchant_preferences_setup_value = $plan->merchant_preferences->setup_fee->value;

        $Eloquent_Plan->max_fail_attempts = $plan->merchant_preferences->max_fail_attempts;

        $Eloquent_Plan->return_url = $plan->merchant_preferences->return_url;

        $Eloquent_Plan->cancel_url = $plan->merchant_preferences->cancel_url;

        $Eloquent_Plan->auto_bill_amount = $plan->merchant_preferences->auto_bill_amount;

        $Eloquent_Plan->initial_fail_amount_action = $plan->merchant_preferences->initial_fail_amount_action;

        $Eloquent_Plan->links_href = $plan->links[0]->href;

        $Eloquent_Plan->rel = $plan->links[0]->rel;

        $Eloquent_Plan->method = $plan->links[0]->method;

        $Eloquent_Plan->create_time = $plan->create_time;

        $Eloquent_Plan->update_time = $plan->update_time;



        $Eloquent_Plan->save();



        dd($plan);

    }

}

