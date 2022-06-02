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
        Schema::create('s_t_l_s', function (Blueprint $table) {
            $table->uuid('ID_STL')->primary();
            $table->uuid('ID_MODELO');
            $table->string('nombre');
            $table->string('color');
            $table->boolean('visible')->default(1);
            $table->integer('transparencia');
            $table->integer('orden');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('ID_MODELO')->references('ID_MODELO')->on('modelos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('s_t_l_s');
    }
};
