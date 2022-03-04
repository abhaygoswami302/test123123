<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subseries extends Model
{
    use HasFactory;

    protected $table = 'subseries';
    
    protected $fillable = ['collection_id', 'category_id','name', 'series_name', 'category_name', 'collection_name'];
}
