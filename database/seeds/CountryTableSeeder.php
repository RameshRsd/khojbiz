<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = New \App\Country();
        $countries->name = 'Nepal';
        $countries->user_id = 1;
        $countries->save();
    }
}
