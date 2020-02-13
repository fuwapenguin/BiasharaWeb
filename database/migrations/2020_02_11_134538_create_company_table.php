<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->foreign('company_id');
            $table->string('company_name');
            $table->string('company_description');
            $table->timestamp('company_created_at');
            $table->timestamp('company_updated_at');
            $table->foreign('country_id');
            $table->string('established');
            $table->string('company_number');
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
