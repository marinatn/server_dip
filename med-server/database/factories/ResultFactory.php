<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ResultFactory extends Factory
{
    public function definition(): array
    {
        return [
            'result' => json_encode([
                'k' => 'asd',
                'kasd' => 'asasdasd'
            ]), // same count as orders for research
        ];
    }
}



