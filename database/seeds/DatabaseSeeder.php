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
//        $this->call(UsersTableSeeder::class);
//        $this->call(CountryTableSeeder::class);
//        $this->call(StateTableSeeder::class);
//        $this->call(DistrictTableSeeder::class);
//        $this->call(Alphabate::class);
//        $this->call(CompanyNatureTable::class);
        $this->call(LocationCategorySeeder::class);
    }
}
