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
        Schema::create('brands', function (Blueprint $table) {
            $table->id(); // Automatically creates an auto-incrementing primary key
            $table->string('name');
            $table->unsignedBigInteger('car_id'); // Define as unsignedBigInteger
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('car_id')->references('id')->on('cars')
                  ->onDelete('cascade'); // Optional: specify what happens on delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
