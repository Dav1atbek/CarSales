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
        Schema::create('lifestyle_search', function (Blueprint $table) {
            $table->id();
            $table->enum('lifestyle_type',['family','first car','electric','offroad 4x4','perfomance','prestige','tradie']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lifestyle_search');
    }
};
