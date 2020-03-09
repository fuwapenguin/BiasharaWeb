<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PaymentTermsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::statement('SET FOREIGN_KEY_CHECKS=0');
	    DB::table( 'payment_terms_category' )->truncate();
	    DB::table( 'payment_terms_category' )->insert( [
		    [
			    //"payment_terms_category_id"          => "",
			    "payment_terms_category_name"        => "Payment 1",
			    "payment_terms_category_description" => "First payment test.",
			    "payment_terms_category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
			    "payment_terms_category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
		    ],
		    [
			    //"payment_terms_category_id"          => "",
			    "payment_terms_category_name"        => "Payment 2",
			    "payment_terms_category_description" => "Second payment test.",
			    "payment_terms_category_created_at"  => Carbon::now()->format( 'Y-m-d H:i:s' ),
			    "payment_terms_category_updated_at"  => Carbon::now()->format( 'Y-m-d H:i:s' )
		    ]
	    ] );
    }
}
