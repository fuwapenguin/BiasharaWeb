<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('media');

        Schema::create('media', function (Blueprint $table) {
            $table->uuid('media_id');
            $table->primary('media_id');
            $table->string('media_path');
            $table->string('media_name');
            $table->string('media_type');
            $table->dateTime('media_created_at')->useCurrent();
            $table->dateTime('media_updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media');
    }
}
