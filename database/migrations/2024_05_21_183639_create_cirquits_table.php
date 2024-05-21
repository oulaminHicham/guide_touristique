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
            $table->string('distination');
            $table->string('photos');
            $table->string('descreption');
            $table->float('prix');
            $table->foreignId('guide_id')->constrained();
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
