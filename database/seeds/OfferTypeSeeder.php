<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;

class OfferTypeSeeder extends Seeder
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
        DB::table( 'offer_type' )->truncate();
        DB::table( 'offer_type' )->insert( [
            [
                "offer_type_id"          => "1",
                "offer_type_name"        => "Offer",
                "offer_type_description" => "A specific product that the user wants to sell with specifications and quantity."
            ],
            [
                "offer_type_id"          => "2",
                "offer_type_name"        => "Open Offer",
                "offer_type_description" => "A product that the user wants to sell but are open for specifications and quantity."
            ],
            [
                "offer_type_id"          => "3",
                "offer_type_name"        => "Request",
                "offer_type_description" => "A request if the user is looking for certain products."
            ]
        ] );
    }
}
