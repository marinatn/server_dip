<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ResearchOrder>
 */
class ResearchOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $researches= [
            [1,8],
            [2,3],
            [2,7,4],
            [3,4,5],
            [1,7,5],
            [2,4,9]
        ];
        return [
            'patient_id' => rand(1,100),
            'researches' => json_encode($researches[rand(0,5)]),
            'is_cito' => fake()->boolean(),
            'doctor_id' => rand(1,25),
        ];
    }
}
