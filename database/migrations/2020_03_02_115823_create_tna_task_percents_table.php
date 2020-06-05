<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTnaTaskPercentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tna_task_percents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('task_name');
            $table->integer('buyer_name');
            $table->float('start_percent', 8, 2)->nullable();
            $table->float('end_percent', 8, 2)->nullable();
            $table->integer('status');
            $table->text('notice_board');
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
        Schema::dropIfExists('tna_task_percents');
    }
}
