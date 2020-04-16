<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_type', function (Blueprint $table) {
            $table->uuid('product_type_id');
            $table->primary('product_type_id');
            $table->uuid('sub_category_id');
            $table->foreign('sub_category_id')->references('sub_category_id')->on('sub_category');
            $table->string('product_type_name');
            $table->string('product_type_description');
            $table->dateTime('product_type_created_at');
            $table->dateTime('product_type_updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_type');
    }
}
