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
        Schema::dropIfExists('research');
        Schema::create('research', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->json('tests');
            $table->integer('analyser_id');
            $table->timestamps();
        });

        DB::table('research')->insert([
            [
                'code' => rand(1000000, 99999999),
                'name' => 'Гематологические исследования',
                'tests' => json_encode([1,2,3,4,5,6]),
                'analyser_id' => rand(1,5),
            ],
            [
                'code' => rand(1000000, 99999999),
                'name' => 'Изосерологические исследования',
                'tests' => json_encode([7,8,9,10]),
                'analyser_id' => rand(1,5),
            ],
            [
                'code' => rand(1000000, 99999999),
                'name' => 'Коагулологические исследования',
                'tests' => json_encode([11,12,13,14,15,16,17,18,19,20]),
                'analyser_id' => rand(1,5),
            ],
            [
                'code' => rand(1000000, 99999999),
                'name' => 'Общеклинические исследования',
                'tests' => json_encode([21,22,23,24,25,26,27]),
                'analyser_id' => rand(1,5),
            ],
            [
                'code' => rand(1000000, 99999999),
                'name' => 'Исследование отделяемого верхних дыхательных путей',
                'tests' => json_encode([28,29]),
                'analyser_id' => rand(1,5),
            ],
            [
                'code' => rand(1000000, 99999999),
                'name' => 'Микроскопические исследования отделяемого мочеполовых органов',
                'tests' => json_encode([30,31,32,33,34]),
                'analyser_id' => rand(1,5),
            ],
            [
                'code' => rand(1000000, 99999999),
                'name' => 'Исследование эякулята',
                'tests' => json_encode([35,36,37,38]),
                'analyser_id' => rand(1,5),
            ],
            [
                'code' => rand(1000000, 99999999),
                'name' => 'Исследование на микозы и демодекоз',
                'tests' => json_encode([39,40,41]),
                'analyser_id' => rand(1,5),
            ],
            [
                'code' => rand(1000000, 99999999),
                'name' => 'Исследование кала',
                'tests' => json_encode([42,43,44,45,46,47,48]),
                'analyser_id' => rand(1,5),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('research');
    }
};
