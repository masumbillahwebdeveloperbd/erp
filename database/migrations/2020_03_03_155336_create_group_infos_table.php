<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gorup_name');
            $table->string('contact_number');
            $table->text('website');
            $table->text('address');
            $table->string('contact_person');
            $table->unsignedBigInteger('country_id');
            $table->string('email');
            $table->string('remark');
            $table->integer('status');
            $table->foreign("country_id")->references("id")->on("country_infos")->onDelete('cascade');
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
        Schema::dropIfExists('group_infos');
    }
}
