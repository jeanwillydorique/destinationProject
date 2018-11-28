<?php

use Illuminate\Database\Seeder;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinations')->insert([
            'name' => "Paris",
            'img' => "https://objects.airfrance.com/FR/common/common/img/tbaf/destinations/PAR/slideshow/PAR-1-16_9-1920x1080.jpg",
            'country' => "France",
            'type_id' => 2,
            'company_id' => 1,
            'departure_airport_id' => 3,
            'arrival_airport_id' => 2,
            'hotel_id' => 1,
        ]);
        DB::table('destinations')->insert([
            'name' => "Miami",
            'img' => "https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/miami-florida/miami-florida-south-beach-aerial.jpg?$750x320$",
            'country' => "Etats-Unis",
            'type_id' => 4,
            'company_id' => 3,
            'departure_airport_id' => 2,
            'arrival_airport_id' => 1,
            'hotel_id' => 4,
        ]);
        DB::table('destinations')->insert([
            'name' => "Londres",
            'img' => "https://www.nacel.fr/medias/_cache/produits/289/imagePrincipale/1920_1440/ecole-de-langue-londres-tower-bridge.jpg",
            'country' => "Angleterre",
            'type_id' => 2,
            'company_id' => 1,
            'departure_airport_id' => 2,
            'arrival_airport_id' => 1,
            'hotel_id' => 3,
        ]);
        DB::table('destinations')->insert([
            'name' => "Dubai",
            'img' => "https://www.alibabuy.com/photos/library/1500/14531.jpg",
            'country' => "Emirats Arabes Unis",
            'type_id' => 2,
            'company_id' => 3,
            'departure_airport_id' => 2,
            'arrival_airport_id' => 3,
            'hotel_id' => 4,
        ]);
    }
}
