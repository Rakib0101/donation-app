<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class ResumeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle,
            'resume_no' => uniqid(),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'photo' => $this->faker->imageUrl(300, 300, 'people', true, 'Faker'),
            'profession' => $this->faker->jobTitle,
            'website' => $this->faker->url,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'description' => $this->faker->paragraph,
            'gender' => Arr::random(['male', 'female']),
            'marital_status' => Arr::random(['single', 'married']),
            'is_active' => $this->faker->boolean,
        ];
    }
}
