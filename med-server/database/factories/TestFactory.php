<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Test>
 */
class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $testName = fake()->randomElement([
            'Гликированный гемоглобин + глюкоза',
            'Биохимия комплекс',
            'Комплекс анализов "15 показателей здоровья"',
            'Биохимический анализ крови расширенный',
            'Биохимия комплекс',
            'Экспресс анализ острых кишечных инфекций'
        ]) . ' ';

        $testName = fake()->randomElement([
                '(срочный)',
                '(базовый)',
                '(расширенный)',
            ]) . ' ';
        $testName = fake()->randomElement([
                '(с подбором препоратов)',
                '(с рекомендацией)',
                '',
            ]) . ' ';
        $refs= [
            [1],
            [2,3],
            [2.3,4],
            [3,4,5],
            [1,3,5],
            [2,4,1]
        ];
        return [
            'name' => $testName,
            'code' => fake()->numberBetween(100000000, 999999999),
            'refs' => json_encode($refs[rand(0,5)]),
        ];
    }
}
