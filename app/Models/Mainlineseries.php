<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mainlineseries extends Model
{
    use HasFactory;

    protected $fillable = ['subseries_id', 'name', 'subseries_name', 'category_name', 'casting_name'];
    
}
