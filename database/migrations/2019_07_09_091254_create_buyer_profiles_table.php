<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyer_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contact_name',50);
            $table->string('short_name',50);
            $table->string('contact_person',50);
            $table->string('designation',30);
            $table->string('exporters_ref',150);
            $table->string('email')->unique();
            $table->string('http_link')->nullable();
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('address4')->nullable();
            $table->integer('country');
            $table->integer('party_type');
            $table->integer('tag_company');
            $table->integer('link_to_supplier');
            $table->integer('credit_limit_days');
            $table->integer('credit_limit_unit');
            $table->integer('discount_method');
            $table->integer('security_deducted');
            $table->integer('vat_to_be_deducted');
            $table->integer('ait_to_be_deducted');
            $table->text('remark')->nullable();
            $table->integer('marketing_team');
            $table->decimal('sewing_effi_mkt_percentage',18, 2)->nullable();
            $table->decimal('sewing_effi_planning_percentage',18, 2)->nullable();
            $table->decimal('deffd_lc_cost_percentage', 18, 2)->nullable();
            $table->integer('cut_off_used');
            $table->integer('control_delivery');
            $table->integer('delivery_buffer_days');
            $table->decimal('min_quoted_profit_percentage', 18, 2)->nullable();
            $table->decimal('min_budgeted_profit_percentage', 18, 2)->nullable();
            $table->integer('status');
            $table->integer('commercial_invoice');
            $table->integer('tag_sample');
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
        Schema::dropIfExists('buyer_profiles');
    }
}
