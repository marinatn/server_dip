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
        return [
            'fio' => fake('ru')->name(),
            'bith_date' => fake('ru')->date(),
            'snils_code' => fake()->numberBetween(100000000, 999999999),
            'police_code' => fake()->numberBetween(100000000, 999999999),
            'risks' => json_encode([1, 2, 3, 4]),
            'sex' => fake()->randomElement(['male', 'female']),

        ];
    }
}
