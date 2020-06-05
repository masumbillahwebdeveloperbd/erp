<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrimsCostingTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trims_costing_templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('related_buyer');
            $table->integer('status');
            $table->integer('user_code');
            $table->integer('trims_group');
            $table->text('item_description');
            $table->integer('cons_uom');
            $table->string('brand_sup_ref');
            $table->string('cons_dzn_gmts');
            $table->float('purchase_rate', 8, 2)->nullable();
            $table->float('amount', 8, 2)->nullable();
            $table->integer('approval_required');
            $table->integer('buyer');
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
        Schema::dropIfExists('trims_costing_templates');
    }
}
