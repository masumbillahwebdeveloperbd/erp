<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapacityCalculationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capacity_calculations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company');
            $table->integer('capacity_source');
            $table->integer('location');
            $table->integer('year');
            $table->integer('month');
            $table->integer('man_machine_per_line');
            $table->string('basic_sam');
            $table->float('efficiency', 8, 2);
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
        Schema::dropIfExists('capacity_calculations');
    }
}
