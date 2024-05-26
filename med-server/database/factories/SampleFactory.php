<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sample>
 */
class SampleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => fake()->numberBetween(10000000, 99999998),

            'name'=>fake('ru')->city(),

            'biomaterial'=>fake()->randomElement([
                'Кровь',
                'Моча',
                'Кал',
                'Слюна'
            ]),

            'container' => fake()->randomElement([
                'Пробирка',
                'Ведро',
                'Канистра',
            ]),
        ];
    }
}
