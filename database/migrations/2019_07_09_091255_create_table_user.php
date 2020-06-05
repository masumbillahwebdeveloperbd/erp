<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('user_id')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('designation_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('user_level_id');
            $table->unsignedBigInteger('buyer_name_id');
            $table->unsignedBigInteger('supplier_name_id');
            $table->foreign("designation_id")->references("id")->on("designation")->onDelete('cascade');
            $table->foreign("department_id")->references("id")->on("department")->onDelete('cascade');
            $table->foreign("user_level_id")->references("id")->on("user_level")->onDelete('cascade');
            $table->foreign("buyer_name_id")->references("id")->on("buyer_profiles")->onDelete('cascade');
            $table->foreign("supplier_name_id")->references("id")->on("supplier_name")->onDelete('cascade');
            
            $table->timestamp('email_verified_at')->nullable();
            $table->string('image')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
