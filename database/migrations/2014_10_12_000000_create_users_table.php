<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('first_name');
            $table->string('middle_name')->default('');
            $table->string('last_name');
            $table->uuid('user_type_code')->default('0');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('company_id')->on('company');
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id')->references('country_id')->on('countries');
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->dateTime('email_verified_at');
            $table->string('password');
            $table->unsignedBigInteger('image_id')->unsigned();
            $table->foreign('image_id')->references('image_id')->on('images');
            $table->rememberToken();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
