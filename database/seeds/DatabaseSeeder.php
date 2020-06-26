<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Cesar Clemente',
            'email' => 'cfernandezdorantes@gmail.com',
            'is_admin' => true,
            'password' => Hash::make('Fernandez12'),
            'telegramId' => '292068042',
        ]);
    }
}
