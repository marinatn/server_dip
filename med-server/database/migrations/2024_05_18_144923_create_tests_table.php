<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('tests');
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->json('refs');
            $table->timestamps();
        });
        DB::table('tests')->insert([
            // Гематологические исследования
            [
                'id' => 1,
                'code' => rand(1000000, 99999999),
                'name' => 'Общий анализ крови',
                'refs' => json_encode([rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)])
            ],
            [
                'id' => 2,
                'code' => rand(1000000, 99999999),
                'name' => 'Лейкоцитарная формула (микроскопия)',
                'refs' => json_encode([rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)])
            ],
            [
                'id' => 3,
                'code' => rand(1000000, 99999999),
                'name' => 'Клинический анализ крови (общий анализ крови+СОЭ+лейкоцитарная формула (микроскопия))',
                'refs' => json_encode([rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)])
            ],
            [
                'id' => 4,
                'code' => rand(1000000, 99999999),
                'name' => 'Подсчет ретикулоцитов',
                'refs' => json_encode([rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)])
            ],
            [
                'id' => 5,
                'code' => rand(1000000, 99999999),
                'name' => 'Подсчет тромбоцитов по Фонио',
                'refs' => json_encode([rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)])
            ],
            [
                'id' => 6,
                'code' => rand(1000000, 99999999),
                'name' => 'СОЭ (автоматизированный метод микрофотометрии)',
                'refs' => json_encode([rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)])
            ],

            // Изосерологические исследования
            [
                'id' => 7,
                'code' => rand(1000000, 99999999),
                'name' => 'Антигены системы Kell',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                    rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 8,
                'code' => rand(1000000, 99999999),
                'name' => 'Антитела к антигенам эритроцитов (прямая реакция Кумбса)',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 9,
                'code' => rand(1000000, 99999999),
                'name' => 'Антитела к резус-фактору (непрямая реакция Кумбса)',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 10,
                'code' => rand(1000000, 99999999),
                'name' => 'Группа крови и резус-фактор',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],

            // Коагулологические исследования
            [
                'id' => 11,
                'code' => rand(1000000, 99999999),
                'name' => 'Протромбин по Квику, Протромбиновый индекс + МНО',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 12,
                'code' => rand(1000000, 99999999),
                'name' => 'Тромбиновое время',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 13,
                'code' => rand(1000000, 99999999),
                'name' => 'Фибриноген',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 14,
                'code' => rand(1000000, 99999999),
                'name' => 'АЧТВ',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 15,
                'code' => rand(1000000, 99999999),
                'name' => 'Антитромбин III',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 16,
                'code' => rand(1000000, 99999999),
                'name' => 'D -Димер',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 17,
                'code' => rand(1000000, 99999999),
                'name' => 'Протеин S',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 18,
                'code' => rand(1000000, 99999999),
                'name' => 'Волчаночный антикоагулянт',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 19,
                'code' => rand(1000000, 99999999),
                'name' => 'РКФМ (растворимые комплексы фибрин-мономеров)',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 20,
                'code' => rand(1000000, 99999999),
                'name' => 'Агрегация тромбоцитов',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],

            // Общеклинические исследования
            [
                'id' => 21,
                'code' => rand(1000000, 99999999),
                'name' => 'Общий анализ мочи',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25),
                        [rand(1,25), rand(1,25), rand(1,25)]]
                )
            ],
            [
                'id' => 22,
                'code' => rand(1000000, 99999999),
                'name' => 'Анализ мочи по Зимницкому',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25),
                        [rand(1,25), rand(1,25), rand(1,25)]])
            ],
            [
                'id' => 23,
                'code' => rand(1000000, 99999999),
                'name' => 'Анализ мочи по Нечипоренко',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25),
                        [rand(1,25), rand(1,25), rand(1,25)]])
            ],
            [
                'id' => 24,
                'code' => rand(1000000, 99999999),
                'name' => 'Проба Сулковича',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25),
                        [rand(1,25), rand(1,25), rand(1,25)]])
            ],
            [
                'id' => 25,
                'code' => rand(1000000, 99999999),
                'name' => '3-х стаканная проба',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25),
                        [rand(1,25), rand(1,25), rand(1,25)]])
            ],
            [
                'id' => 26,
                'code' => rand(1000000, 99999999),
                'name' => '2-х стаканная проба',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25),
                        [rand(1,25), rand(1,25), rand(1,25)]])
            ],
            [
                'id' => 27,
                'code' => rand(1000000, 99999999),
                'name' => 'Анализ мочи на микобактерии туберкулеза',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25),
                        [rand(1,25), rand(1,25), rand(1,25)]])
            ],

            // Исследование отделяемого верхних дыхательных путей
            [
                'id' => 28,
                'code' => rand(1000000, 99999999),
                'name' => 'Мазок из носа на эозинофилы',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 29,
                'code' => rand(1000000, 99999999),
                'name' => 'Общеклиническое исследование назального секрета (риноцитограмма)',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],

            // Микроскопические исследования отделяемого мочеполовых органов
            [
                'id' => 30,
                'code' => rand(1000000, 99999999),
                'name' => 'Общеклиническое исследование отделяемого женских мочеполовых органов 1 точка (женский мазок 1 точка)',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 31,
                'code' => rand(1000000, 99999999),
                'name' => 'Общеклиническое исследование отделяемого женских мочеполовых органов 3 точки (женский мазок 3 точки)',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 32,
                'code' => rand(1000000, 99999999),
                'name' => 'Общеклиническое исследование отделяемого женских мочеполовых органов 2 точки (женский мазок 2 точки)',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 33,
                'code' => rand(1000000, 99999999),
                'name' => 'Общеклиническое исследование сока предстательной железы',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 34,
                'code' => rand(1000000, 99999999),
                'name' => 'Общеклиническое исследование отделяемого уретры (мужской мазок)',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],

            // Исследование эякулята
            [
                'id' => 35,
                'code' => rand(1000000, 99999999),
                'name' => 'Спермограмма',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 36,
                'code' => rand(1000000, 99999999),
                'name' => 'MAR - тест (определение антиспермальных антител в эякуляте)',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 37,
                'code' => rand(1000000, 99999999),
                'name' => 'MAR-тест (Определение антиспермальных антител класса IgG в эякуляте)',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 38,
                'code' => rand(1000000, 99999999),
                'name' => 'MAR-тест (Определение антиспермальных антител класса IgA в эякуляте)',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],

            // Исследование на микозы и демодекоз
            [
                'id' => 39,
                'code' => rand(1000000, 99999999),
                'name' => 'Исследование на демодекоз',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 40,
                'code' => rand(1000000, 99999999),
                'name' => 'Исследование ногтевых пластинок на грибы',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 41,
                'code' => rand(1000000, 99999999),
                'name' => 'Исследование соскобов кожи на грибы',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],

            // Исследование кала
            [
                'id' => 42,
                'code' => rand(1000000, 99999999),
                'name' => 'Общий анализ кала (копрограмма)',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 43,
                'code' => rand(1000000, 99999999),
                'name' => 'Панкреатическая эластаза 1',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 44,
                'code' => rand(1000000, 99999999),
                'name' => 'Углеводы в кале',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 45,
                'code' => rand(1000000, 99999999),
                'name' => 'Исследование кала на скрытую кровь',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 46,
                'code' => rand(1000000, 99999999),
                'name' => 'Исследование кала на простейшие и яйца гельминтов',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 47,
                'code' => rand(1000000, 99999999),
                'name' => 'Исследование на энтеробиоз',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],
            [
                'id' => 48,
                'code' => rand(1000000, 99999999),
                'name' => 'Исследование кала на простейшие и яйца гельминтов системой ПАРАСЕП',
                'refs' => json_encode(
                    [rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25),
                        rand(1,25), rand(1,25), rand(1,25), rand(1,25), rand(1,25)]
                )
            ],

            // https://mc-extra.ru/service/analizy.html#to-cat-120
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
