<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddMembersInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_members_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('member_name',60);
            $table->string('designation',60);
            $table->float('capacity_smv', 8, 2)->nullable();
            $table->integer('capacity_basic_qty');
            $table->string('email')->unique();
            $table->integer('status');
            $table->string('contact_number');



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
        Schema::dropIfExists('add_members_infos');
    }
}
