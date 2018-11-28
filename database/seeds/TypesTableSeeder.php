<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'content' => "Détente",
        ]);
        DB::table('types')->insert([
            'content' => "Sport",
        ]);
        DB::table('types')->insert([
            'content' => "Découverte",
        ]);
        DB::table('types')->insert([
            'content' => "Luxueux",
        ]);
        DB::table('types')->insert([
            'content' => "Petit Prix",
        ]);
    }
}
