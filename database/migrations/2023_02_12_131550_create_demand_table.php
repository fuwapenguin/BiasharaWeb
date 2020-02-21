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
            $table->bigIncrements('demand_id');
            $table->string('demand_name');
            $table->unsignedBigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('category_id')->on('category');
            $table->dateTime('demand_created_at');
            $table->dateTime('demand_updated_at');
            $table->string('demand_site');
            $table->string('demand_size');
            $table->string('demand_pricing');
            $table->string('demand_availability');
            $table->unsignedBigInteger('quantity_id')->unsigned();
            $table->foreign('quantity_id')->references('quantity_id')->on('quantity');
            $table->unsignedBigInteger('buyer_id')->unsigned();
            $table->foreign('buyer_id')->references('buyer_id')->on('buyer');
            $table->string('demand_time_start');
            $table->string('demand_time_end');
            $table->string('demand_production_capacity');
            $table->string('pesticides_id');
            $table->string('fertilizers_id');
            $table->unsignedBigInteger('delivery_terms_id')->unsigned();
            $table->foreign('delivery_terms_id')->references('delivery_terms_id')->on('delivery_terms');
            $table->string('demand_delivery_details');
            $table->unsignedBigInteger('payment_terms_category_id')->unsigned();
            $table->foreign('payment_terms_category_id')->references('payment_terms_category_id')->on('payment_terms_category');
            $table->string('demand_payment_details');
            $table->unsignedBigInteger('purchase_intention_id')->unsigned();
            $table->foreign('purchase_intention_id')->references('purchase_intention_id')->on('purchase_intention');
            $table->unsignedBigInteger('packaging_id')->unsigned();
            $table->foreign('packaging_id')->references('packaging_id')->on('packaging');
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
