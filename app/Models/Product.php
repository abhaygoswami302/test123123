<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
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
        'toy_hash',
        'col_hash',
        'series_hash',
        'notes',
        'class',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'lego_mf_fig_num',
        'lego_mf_name',
        'lego_mf_num_parts'
    ];

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function($query) use($term){
            $query->where('category_name', 'like', $term)
                    ->orWhere('name', 'like', $term)
                    ->orWhere('series', 'like', $term);
        });
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_collections',  'product_id', 'user_id');
    }

    public function scopeSearchName($query, $name)
    {
        if ($name) $query->where('name', 'like', "%{$name}%");
    }

    public function scopeSearchCategoryName($query, $categoryName)
    {
        if ($categoryName) $query->where('category_name', 'like', "%{$categoryName}%");
    }

    public function scopeSearchSeries($query, $series)
    {
        if ($series) $query->where('series', 'like', "%{$series}%");
    }

    public function scopeSearchCastingName($query, $castingName)
    {
        if($castingName) $query->where('casting_name', 'like', "%{$castingName}%");
    }

    public function scopeSearchYear($query, $year)
    {
        if($year) $query->where('year', 'like', "%{$year}%");
    }

    public function productImage()
    {
        return $this->hasOne(ProductImage::class);
    }   

    public function collection(){
        return $this->belongsTo(Collection::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
