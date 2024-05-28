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
        Schema::create('cirquits', function (Blueprint $table) {
            $table->id();
            $table->string('photos');
            $table->string('description');
            $table->float('price');
            $table->unsignedBigInteger('guide_id');
<<<<<<< HEAD:database/migrations/2024_05_25_123001_create_circuits_table.php
            $table->foreign('user_id')->constrained();
            $table->foreignId('destination_id')->constrained();
=======
            $table->foreign('guide_id')->references('id')->on('users')->onDelete('cascade'); 
            $table->foreignId('distination_id')->constrained();
>>>>>>> ae896a5caa6466557a56a25c5e33f5bfb2cd3b9d:database/migrations/2024_05_21_183639_create_cirquits_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('circuits');
    }
};
