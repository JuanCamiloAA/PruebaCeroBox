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
        Schema::create('detalle_service', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Client_id');
            $table->foreign('Client_id')->references('id')->on('client');
            $table->unsignedBigInteger('Service_id');
            $table->foreign('Service_id')->references('id')->on('service');
            $table->String('Observations', 100)->nullable();
            $table->String('Type', 50);
            $table->DATETIME('Date_start');
            $table->DATETIME('Date_end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_service');
    }
};
