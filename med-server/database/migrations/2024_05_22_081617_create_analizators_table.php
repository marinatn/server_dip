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
        Schema::dropIfExists('analizators');
        Schema::create('analizators', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('short_name');
            $table->string('type_interaction'); // take data from the table type_interaction
            $table->string('type_equipment'); // take data from the table type_equipment
            $table->timestamps();
        });
        DB::table('analizators')->insert([
            [
                'id' => 1,
                'name' => 'Люминометр SystemSURE Plus с поверкой',
                'short_name' => 'SystemSURE Plus',
                'type_interaction' => 1,
                'type_equipment' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Биохимический анализатор Stat Fax 4500',
                'short_name' => 'Stat Fax 4500',
                'type_interaction' => 1,
                'type_equipment' => 2,
            ],
            [
                'id' => 3,
                'name' => 'Цифровой анализатор билирубина BR-501',
                'short_name' => 'BR-501',
                'type_interaction' => 3,
                'type_equipment' => 2,
            ],
            [
                'id' => 4,
                'name' => 'Тест Microsnap Total Detection (для АТФ-люминометров EnSURE Touch, EnSURE)',
                'short_name' => 'АТФ-люминометр',
                'type_interaction' => 2,
                'type_equipment' => 1,
            ],
            [
                'id' => 5,
                'name' => 'Медицинский биохимический анализатор Техномедика БиАн (АБхФк-02-«НПП-ТМ»)',
                'short_name' => 'АБхФк-02-«НПП-ТМ»',
                'type_interaction' => 2,
                'type_equipment' => 1,
            ],

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analizators');
    }
};
