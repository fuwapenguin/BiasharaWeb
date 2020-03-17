<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Webpatser\Uuid\Uuid;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->uuid('country_id');
            $table->primary('country_id');
            $table->string('Name');
            $table->string('Iso2');
            $table->string('Iso3');
            $table->string('Unicode');
            $table->string('Dial');
            $table->uuid('currency_id');
            $table->foreign('currency_id')->references('currency_id')->on('currency');
            $table->string('Capital');
            $table->string('Continent');
            $table->dateTime('countries_created_at');
            $table->dateTime('countries_updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
