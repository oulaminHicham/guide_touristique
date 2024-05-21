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
            $table->string('titre');
            $table->text('description');
            $table->decimal('prix', 8, 2);
            $table->unsignedBigInteger('guide_id');
            $table->timestamps();
            $table->foreign('guide_id')->references('id')->on('guides')->onDelete('cascade');

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
