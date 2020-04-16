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
        $this->call(BuyerSeeder::class);
        $this->call(CountriesSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubCategorySeeder::class);
        $this->call(ProductTypeSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(DeliveryTermsSeeder::class);
        $this->call(OfferTypeSeeder::class);
        $this->call(PackagingSeeder::class);
        $this->call(PaymentTermsSeeder::class);
        $this->call(ProcessSeeder::class);
        $this->call(PurchaseSeeder::class);
     //   $this->call(UserTypeSeeder::class);
    }
}
