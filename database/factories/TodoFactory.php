<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Todo;
use App\User;
use Faker\Generator as Faker;

class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'     => $this->faker->title(),
            'status'    => $this->faker->status(),
            'user_id'   => User::class,
        ];
    }
}
