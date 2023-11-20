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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name',55)->unique()->nullable();
            $table->string('sub_title',55)->nullable();
            $table->string('formas_uso',255)->nullable();
            $table->string('distribucion',255)->nullable();
            $table->string('descripcion',255)->nullable();
            $table->string('usos',255)->nullable();
            $table->string('activos',150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
};
