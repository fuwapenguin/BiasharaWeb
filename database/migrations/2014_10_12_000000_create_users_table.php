<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Webpatser\Uuid\Uuid;

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
            $table->uuid('user_id')->default(Uuid::generate());
            $table->primary('user_id');
            $table->string('first_name');
            $table->string('middle_name')->default('');
            $table->string('last_name');
            $table->uuid('user_type_code')->default('0');
            //$table->uuid('company_id')->default(Uuid::generate());
            //$table->foreign('company_id')->references('company_id')->on('company');
            $table->uuid('country_id')->nullable();
            $table->foreign('country_id')->references('country_id')->on('countries');
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->string('email_verified_at')->default('0');
            $table->string('password');
            $table->uuid('image_id')->default(Uuid::generate());
            //$table->foreign('image_id')->references('image_id')->on('images');
            $table->rememberToken();
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent();

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
