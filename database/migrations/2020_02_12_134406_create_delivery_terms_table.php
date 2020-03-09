<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_terms', function (Blueprint $table) {
            $table->uuid('delivery_terms_id');
            $table->primary('delivery_terms_id');
            $table->string('delivery_terms_name');
            $table->string('delivery_terms_description');
            $table->dateTime('delivery_terms_created_at');
            $table->dateTime('delivery_terms_updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivery_terms');
    }
}
