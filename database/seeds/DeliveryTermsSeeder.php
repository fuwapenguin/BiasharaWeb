<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;

class DeliveryTermsSeeder extends Seeder
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
	    DB::table( 'delivery_terms' )->truncate();
	    DB::table( 'delivery_terms' )->insert( [
		    [
			    "delivery_terms_id"          => Uuid::generate(),
			    "delivery_terms_name"        => "Delivery 1",
			    "delivery_terms_description" => "First delivery test.",
			    "delivery_terms_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
			    "delivery_terms_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
		    ],
		    [
			    "delivery_terms_id"          => Uuid::generate(),
			    "delivery_terms_name"        => "Delivery 2",
			    "delivery_terms_description" => "Second delivery test.",
			    "delivery_terms_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
			    "delivery_terms_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
		    ]
	    ] );
    }
}
