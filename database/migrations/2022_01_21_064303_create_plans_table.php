<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('plan_id');
            $table->string('state');
            $table->string('name');
            $table->text('description');
            $table->string('type');
            $table->string('payment_definitions_id');
            $table->string('payment_definitions_name');
            $table->string('payment_definitions_type');
            $table->string('payment_definitions_frequency');
            $table->string('pd_currency');
            $table->string('pd_value');
            $table->string('pd_cycles');
            $table->string('pd_charge_model_id');
            $table->string('pd_cm_type');
            $table->string('pd_cm_amount_currency');
            $table->string('pd_cm_amount_value');
            $table->string('pd_frequency_interval');
            $table->string('merchant_preferences_setup_currency');
            $table->string('merchant_preferences_setup_value');
            $table->string('max_fail_attempts');
            $table->string('return_url');
            $table->string('cancel_url');
            $table->string('auto_bill_amount');
            $table->string('initial_fail_amount_action');
            $table->text('links_href');
            $table->string('rel');
            $table->string('method');
            $table->string('create_time');
            $table->string('update_time');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
}
