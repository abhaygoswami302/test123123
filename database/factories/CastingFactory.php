<?php

namespace Database\Factories;

use App\Models\Subseries;
use Illuminate\Database\Eloquent\Factories\Factory;

class CastingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $subseries =  Subseries::all()->random();
        return [
            'subseries_id' => $subseries->id,
            'subseries_name' => $subseries->name,
            'casting_name' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo aperiam ipsum possimus voluptatum eum eius expedita ea dignissimos accusamus, voluptatibus, tenetur fuga neque laboriosam. Aspernatur, soluta maiores. Incidunt, in expedita.'
        ];
    }
}
