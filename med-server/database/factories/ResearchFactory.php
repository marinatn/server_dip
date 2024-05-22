<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Research>
 */
class ResearchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Исследование на ВИЧ',
                'Исследование на диабет',
                'Исследование на зависимости',
                'Судмед экспертиза'
            ]),
            'code' => fake()->numberBetween(10000000, 99999998),
        ];
    }
}
