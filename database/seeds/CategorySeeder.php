<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;

class CategorySeeder extends Seeder
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
	    DB::table( 'category' )->truncate();
	    DB::table( 'category' )->insert( [
		    [
			    "category_id"          => Uuid::generate(),
			    "category_name"        => "category 1",
			    "category_description" => "First category test.",
			    "category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
			    "category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
		    ],
		    [
			    "category_id"          => Uuid::generate(),
			    "category_name"        => "category 2",
			    "category_description" => "Second category test.",
			    "category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
			    "category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
		    ]
	    ] );
    }
}
