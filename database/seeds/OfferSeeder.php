<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;
class OfferSeeder extends Seeder
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
            "offer_id"                      => Uuid::generate(),
            "offer_name"                    => "offer 1",
            "category_id"                   => Uuid::generate(),
            "offer_created_at"              => Carbon::now()->format( 'Y-m-d H:i:s' ),
            "offer_updated_at"              => Carbon::now()->format( 'Y-m-d H:i:s' ),
            "offer_site"                    => "www.test.com",
            "offer_size"                    => "large",
            "offer_pricing"                 => "$10",
            "offer_availability"            => "in 2 weeks",
            "quantity"                      => "2000 lbs",
            "quantity_trial"                => "Lorem ipsum dolor sit",
            "buyer_id"                      => Uuid::generate(),
            "offer_time_start"              => Carbon::now()->format( 'Y-m-d H:i:s' ),
            "offer_time_end"                => Carbon::now()->format( 'Y-m-d H:i:s' ),
            "offer_production_capacity"     => "Big",
            "pesticides_id"                 => Uuid::generate(),
            "fertilizers_id"                => Uuid::generate(),
            "delivery_terms_id"             => Uuid::generate(),
            "offer_delivery_details"        => "Lorem ipsum dolor sit",
            "payment_terms_category_id"     => Uuid::generate(),
            "offer_payment_details"         => "Lorem ipsum dolor sit ",
            "offer_season"                  => "Summer",
            "purchase_intention_id"         => Uuid::generate(),
            "packaging_id"                  => Uuid::generate(),
            "process_id"                    => Uuid::generate(),
            "offer_distribution"            => "Lorem ipsum dolor sit",
            "offer_sorting"                 => "Lorem ipsum dolor sit",
            "offer_certifications"          => "Lorem ipsum dolor sit",
            "offer_variety"                 => "Lorem ipsum dolor sit",
            "offer_cured"                   => "Lorem ipsum dolor sit",
            "offer_weight"                  => "2500 lbs",
            "offer_product_type"            => "Lorem",
            "offer_type_id"                 => Uuid::generate()
        ],
        [
            "offer_id"                      => Uuid::generate(),
            "offer_name"                    => "offer 2",
            "category_id"                   => Uuid::generate(),
            "offer_created_at"              => Carbon::now()->format( 'Y-m-d H:i:s' ),
            "offer_updated_at"              => Carbon::now()->format( 'Y-m-d H:i:s' ),
            "offer_site"                    => "www.test2.com",
            "offer_size"                    => "large",
            "offer_pricing"                 => "$10",
            "offer_availability"            => "in 2 weeks",
            "quantity"                      => "2000 lbs",
            "quantity_trial"                => "Lorem ipsum dolor sit amet",
            "buyer_id"                      => Uuid::generate(),
            "offer_time_start"              => Carbon::now()->format( 'Y-m-d H:i:s' ),
            "offer_time_end"                => Carbon::now()->format( 'Y-m-d H:i:s' ),
            "offer_production_capacity"     => "Big",
            "pesticides_id"                 => Uuid::generate(),
            "fertilizers_id"                => Uuid::generate(),
            "delivery_terms_id"             => Uuid::generate(),
            "offer_delivery_details"        => "Lorem ipsum dolor sit amet",
            "payment_terms_category_id"     => Uuid::generate(),
            "offer_payment_details"         => "Lorem ipsum dolor sit amet",
            "offer_season"                  => "Winter",
            "purchase_intention_id"         => Uuid::generate(),
            "packaging_id"                  => Uuid::generate(),
            "process_id"                    => Uuid::generate(),
            "offer_distribution"            => "Lorem ipsum dolor sit",
            "offer_sorting"                 => "Lorem ipsum dolor sit",
            "offer_certifications"          => "Lorem ipsum dolor sit",
            "offer_variety"                 => "Lorem ipsum dolor sit",
            "offer_cured"                   => "Lorem ipsum dolor sit",
            "offer_weight"                  => "2500 lbs",
            "offer_product_type"            => "Lorem",
            "offer_type_id"                 => Uuid::generate()

        ]
        ]);
    }
}
