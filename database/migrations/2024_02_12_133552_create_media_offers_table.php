<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_offers', function (Blueprint $table) {
            $table->uuid('media_collection_id');
            $table->primary('media_collection_id');
            $table->uuid('media_id');
            $table->foreign('media_id')->references('media_id')->on('media');
            $table->uuid('offer_id');
            $table->foreign('offer_id')->references('offer_id')->on('offers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_offers');
    }
}
