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
        
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title',1024); //
            $table->text('description')->nullable();
			$table->string('thumb', 1024)->nullable(); //
            $table->float('price', 5,2)->unsigned();  //
			$table->string('series', 256)->nullable(); //
			$table->date('sale_date');
            $table->string('type', 128); //
            //quando voglio salvare un json non lo salvo come json ma come text
            //$table->text('artists')->nullable();
            //$table->text('writers')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
