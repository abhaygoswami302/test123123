<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporary extends Model
{
    use HasFactory;

    protected $fillable = [
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
        'notes',
        'image',
        'toy_hash',
        'col_hash',
        'series_hash',
        'class',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'image6',
        'image7',
        'image8',
        'image9',
        'image10',
        'image11',
        'image12',
        'image13',
        'image14',
        'image15',
        'image16',
        'image17',
        'image18',
        'image19',
        'image20',
        'image21',
        'image22',
        'image23',
        'image24',
        'image25',
        'image26',
        'image27',
        'image28',
        'image29',
        'image30',
        'image31',
        'image32',
        'image33',
        'image34',
        'image35',
        'image36',
        'image37',
        'image38',
        'image39',
        'image40',
        'lego_mf_fig_num',
        'lego_mf_name',
        'lego_mf_num_parts'
    ];
}
