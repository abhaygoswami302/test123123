<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotWheelToys extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'collection_name',
        'category_name',
        'model_name',
        'image'
    ];
}
