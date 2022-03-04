<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casting extends Model
{
    use HasFactory;

    protected $fillable = ['subseries_id', 'series_id', 'subseries_name','casting_name', 'image', 'description'];
}
