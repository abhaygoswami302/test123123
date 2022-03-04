<?php

namespace Database\Factories;

use App\Models\Casting;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Subseries;
use App\Models\Theme;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $subseries = Subseries::all()->random();
        $themes = Theme::all()->random();
        $category = Category::where('id', '=', $subseries->category_id)->first();
        $collection = Collection::where('id', '=', $category->collection_id)->first();
        $casting = Casting::where('subseries_id', '=', $subseries->id)->first();
        
        return [
        'collection_id' => $subseries->collection_id,
        'category_id' => $subseries->category_id,
        'subseries_id' => $subseries->id,
        'name' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
        'series' => $subseries->series_name,
        'category_name' => $category->name,
        'collection_name' => $collection->name,
        'subseries_name' => $subseries->name,
        'theme' => $themes->name,
        'theme_id' => $themes->id,
        'casting_name' => $casting->casting_name,  
        'year' => $this->faker->date('Y'),
        'colour' => $this->faker->colorName(),
        'tampo' => $this->faker->word,
        'decoration' => $this->faker->word,
        'base_colour' => $this->faker->colorName(),
        'type' => $this->faker->word,
        'window_colour' => $this->faker->colorName(),
        'interior_colour' =>$this->faker->colorName(),
        'wheel_type' => $this->faker->word,
        'visibility' => $this->faker->randomElement(['0', '1']),
        'country' => $this->faker->country,
        'class' => $this->faker->randomElement(['Mainline', 'Premium']),
        'notes' => $this->faker->paragraph(),
        'toy_hash' => $this->faker->numberBetween(2, 211111111111),
        'col_hash' => $this->faker->numberBetween(2, 211111111111),
        'series_hash' => $this->faker->numberBetween(2, 211111111111),
        'image1'=> '/images/car_not_found.jpg',
        ];
    }
}
