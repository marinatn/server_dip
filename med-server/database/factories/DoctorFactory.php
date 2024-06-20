<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class DoctorFactory extends Factory
{
    public function definition(): array
    {
        return [
            'fio' => fake('ru_RU')->name(),
            'post' => rand(1, 17), // sync it with client side VocabularyService.getPosts
            'snils' => fake()->numberBetween(100000000, 999999999),
        ];
    }
}



