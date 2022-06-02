<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos', function (Blueprint $table) {
            $table->uuid('ID_MODELO')->primary();
            $table->string('ID_CASO');
            $table->string('nombre');
            $table->enum('tipo', array('Hepático', 'Pancreático', 'Colorrectal', 'Tiroides', 'Otro'));
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('ID_CASO')->references('ID_CASO')->on('casos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modelos');
    }
};
