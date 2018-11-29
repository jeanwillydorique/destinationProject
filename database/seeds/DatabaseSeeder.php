<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArrivalAirportsTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(DepartureAirportsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DestinationsTableSeeder::class);
        $this->call(HotelsTableSeeder::class);
        $this->call(TypesTableSeeder::class);
    }
}
