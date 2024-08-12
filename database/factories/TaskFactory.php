<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TaskFactory extends Factory
{
    public function definition()
    {
        return [
            'title' =>'fake title',
            'description' =>'fake description',
            'due date' => now(),
            'priority' => $this->faker->randomElement(['low', 'medium', 'high']),
            'user_id' => User::all()->random()->id,
        ];
    }

}
