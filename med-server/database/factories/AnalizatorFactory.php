<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Analizator>
 */
class AnalizatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake('ru')->city(),

            'short-name'=>fake('ru')->city(),

            'type_interaction'=>fake()->randomElement([
               'Автоматический',
                'Полуавтоматический',
                'Ручной',
                'Двусторонний обмен'
            ]),

            'type_equipment' => fake()->randomElement([
                'Анализатор 1',
                'Анализатор 2',
                'Анализатор 3',
                'Анализатор 4',
                'Анализатор 5',
                ]),
        ];
    }
}
