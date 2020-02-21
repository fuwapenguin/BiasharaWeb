<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseIntentionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_intention', function (Blueprint $table) {
            $table->bigIncrements('purchase_intention_id');
            $table->string('purchase_intention_name');
            $table->string('purchase_intention_description');
            $table->dateTime('purchase_intention_created_at');
            $table->dateTime('purchase_intention_updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_intention');
    }
}
