<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;



class DoctorFactory extends Factory {
    public function  definition(): array

    {
        return [
            'fio' => fake ('ru') -> name(),
            'snils' => fake()->numberBetween(100000000, 999999999),
        ];
    }
}



