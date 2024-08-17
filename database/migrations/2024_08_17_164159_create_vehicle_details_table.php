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
        Schema::create('vehicle_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')->constrained('vehicles');
            $table->integer('year');
            $table->string('color');
            $table->decimal('price',8,2);
            $table->decimal('proce_max',8,2);
            $table->decimal('proce_min',8,2);
            $table->enum('transmisson',['Manual','Automatic']);
            $table->integer('odometer');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_details');
    }
};
