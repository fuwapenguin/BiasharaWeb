<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;

class ProcessSeeder extends Seeder
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
        DB::table( 'process' )->truncate();
        DB::table( 'process' )->insert( [
            [
                "process_id"          => Uuid::generate(),
                "process_name"        => "Process 1",
                "process_description" => "First process test."
            ],
            [
                "process_id"          => Uuid::generate(),
                "process_name"        => "Process 2",
                "process_description" => "Second process test."
            ]
        ] );
    }
}
