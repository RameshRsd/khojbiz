<?php

use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = New \App\State();
        $states->name = 'State-3';
        $states->country_id =1;
        $states->user_id =1;
        $states->save();
    }
}
