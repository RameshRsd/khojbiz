<?php

use Illuminate\Database\Seeder;

class LocationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('location_categories')->insert([
            ['name'=>'Treking','slug'=>'treking','user_id'=>1],
            ['name'=>'National Park','slug'=>'national-park','user_id'=>1],
            ['name'=>'National Heritage Place','slug'=>'national-heritage-place','user_id'=>1],
            ['name'=>'Museum','slug'=>'museum','user_id'=>1],
        ]);
    }
}
