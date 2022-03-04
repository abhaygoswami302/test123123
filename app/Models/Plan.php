<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_id',
        'state',
        'name',
        'description',
        'type',
        'payment_definitions_id',
        'payment_definitions_name',
        'payment_definitions_type',
        'payment_definitions_frequency',
        'pd_currency',
        'pd_value',
        'pd_cycles',
        'pd_charge_model_id',
        'pd_cm_type',
        'pd_cm_amount_currency',
        'pd_cm_amount_value',
        'pd_frequency_interval',
        'merchant_preferences_setup_currency',
        'merchant_preferences_setup_value',
        'max_fail_attempts',
        'return_url',
        'cancel_url',
        'auto_bill_amount',
        'initial_fail_amount_action',
        'links_href',
        'rel',
        'method',
        'create_time',
        'update_time',    
    ];
}
