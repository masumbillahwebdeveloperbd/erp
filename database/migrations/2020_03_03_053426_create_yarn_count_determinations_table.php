<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYarnCountDeterminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yarn_count_determinations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('fab_nature');
            $table->integer('color_range');
            $table->string('construction');
            $table->integer('gsm');
            $table->float('composition', 8, 2)->nullable();
            $table->integer('count');
            $table->integer('type');
            $table->float('stich_length', 8, 2)->nullable();
            $table->float('process_loss', 8, 2)->nullable();
            $table->float('conversion_cost', 8, 2)->nullable();
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
        Schema::dropIfExists('yarn_count_determinations');
    }
}
