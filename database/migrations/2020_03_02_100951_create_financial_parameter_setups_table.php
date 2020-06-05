<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancialParameterSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_parameter_setups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company');
            $table->date('applying_period_start');
            $table->date('applying_period_end'); 
            $table->float('bep_cm_percentage', 8, 2)->nullable();
            $table->float('asking_profit_percentage', 8, 2)->nullable();
            $table->float('asking_cm_percentage', 8, 2)->nullable();
            $table->integer('no_of_factory_machine');
            $table->float('monthly_cm_expense', 8, 2)->nullable();
            $table->float('working_hour', 8, 2)->nullable();
            $table->float('cost_per_minute', 8, 2)->nullable();
            $table->float('actual_cm', 8, 2)->nullable();
            $table->float('asking_average_rate', 8, 2)->nullable();
            $table->integer('status');
            $table->float('max_profit', 8, 2)->nullable();
            $table->float('depriciation_and_amortization', 8, 2)->nullable();
            $table->float('interest_expenses', 8, 2)->nullable();
            $table->float('income_tax', 8, 2)->nullable();
            $table->float('operating_expenses', 8, 2)->nullable();
            $table->integer('working_days');
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
        Schema::dropIfExists('financial_parameter_setups');
    }
}
