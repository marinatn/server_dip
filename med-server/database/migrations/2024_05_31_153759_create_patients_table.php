<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('patients');
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('fio');
            $table->string('snils_code');
            $table->date('bith_date');
            $table->string('police_code');
            $table->json('risks');
            $table->string('sex');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
