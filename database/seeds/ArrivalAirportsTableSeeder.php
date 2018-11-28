<?php

use Illuminate\Database\Seeder;

class ArrivalAirportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('arrival_airports')->insert([
            'name' => "Aéroport de Paris-Orly",
            'code' => "ORY",
            'logo' => "https://www.schneider-cie.fr/wp-content/uploads/2016/04/Logo-aeroport-de-paris-1038x576.png",
        ]);
        DB::table('arrival_airports')->insert([
            'name' => "Aéroport de Paris-Charles-de-Gaulle",
            'code' => "CDG",
            'logo' => "https://www.schneider-cie.fr/wp-content/uploads/2016/04/Logo-aeroport-de-paris-1038x576.png",
        ]);
        DB::table('arrival_airports')->insert([
            'name' => "Aéroport international de Dubaï",
            'code' => "DXB",
            'logo' => "https://seeklogo.net/wp-content/uploads/2018/02/dubai-international-airport-logo.png",
        ]);
        DB::table('arrival_airports')->insert([
            'name' => "Aéroport international de San Francisco",
            'code' => "SFO",
            'logo' => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c0/SFO_Logo.svg/langfr-114px-SFO_Logo.svg.png",
        ]);
        DB::table('arrival_airports')->insert([
            'name' => "Aéroport international de Miami",
            'code' => "MIA",
            'logo' => "http://travelmarketsinsider.net/wp-content/uploads/2017/12/Miami_International_Airport_Logo.svg_.png",
        ]);
        DB::table('arrival_airports')->insert([
            'name' => "Aéroport de Londres-Gatwick",
            'code' => "LGW",
            'logo' => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Gatwick_Airport_logo.svg/2000px-Gatwick_Airport_logo.svg.png",
        ]);
    }
}
