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
        \App\Models\User::create([
            'email'         => 'alleo.indong@gmail.com',
            'password'      => \Hash::make('test'),
            'firstname'     => 'alleo',
            'lastname'      => 'indong',
            'middlename'    => 'pineda',
            'birthdate'     => '1992-10-08',
            'gender'        => 'male',
            'mobilenumber'  => '09253072394',
            'nationality'   => 'filipino'
        ]);
    }
}
