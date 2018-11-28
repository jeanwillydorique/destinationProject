<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Emmanuel Macron",
            'address' => "Palais de l'Élysée, 55 rue du Faubourg-Saint-Honoré, 75008 Paris",
            'email' => "benallarevient@gouv.fr",
            'role_id' => 2,
            'avatar' => "https://img.20mn.fr/_TFGW04CRlW95nntLDuVlw/310x190_emmanuel-macron-6-septembre-2018-luxembourg.jpg",
        ]);
        DB::table('users')->insert([
            'name' => "Jean-Luc Mélenchon",
            'address' => "6 bis, rue des Anglais 91300 Massy ou bien à 43, rue de Dunkerque, 75010 Paris",
            'email' => "jlm@lafranceinsoumise.fr",
            'role_id' => 3,
            'avatar' => "https://cdnfr2.img.sputniknews.com/images/103854/84/1038548483.jpg",
        ]);
        DB::table('users')->insert([
            'name' => "Marine Le Pen",
            'address' => "76/78 rue des Suisses – 92 000 – Nanterre",
            'email' => "aurevoirleszarabe@marine.fr",
            'role_id' => 1,
            'avatar' => "https://pbs.twimg.com/profile_images/1057222036362354688/JpkIqkst_400x400.jpg",
        ]);
    }
}
