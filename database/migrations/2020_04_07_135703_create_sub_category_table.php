<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_category', function (Blueprint $table) {
            $table->uuid('sub_category_id');
            $table->primary('sub_category_id');
            $table->uuid('category_id');
            $table->foreign('category_id')->references('category_id')->on('category');
            $table->string('sub_category_name');
            $table->string('sub_category_description');
            $table->dateTime('sub_category_created_at');
            $table->dateTime('sub_category_updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_category');
    }
}
