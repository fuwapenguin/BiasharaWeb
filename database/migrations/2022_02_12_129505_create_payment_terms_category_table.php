<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTermsCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_terms_category', function (Blueprint $table) {
            $table->bigIncrements('payment_terms_category_id');
            $table->string('payment_terms_category_name');
            $table->string('payment_terms_category_description');
            $table->dateTime('payment_terms_category_created_at');
            $table->dateTime('payment_terms_category_updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_terms_category');
    }
}
