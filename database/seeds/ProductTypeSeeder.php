<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table( 'product_type' )->truncate();
        DB::table( 'product_type' )->insert( [
            [
                "product_type_id"          => '1',
                "sub_category_id"          => '1',
                "product_type_name"        => "Banana",
                "product_type_description" => "First category test.",
                "product_type_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "product_type_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "product_type_id"          => '2',
                "sub_category_id"          => '1',
                "product_type_name"        => "Coconut",
                "product_type_description" => "First category test.",
                "product_type_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "product_type_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "product_type_id"          => '3',
                "sub_category_id"          => '1',
                "product_type_name"        => "Guava",
                "product_type_description" => "First category test.",
                "product_type_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "product_type_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "product_type_id"          => '4',
                "sub_category_id"          => '1',
                "product_type_name"        => "Date",
                "product_type_description" => "First category test.",
                "product_type_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "product_type_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "product_type_id"          => '5',
                "sub_category_id"          => '1',
                "product_type_name"        => "Avocado",
                "product_type_description" => "First category test.",
                "product_type_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "product_type_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "product_type_id"          => '6',
                "sub_category_id"          => '1',
                "product_type_name"        => "Mango",
                "product_type_description" => "First category test.",
                "product_type_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "product_type_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "product_type_id"          => '7',
                "sub_category_id"          => '1',
                "product_type_name"        => "Pineapple",
                "product_type_description" => "First category test.",
                "product_type_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "product_type_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "product_type_id"          => '8',
                "sub_category_id"          => '1',
                "product_type_name"        => "Papaya",
                "product_type_description" => "First category test.",
                "product_type_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "product_type_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "product_type_id"          => '9',
                "sub_category_id"          => '1',
                "product_type_name"        => "Fig",
                "product_type_description" => "First category test.",
                "product_type_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "product_type_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "product_type_id"          => '10',
                "sub_category_id"          => '1',
                "product_type_name"        => "Pomegranate",
                "product_type_description" => "First category test.",
                "product_type_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "product_type_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "product_type_id"          => '11',
                "sub_category_id"          => '1',
                "product_type_name"        => "Dragon Fruit",
                "product_type_description" => "First category test.",
                "product_type_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "product_type_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "product_type_id"          => '12',
                "sub_category_id"          => '7',
                "product_type_name"        => "Ginger",
                "product_type_description" => "First category test.",
                "product_type_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "product_type_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "product_type_id"          => '13',
                "sub_category_id"          => '7',
                "product_type_name"        => "Carrot",
                "product_type_description" => "First category test.",
                "product_type_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "product_type_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "product_type_id"          => '14',
                "sub_category_id"          => '7',
                "product_type_name"        => "Sweet Potato",
                "product_type_description" => "First category test.",
                "product_type_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "product_type_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "product_type_id"          => '15',
                "sub_category_id"          => '7',
                "product_type_name"        => "Cassava",
                "product_type_description" => "First category test.",
                "product_type_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "product_type_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ]
        ]);
    }
}
