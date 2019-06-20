<?php

use Illuminate\Database\Seeder;

class TypeSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new \App\Client\Type();
        $type->name = 'Business';
        $type->user_id = 1;
        $type->save();

        $type = new \App\Client\Type();
        $type->name = 'Product';
        $type->user_id = 1;
        $type->save();

        $type = new \App\Client\Type();
        $type->name = 'Manufacture';
        $type->user_id = 1;
        $type->save();
    }
}
