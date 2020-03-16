<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserTypeSeeder::class);
        $this->call(CountriesSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(DeliveryTermsSeeder::class);
        $this->call(PackagingSeeder::class);
        $this->call(PaymentTermsSeeder::class);
        $this->call(PurchaseSeeder::class);
        $this->call(UserTypeSeeder::class);
    }
}
