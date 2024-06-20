<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $risks= [
            [1,11],
            [2,3],
            [2,7,4],
            [3,4,5],
            [1,7,5],
            [2,4,10]
        ];
        return [
            'fio' => fake('ru_RU')->name(),
            'bith_date' => fake()->date(),
            'snils_code' => fake()->numberBetween(100000000, 999999999),
            'police_code' => fake()->numberBetween(100000000, 999999999),
            'risks' => json_encode($risks[rand(0,5)]),
            'sex' => fake()->randomElement(['male', 'female']),
        ];
    }
}
