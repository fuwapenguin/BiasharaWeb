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
			    "category_id"          => '1',
			    "category_name"        => "Fruits",
			    "category_description" => "First category test.",
			    "category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
			    "category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
		    ],
		    [
			    "category_id"          => "2",
			    "category_name"        => "Vegetables",
			    "category_description" => "Second category test.",
			    "category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
			    "category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
		    ],
		    [
			    "category_id"          => '3',
			    "category_name"        => "Snack & Confectionary",
			    "category_description" => "First category test.",
			    "category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
			    "category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
		    ],
		    [
			    "category_id"          => "4",
			    "category_name"        => "Seafood",
			    "category_description" => "Second category test.",
			    "category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
			    "category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
		    ],
		    [
			    "category_id"          => '5',
			    "category_name"        => "Nuts & Seeds",
			    "category_description" => "First category test.",
			    "category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
			    "category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
		    ],
            [
                "category_id"          => "6",
                "category_name"        => "Coffee & Tea",
                "category_description" => "Second category test.",
                "category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "category_id"          => "7",
                "category_name"        => "Dairy",
                "category_description" => "Second category test.",
                "category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "category_id"          => "8",
                "category_name"        => "Other",
                "category_description" => "Second category test.",
                "category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ]
	    ] );
    }
}
