<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;

class BuyerSeeder extends Seeder
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
        DB::table( 'buyer' )->truncate();
        DB::table( 'buyer' )->insert( [
            [
                "buyer_id"          => "1",
                "buyer_name"        => "Buyer 1",
                "buyer_description" => "First buyer test.",
                "buyer_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "buyer_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "category_id"          => "2",
                "category_name"        => "Buyer 2",
                "category_description" => "Second buyer test.",
                "category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ]
        ] );
    }
}
