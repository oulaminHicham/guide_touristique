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
            // $table->string('descreption');
            $table->string('nom');
            $table->unsignedBigInteger('guide_id');
            $table->foreign('guide_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade'); 
            $table->foreignId('distination_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cirquits');
    }
};
