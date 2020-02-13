<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demand', function (Blueprint $table) {
            $table->uuid('demand_id')->primary();
            $table->string('demand_name');
            $table->foreign('category_id');
            $table->timestamp('demand_created_at');
            $table->timestamp('demand_updated_at');
            $table->string('demand_site');
            $table->string('demand_size');
            $table->string('demand_pricing');
            $table->string('demand_availability');
            $table->foreign('quantity_id');
            $table->foreign('buyer_id');
            $table->string('demand_time_start');
            $table->string('demand_time_end');
            $table->string('demand_production_capacity');
            $table->foreign('pesticides_id');
            $table->foreign('fertilizers_id');
            $table->foreign('delivery_term_id');
            $table->string('demand_delivery_details');
            $table->foreign('payment_term_id');
            $table->string('demand_payment_details');
            $table->foreign('purchase_id');
            $table->foreign('packaging_id');
            $table->string('demand_distribution');
            $table->string('demand_sorting');
            $table->string('demand_variety');
            $table->string('demand_cured');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demand');
    }
}
