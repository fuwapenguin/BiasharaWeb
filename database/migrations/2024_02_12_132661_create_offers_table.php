<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->uuid('offer_id');
            $table->primary('offer_id');
            $table->string('offer_name');
            $table->uuid('category_id');
            $table->foreign('category_id')->references('category_id')->on('category');
            $table->dateTime('offer_created_at');
            $table->dateTime('offer_updated_at');
            $table->string('offer_site')->nullable();
            $table->string('offer_size');
            $table->string('offer_pricing');
            $table->string('offer_availability')->nullable();
            $table->string('quantity')->nullable();
            $table->string('quantity_trial')->nullable();
            $table->uuid('buyer_id');
            $table->foreign('buyer_id')->references('buyer_id')->on('buyer');
            $table->string('offer_time_start');
            $table->string('offer_time_end');
            $table->string('offer_production_capacity')->nullable();
            $table->string('pesticides_id');
            $table->string('fertilizers_id')->nullable();
            $table->uuid('delivery_terms_id');
            $table->foreign('delivery_terms_id')->references('delivery_terms_id')->on('delivery_terms');
            $table->string('offer_delivery_details');
            $table->uuid('payment_terms_category_id')->nullable();
            $table->foreign('payment_terms_category_id')->references('payment_terms_category_id')->on('payment_terms_category');
            $table->string('offer_payment_details');
            $table->string('offer_season');
            $table->uuid('purchase_intention_id')->nullable();
            $table->foreign('purchase_intention_id')->references('purchase_intention_id')->on('purchase_intention');
            $table->uuid('packaging_id');
            $table->foreign('packaging_id')->references('packaging_id')->on('packaging');
            $table->uuid('process_id')->nullable();
            $table->foreign('process_id')->references('process_id')->on('process');
            $table->string('offer_distribution')->nullable();
            $table->string('offer_sorting');
            $table->string('offer_certifications')->nullable();
            $table->string('offer_variety')->nullable();
            $table->string('offer_cured')->nullable();
            $table->string('offer_weight')->nullable();
            $table->string('offer_product_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
