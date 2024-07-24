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
        Schema::create('armors', function (Blueprint $table) {
            //*info
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('base value')->default(0);

            //*base stat
            $table->integer('base attack')->default(1);
            $table->integer('base defense')->default(0);
            $table->integer('base speed')->default(0);
            $table->integer('base accuracy')->default(0);
            $table->integer('base durability')->default(100);

            //*base increment values
            $table->integer('base life increment')->default(0);
            $table->integer('base strenght increment')->default(0);
            $table->integer('base intelligence increment')->default(0);
            $table->integer('base dexterity increment')->default(0);
            $table->integer('base wisdom increment')->default(0);
            $table->integer('base constitution increment')->default(0);
            $table->integer('base luck increment')->default(0);

            //*FK-armor_tipoloogy
            $table->foreignId('armor_tipology_id')->constrained()->onDelete('cascade');

            //*FK-armor_set
            $table->foreignId('set_id')->constrained()->onDelete('cascade');

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('armors');
    }
};
