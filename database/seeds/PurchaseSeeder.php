<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;

class PurchaseSeeder extends Seeder
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
		DB::table( 'purchase_intention' )->truncate();
		DB::table( 'purchase_intention' )->insert( [
			[
				"purchase_intention_id"          => Uuid::generate(),
				"purchase_intention_name"        => "Purchase 1",
				"purchase_intention_description" => "First purchase test.",
				"purchase_intention_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
				"purchase_intention_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
			],
			[
				"purchase_intention_id"          => Uuid::generate(),
				"purchase_intention_name"        => "Purchase 2",
				"purchase_intention_description" => "Second purchase test.",
				"purchase_intention_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
				"purchase_intention_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
			]
		] );
	}
}
