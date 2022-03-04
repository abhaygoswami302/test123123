<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'username',
        'product_name',
        'product_id',
        'collection_id',
        'category_id',
        'subseries_id',
        'name',
        'series',
        'category_name',
        'collection_name',	
        'subseries_name',
        'theme',	
        'theme_id',	
        'model_name',	
        'casting_name',	
        'year',
        'colour',	
        'tampo',	
        'decoration',	
        'base_colour',	
        'type',	
        'window_colour',	
        'interior_colour',	
        'wheel_type',	
        'visibility',
        'country',	
        'class',	
        'col_hash',	
        'series_hash',	
        'toy_hash', 
        'notes',	
        'image1',	
        'image2',	
        'image3',	
        'image4',
        'image5',
        'important_note',
        'lego_mf_fig_num',
        'lego_mf_name',
        'lego_mf_num_parts',
        'image',
    ];
}
