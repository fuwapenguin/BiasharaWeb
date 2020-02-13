<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTermsCatagoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_terms_catagory', function (Blueprint $table) {
            $table->uuid('payment_terms_category_id')->primary();
            $table->string('payment_terms_category_name');
            $table->string('payment_terms_category_description');
            $table->timestamp('payment_terms_category_created_at');
            $table->timestamp('payment_terms_category_updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_terms_catagory');
    }
}
