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
        Schema::create('character_weapon', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('character_id')->nullable();
            $table->unsignedBigInteger('weapon_id')->nullable();
            $table->foreign('character_id')->references('id')->on('characters')->onDelete('cascade');
            $table->foreign('weapon_id')->references('id')->on('weapons')->onDelete('cascade');
            $table->integer('upgrade')->default(0);
            $table->integer('attack increment')->default(1);
            $table->integer('defense increment')->default(0);
            $table->integer('speed increment')->default(0);
            $table->integer('value custom')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('character_weapon');
    }
};
