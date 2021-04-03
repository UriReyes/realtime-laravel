<?php

use App\User;
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
        User::create([
            'name' => 'Uriel',
            'email' => 'urielreyes514@gmail.com',
            'password' => bcrypt('Administrador1'),
        ]);

        User::create([
            'name' => 'Arllete',
            'email' => 'arllete@gmail.com',
            'password' => bcrypt('Administrador2'),
        ]);

        User::create([
            'name' => 'Daniel',
            'email' => 'daniel@gmail.com',
            'password' => bcrypt('Administrador3'),
        ]);
    }
}
