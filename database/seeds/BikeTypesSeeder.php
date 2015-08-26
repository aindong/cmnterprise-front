<?php

use Illuminate\Database\Seeder;

class BikeTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\BikeType::create([
            'name'  => 'Road',
        ]);

        \App\Models\BikeType::create([
            'name'  => 'Mt. Bike',
        ]);
    }
}
