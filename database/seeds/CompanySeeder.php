<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table( 'company' )->truncate();
        DB::table( 'company' )->insert( [
            [
                "company_id"          => Uuid::generate(),
                "company_name"        => "company 1",
                "company_email"       => "test@test.com",
                "company_adress"      => "testing 12",
                "company_postal_code" => "1234AA",
                "company_description" => "First company test.",
                "specialisation"      => "Bananas",
                "company_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "company_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "country_id"          => Uuid::generate(),
                "established"         => Carbon::create()->format('Y-m-d H:i:s'),
                "employees_amount"    => '12',
                "business_registration_number" => '8439340',
                "phone_number"        => '0612345678',
                "website"             => 'www.test.com'
            ],
            [
                "company_id"          => Uuid::generate(),
                "company_name"        => "company 2",
                "company_email"       => "test1@test.com",
                "company_adress"      => "testing 22",
                "company_postal_code" => "1234AA",
                "company_description" => "Second company test.",
                "specialisation"      => "Bananas",
                "company_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "company_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "country_id"          => Uuid::generate(),
                "established"         => Carbon::create()->format('Y-m-d H:i:s'),
                "employees_amount"    => '5',
                "business_registration_number" => '8439341',
                "phone_number"        => '0612345678',
                "website"             => 'www.test.com'
            ]
        ] );
    }
}
