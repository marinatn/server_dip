<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;



class DoctorFactory extends Factory {
    public function  definition(): array

    {
        return [
            'fio' => fake ('ru') -> name(),
            'post' => fake ('ru') ->asciify(),
            'snils' => fake()->numberBetween(100000000, 999999999),
        ];
    }
}



