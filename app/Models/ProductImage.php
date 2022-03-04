<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'collection_name',
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
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    } 
}
