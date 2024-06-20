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
        Schema::dropIfExists('references');
        Schema::create('references', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('min');
            $table->float('max');
            $table->json('risks');
            $table->string('sex');
            $table->string('unit');
            $table->timestamps();
        });

        DB::table('references')->insert([
            [
                'name' => 'Общий белок',
                'min' => 64,
                'max' => 84,
                'risks' => json_encode([]),
                'sex' => 'male',
                'unit' => 'г/л.',
            ],
            [
                'name' => 'Гемоглобин',
                'min' => 130,
                'max' => 160,
                'risks' => json_encode([]),
                'sex' => 'male',
                'unit' => 'г/л.',
            ],
            [
                'name' => 'Гемоглобин',
                'min' => 120,
                'max' => 150,
                'risks' => json_encode([]),
                'sex' => 'female',
                'unit' => 'г/л.',
            ],
            [
                'name' => 'Гаптоглобин',
                'min' => 150,
                'max' => 2000,
                'risks' => json_encode([]),
                'sex' => 'male',
                'unit' => 'мг/л.',
            ],
            [
                'name' => 'Гаптоглобин',
                'min' => 150,
                'max' => 2000,
                'risks' => json_encode([]),
                'sex' => 'female',
                'unit' => 'мг/л.',
            ],
            [
                'name' => 'Глюкоза',
                'min' => 3.30,
                'max' => 5.50,
                'risks' => json_encode([]),
                'sex' => 'male',
                'unit' => 'ммоль/л.',
            ],
            [
                'name' => 'Глюкоза',
                'min' => 3.30,
                'max' => 5.50,
                'risks' => json_encode([]),
                'sex' => 'female',
                'unit' => 'ммоль/л.',
            ],
            [
                'name' => 'Мочевина',
                'min' => 2.50,
                'max' => 8.30,
                'risks' => json_encode([]),
                'sex' => 'male',
                'unit' => 'ммоль/л.',
            ],
            [
                'name' => 'Мочевина',
                'min' => 2.50,
                'max' => 8.30,
                'risks' => json_encode([]),
                'sex' => 'female',
                'unit' => 'ммоль/л.',
            ],
            [
                'name' => 'Креатинин',
                'min' => 62,
                'max' => 115,
                'risks' => json_encode([]),
                'sex' => 'male',
                'unit' => 'ммоль/л.',
            ],
            [
                'name' => 'Креатинин',
                'min' => 53,
                'max' => 97,
                'risks' => json_encode([]),
                'sex' => 'female',
                'unit' => 'ммоль/л.',
            ],
            [
                'name' => 'Холестерин',
                'min' => 3.5,
                'max' => 6.5,
                'risks' => json_encode([]),
                'sex' => 'male',
                'unit' => 'ммоль/л.',
            ],
            [
                'name' => 'Холестерин',
                'min' => 3.5,
                'max' => 6.5,
                'risks' => json_encode([]),
                'sex' => 'female',
                'unit' => 'ммоль/л.',
            ],
            [
                'name' => 'Билирубин',
                'min' => 5,
                'max' => 20,
                'risks' => json_encode([]),
                'sex' => 'male',
                'unit' => 'ммоль/л.',
            ],
            [
                'name' => 'Билирубин',
                'min' => 5,
                'max' => 20,
                'risks' => json_encode([]),
                'sex' => 'female',
                'unit' => 'ммоль/л.',
            ],
            [
                'name' => 'АлАТ (АЛТ)',
                'min' => 0,
                'max' => 45,
                'risks' => json_encode([]),
                'sex' => 'male',
                'unit' => 'ед/л.',
            ],
            [
                'name' => 'АлАТ (АЛТ)',
                'min' => 0,
                'max' => 31,
                'risks' => json_encode([]),
                'sex' => 'female',
                'unit' => 'ед/л.',
            ],
            [
                'name' => 'АсАТ (АСТ)',
                'min' => 0,
                'max' => 45,
                'risks' => json_encode([]),
                'sex' => 'male',
                'unit' => 'ед/л.',
            ],
            [
                'name' => 'АсАТ (АСТ)',
                'min' => 0,
                'max' => 31,
                'risks' => json_encode([]),
                'sex' => 'female',
                'unit' => 'ед/л.',
            ],
            [
                'name' => 'Липаза',
                'min' => 0,
                'max' => 190,
                'risks' => json_encode([]),
                'sex' => 'male',
                'unit' => 'ед/л.',
            ],
            [
                'name' => 'Липаза',
                'min' => 0,
                'max' => 190,
                'risks' => json_encode([]),
                'sex' => 'female',
                'unit' => 'ед/л.',
            ],
            [
                'name' => 'Альфа-амилаза',
                'min' => 28,
                'max' => 100,
                'risks' => json_encode([]),
                'sex' => 'male',
                'unit' => 'ед/л.',
            ],
            [
                'name' => 'Альфа-амилаза',
                'min' => 28,
                'max' => 100,
                'risks' => json_encode([]),
                'sex' => 'female',
                'unit' => 'ед/л.',
            ],
            [
                'name' => 'Панкреатическая амилаза',
                'min' => 0,
                'max' => 50,
                'risks' => json_encode([]),
                'sex' => 'male',
                'unit' => 'ед/л.',
            ],
            [
                'name' => 'Панкреатическая амилаза',
                'min' => 0,
                'max' => 50,
                'risks' => json_encode([]),
                'sex' => 'female',
                'unit' => 'ед/л.',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('references');
    }
};
