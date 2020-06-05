<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtherPartyProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_party_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('other_party_name',50);
            $table->string('short_name',50);
            $table->string('contact_person',50);
            $table->string('designation',30);
            $table->string('contact_no',150);
            $table->string('email')->unique();
            $table->string('http_link')->nullable();
            $table->string('address');
            $table->integer('country');
            $table->text('remark')->nullable();
            $table->integer('status');
            $table->string('image');
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
        Schema::dropIfExists('other_party_profiles');
    }
}
