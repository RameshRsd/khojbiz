<?php

use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = New \App\District();
        $districts->name = 'Kathmandu';
        $districts->user_id = 1;
        $districts->state_id = 1;
        $districts->save();
    }
}
