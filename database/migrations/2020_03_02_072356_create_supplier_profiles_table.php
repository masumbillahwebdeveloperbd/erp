<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('supplier_name',50);
            $table->string('short_name',50);
            $table->string('contact_person',50);
            $table->string('designation',30);
            $table->string('contact_no',150);
            $table->string('email')->unique();
            $table->string('http_link')->nullable();
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('address4')->nullable();
            $table->integer('country');
            $table->integer('party_type');
            $table->integer('tag_company');
            $table->integer('link_to_buyer');
            $table->integer('credit_limit_days');
            $table->integer('credit_limit_unit');
            $table->integer('discount_method');
            $table->integer('security_deducted');
            $table->integer('vat_to_be_deducted');
            $table->integer('ait_to_be_deducted');
            $table->text('remark')->nullable();
            $table->integer('individual');
            $table->integer('supplier_nature');
            $table->integer('status');
            $table->string('image');
            $table->integer('tag_buyer');
            $table->string('supplier_reference',150); 
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
        Schema::dropIfExists('supplier_profiles');
    }
}
