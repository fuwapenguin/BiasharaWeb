<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;

class PackagingSeeder extends Seeder
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
		DB::table( 'packaging' )->truncate();
		DB::table( 'packaging' )->insert( [
			[
				"packaging_id"          => Uuid::generate(),
				"packaging_name"        => "Packaging 1",
				"packaging_code" => "First packaging test.",
				"packaging_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
				"packaging_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
			],
			[
				"packaging_id"          => Uuid::generate(),
				"packaging_name"        => "Packaging 2",
				"packaging_code" => "Second packaging test.",
				"packaging_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
				"packaging_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
			]
		] );
	}
}