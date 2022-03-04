<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Collection;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubseriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $collection =  Collection::all()->random();
        $category = Category::all()->random();
        $name = $this->faker->word;

        return [
            'category_id' => $category->id,
            'collection_id' => $collection->id,
            'collection_name' => $collection->name,
            'name' => $name,
            'category_name' => $category->name,
            'series_name' => $category->name ." : ". $name,
        ];
    }
}
