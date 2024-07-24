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
        Schema::create('armor_character', function (Blueprint $table) {
            //*General Info
            $table->id();

            //*FK-Character
            $table->unsignedBigInteger('character_id')->nullable();
            $table->foreign('character_id')->references('id')->on('characters')->onDelete('cascade');

            //*FK-Armor
            $table->unsignedBigInteger('armor_id')->nullable();
            $table->foreign('armor_id')->references('id')->on('armors')->onDelete('cascade');

            //*General infos
            $table->integer('upgrade')->default(0);
            $table->integer('value custom')->default(0);

            //*Increments
            $table->integer('attack increment')->default(1);
            $table->integer('defense increment')->default(0);
            $table->integer('speed increment')->default(0);
            $table->integer('accuracy increment')->default(0);
            $table->integer('life increment')->default(0);
            $table->integer('strenght increment')->default(0);
            $table->integer('intelligence increment')->default(0);
            $table->integer('dexterity increment')->default(0);
            $table->integer('wisdom increment')->default(0);
            $table->integer('constitution increment')->default(0);
            $table->integer('luck increment')->default(0);

            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('armor_character');
    }
};
