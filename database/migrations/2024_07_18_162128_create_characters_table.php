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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->string('name');
            $table->string('family name')->nullable();
            $table->string('alias')->nullable();
            $table->integer('age');
            $table->text('history')->nullable();
            //$table->string('religion');
            $table->text('description');
            //$table->string('race')
            //$table->string('weapons')
            //$table->string('armors')
            //$table->string('talents')
            $table->integer('level')->default(1);
            $table->integer('exp')->default(0);
            $table->integer('gold coins')->default(0);
            $table->integer('base life');
            $table->integer('base strength');
            $table->integer('base intelligence');
            $table->integer('base dexterity');
            $table->integer('base wisdom');
            $table->integer('base constitution');
            $table->integer('base luck');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
