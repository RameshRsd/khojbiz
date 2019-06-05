<?php

use Illuminate\Database\Seeder;

class Alphabate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('alphabates')->insert([
            ['name'=>'A'],
            ['name'=>'B'],
            ['name'=>'C'],
            ['name'=>'D'],
            ['name'=>'E'],
            ['name'=>'F'],
            ['name'=>'G'],
            ['name'=>'H'],
            ['name'=>'I'],
            ['name'=>'J'],
            ['name'=>'K'],
            ['name'=>'L'],
            ['name'=>'M'],
            ['name'=>'N'],
            ['name'=>'O'],
            ['name'=>'P'],
            ['name'=>'Q'],
            ['name'=>'R'],
            ['name'=>'S'],
            ['name'=>'T'],
            ['name'=>'U'],
            ['name'=>'V'],
            ['name'=>'W'],
            ['name'=>'X'],
            ['name'=>'Y'],
            ['name'=>'Z'],

        ]);
    }
}
