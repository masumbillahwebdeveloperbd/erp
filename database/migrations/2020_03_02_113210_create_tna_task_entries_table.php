<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTnaTaskEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tna_task_entries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('task_name');
            $table->string('task_short_name',60);
            $table->float('penalty', 8, 2)->nullable();
            $table->integer('sequence_no');
            $table->float('completion_percentage', 8, 2)->nullable();
            $table->string('group_name');
            $table->integer('status');
            $table->integer('group_sequence_no');
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
        Schema::dropIfExists('tna_task_entries');
    }
}
