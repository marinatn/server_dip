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
        Schema::dropIfExists('risks');
        Schema::create('risks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        DB::table('risks')->insert([
            [
                'name' => 'Высокое артериальное давление',
            ],
            [
                'name' => 'Курение табака',
            ],
            [
                'name' => 'Высокое содержание глюкозы в крови.',
            ],
            [
                'name' => 'Отсутствие физической активности',
            ],
            [
                'name' => 'Повышенный вес и ожирение',
            ],
            [
                'name' => 'Высокий уровень холестерина',
            ],
            [
                'name' => 'Незащищенные половые контакты',
            ],
            [
                'name' => 'Употребление алкоголя',
            ],
            [
                'name' => 'Дефицит массы тела',
            ],
            [
                'name' => 'Генетические заболевания',
            ],
            [
                'name' => 'Преклонный возраст',
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('risks');
    }
};
