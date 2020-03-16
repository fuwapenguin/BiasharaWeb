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
                "company_description" => "First company test.",
                "company_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "company_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "country_id"          => Uuid::generate(),
                "established"         => Carbon::create()->format('Y-m-d H:i:s'),
                "company_number"      => '50',
                "employees_amount"    => '12',
                "business_registration_number" => '8439340',
                "phone_number"        => '0612345678',
                "website"             => 'www.test.com'
            ],
            [
                "company_id"          => Uuid::generate(),
                "company_name"        => "company 2",
                "company_description" => "Second company test.",
                "company_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "company_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "country_id"          => Uuid::generate(),
                "established"         => Carbon::create()->format('Y-m-d H:i:s'),
                "company_number"      => '80',
                "employees_amount"    => '5',
                "business_registration_number" => '8439341',
                "phone_number"        => '0612345678',
                "website"             => 'www.test.com'
            ]
        ] );
    }
}
