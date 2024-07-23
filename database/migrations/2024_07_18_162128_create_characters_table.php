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
            $table->text('image')->nullable();
            $table->string('name');
            $table->string('family name')->nullable();
            $table->string('alias')->nullable();
            $table->integer('age');
            $table->text('history')->nullable();
            //$table->string('religion');
            $table->text('description')->nullable();
            //$table->string('race')
            //&$table->string('weapons')
            //$table->string('armors')
            //$table->string('talents')
            $table->integer('level')->default(1);
            $table->integer('exp')->default(0);
            $table->integer('gold coins')->default(0);
            $table->integer('base life')->default(35);
            $table->integer('base strength')->default(10);
            $table->integer('base intelligence')->default(10);;
            $table->integer('base dexterity')->default(10);;
            $table->integer('base wisdom')->default(10);;
            $table->integer('base constitution')->default(10);;
            $table->integer('base luck')->default(5);;

            $table->foreignId('user_id')->constrained()->onDelete('cascade');


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
