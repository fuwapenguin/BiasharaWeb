<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Webpatser\Uuid\Uuid;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->uuid('image_id')->default(Uuid::generate());
            $table->primary('image_id');
            $table->string('image_name');
            $table->string('image_code');
            $table->string('image_symbol');
            $table->dateTime('image_created_at');
            $table->dateTime('image_updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
