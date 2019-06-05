<?php

use Illuminate\Database\Seeder;

class CompanyNatureTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nature = new \App\CompanyNature();
        $nature->name = 'Business';
        $nature->slug = 'business';
        $nature->save();

        $nature = New \App\CompanyNature();
        $nature->name = 'Manufacture';
        $nature->slug = 'manufacture';
        $nature->save();

        $nature = New \App\CompanyNature();
        $nature->name = 'Product';
        $nature->slug = 'product';
        $nature->save();

    }
}
