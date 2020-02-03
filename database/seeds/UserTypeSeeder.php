<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_type')->insert([[
            'code' => '0',
            'name' => 'none',
            'description' => 'The user has not selected his type yet.'
        ],[
            'code' => '1',
            'name' => 'Buyer',
            'description' => 'The user is a buyer, looking for products.'
        ],[
            'code' => '2',
            'name' => 'Supplier',
            'description' => 'The user is a supplier, supplying products for buyers.'
        ],[
            'code' => '3',
            'name' => 'Hakuna',
            'description' => 'The user is a Hakuna user, this user has admin rights and insights.'
        ]]);
    }
}
