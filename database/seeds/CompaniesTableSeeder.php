<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => "EasyJet",
            'logo' => "http://pluspng.com/img-png/easyjet-png-cut-e-client-easyjet-533.png",
        ]);
        DB::table('companies')->insert([
            'name' => "Air France",
            'logo' => "http://www.logo20.com/logo-air-france/logo-air-france.png",
        ]);
        DB::table('companies')->insert([
            'name' => "Emirates",
            'logo' => "https://upload.wikimedia.org/wikipedia/fr/thumb/a/ae/Logo_Emirates.svg/1280px-Logo_Emirates.svg.png",
        ]);
    }
}
