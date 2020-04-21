<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Webpatser\Uuid\Uuid;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->uuid('company_id')->default(Uuid::generate());
            $table->primary('company_id');
            $table->string('company_name');
            $table->string('company_email');
            $table->string('company_adress');
            $table->string('company_postal_code');
            $table->string('company_description')->nullable();
            $table->string('specialisation');
            $table->dateTime('company_created_at')->useCurrent();
            $table->dateTime('company_updated_at')->useCurrent();
            $table->uuid('country_id');
            $table->foreign('country_id')->references('country_id')->on('countries');
            $table->string('established');
            $table->string('employees_amount');
            $table->string('business_registration_number');
            $table->string('phone_number');
            $table->string('website');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company');
    }
}
