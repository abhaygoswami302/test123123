<?php

namespace Database\Factories;

use App\Models\Collection;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $collection =  Collection::all()->random();
        return [
            'collection_id' => $collection->id,
            'collection_name' => $collection->name,
            'name' => $this->faker->unique()->randomElement(['Flying Colors', 'Super Chromes', 'Pop Culture',
                                'Speed Machines' , 'Classics (original)', 'Ultra Hots (original)' , '100%' , 'Pro Racing' ,
                                'Hot Wheels Racing' , 'Hall of Fame' , 'Auto Affinity' , 'Classics' ]),
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo aperiam ipsum possimus voluptatum eum eius expedita ea dignissimos accusamus, voluptatibus, tenetur fuga neque laboriosam. Aspernatur, soluta maiores. Incidunt, in expedita.'
        ];
    }
}
