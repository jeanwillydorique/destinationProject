<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
            'name' => "Ibis",
            'logo' => " ",
        ]);
        DB::table('hotels')->insert([
            'name' => "Formule 1",
            'logo' => " ",
        ]);
        DB::table('hotels')->insert([
            'name' => "Novotel",
            'logo' => " ",
        ]);
        DB::table('hotels')->insert([
            'name' => "Mercure",
            'logo' => " ",
        ]);
    }
}
