<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;
class AdminUserSeeder extends Seeder
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
        DB::table( 'offers' )->truncate();
        DB::table( 'offers' )->insert( [
            [
                "user_id"           => Uuid::generate(),
                "first_name"        => "John",
                "last_name"         => "One",
                "user_type_code"    => "3",
                "country_id"        => Uuid::generate(),
                "email"             => "test@test.com",
                "phone_number"      => "+31612345679",
                "password"          => "password"
            ],
            [
                "user_id"           => Uuid::generate(),
                "first_name"        => "John",
                "last_name"         => "Two",
                "user_type_code"    => "3",
                "country_id"        => Uuid::generate(),
                "email"             => "test1@test.com",
                "phone_number"      => "+31612345678",
                "password"          => "password"

            ]
        ]);
    }
}
