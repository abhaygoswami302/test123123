<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CollectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Hot Wheels',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore iusto totam vel adipisci cum praesentium quod voluptates maiores nemo similique omnis, sequi nostrum cumque dolores placeat architecto quaerat earum alias.'
        ];
    }
}
