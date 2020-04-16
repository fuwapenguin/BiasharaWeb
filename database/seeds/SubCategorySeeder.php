<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table( 'sub_category' )->truncate();
        DB::table( 'sub_category' )->insert( [
            [
                "sub_category_id"          => '1',
                "category_id"          => '1',
                "sub_category_name"        => "Tropical",
                "sub_category_description" => "First category test.",
                "sub_category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "sub_category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "sub_category_id"          => '2',
                "category_id"          => '1',
                "sub_category_name"        => "Citrus",
                "sub_category_description" => "First category test.",
                "sub_category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "sub_category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "sub_category_id"          => '3',
                "category_id"          => '1',
                "sub_category_name"        => "Berry",
                "sub_category_description" => "First category test.",
                "sub_category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "sub_category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "sub_category_id"          => '4',
                "category_id"          => '1',
                "sub_category_name"        => "Drupe (Stone, Pit)",
                "sub_category_description" => "First category test.",
                "sub_category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "sub_category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "sub_category_id"          => '5',
                "category_id"          => '1',
                "sub_category_name"        => "Pome (Core)",
                "sub_category_description" => "First category test.",
                "sub_category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "sub_category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "sub_category_id"          => '6',
                "category_id"          => '1',
                "sub_category_name"        => "Melon",
                "sub_category_description" => "First category test.",
                "sub_category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "sub_category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "sub_category_id"          => '7',
                "category_id"          => '2',
                "sub_category_name"        => "Root",
                "sub_category_description" => "First category test.",
                "sub_category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "sub_category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "sub_category_id"          => '8',
                "category_id"          => '2',
                "sub_category_name"        => "Marrow",
                "sub_category_description" => "First category test.",
                "sub_category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "sub_category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "sub_category_id"          => '9',
                "category_id"          => '2',
                "sub_category_name"        => "Edible Plant Stem",
                "sub_category_description" => "First category test.",
                "sub_category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "sub_category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "sub_category_id"          => '10',
                "category_id"          => '2',
                "sub_category_name"        => "Allium",
                "sub_category_description" => "First category test.",
                "sub_category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "sub_category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "sub_category_id"          => '11',
                "category_id"          => '2',
                "sub_category_name"        => "Mushroom",
                "sub_category_description" => "First category test.",
                "sub_category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "sub_category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "sub_category_id"          => '12',
                "category_id"          => '2',
                "sub_category_name"        => "Leafy Green",
                "sub_category_description" => "First category test.",
                "sub_category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "sub_category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "sub_category_id"          => '13',
                "category_id"          => '2',
                "sub_category_name"        => "Cruciferous",
                "sub_category_description" => "First category test.",
                "sub_category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "sub_category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ],
            [
                "sub_category_id"          => '14',
                "category_id"          => '2',
                "sub_category_name"        => "Other Vegetable",
                "sub_category_description" => "First category test.",
                "sub_category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
                "sub_category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
            ]
        ]);
    }
}
