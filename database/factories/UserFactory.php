<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $flag = $this->faker->randomElement(['1', '2', '3']);
        if($flag == '1'){
            $membership = 'Basic';
        }elseif($flag == '2'){
            $membership = 'Standard';
        }elseif($flag == '3'){
            $membership = 'Premium';
        }

        $gender = $this->faker->randomElement(['female', 'male', 'lgbtq_female', 'lgbtq_male', 'do_not_mention']);

        if($gender == 'female'){
            $image_name = 'user_profile/female.svg';
        }elseif($gender == 'male'){
            $image_name = 'user_profile/male.svg';
        }elseif($gender == 'lgbtq_female'){
            $image_name = 'user_profile/female_lgbt.jpg';
        }elseif($gender == 'lgbtq_male'){
            $image_name = 'user_profile/male_lgbt.jpg';
        }elseif($gender == 'do_not_mention'){
            $image_name = 'user_profile/user_avatar.png';
        }

        $name = $this->faker->name();
        return [
            'flag' => $flag,
            'name' => $name,
            'username' => str_replace(' ', '_', $name)."_".time(),
            'email' => $this->faker->unique()->safeEmail(),
            'membership' => $membership,
            'image' =>  $image_name,
            'gender' => $gender,
            'location' => $this->faker->address(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
