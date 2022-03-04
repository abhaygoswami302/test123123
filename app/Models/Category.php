<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['collection_id', 'collection_name', 'name', 'image', 'description'];

    public function product(){
        return $this->hasOne(Product::class);
    }
}
