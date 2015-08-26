<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Event::create([
            'name'              => 'shimano gran fondo 2015',
            'slug'              => 'shimano-gran-fondo-2015',
            'description'       => 'a massive ride starting from SM City-Tarlac  and ending at the Monasterio de Tarlac -- a 73.8-kilometer  route for the Gran Fondo and 52.4-kilometer route for',
            'location'          => 'Monasterio de Tarlac, Philippines',
            'start_datetime'    => '2015-11-28',
            'end_datetime'      => '2015-11-28'
        ]);
    }
}
