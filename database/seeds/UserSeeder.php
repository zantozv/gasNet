<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Katherine Puentes',
            'email' => 'kate@gmail.com',
            'password' => bcrypt('12345678'),
            // 'identificacion' => '1056456987',
            // 'celular' => '3121232344'
        ])->assignRole('Cliente');

        //User::factory(99)->create();

        User::create([
            'name' => 'Santiago Vargas',
            'email' => 'sbego-@gmail.com',
            'password' => bcrypt('12345678'),
            // 'identificacion' => '1056456987',
            // 'celular' => '3121232344'
        ])->assignRole('Admin');

        User::create([
            'name' => 'Henry Bernal',
            'email' => 'henry@gmail.com',
            'password' => bcrypt('12345678'),
            // 'identificacion' => '1056456987',
            // 'celular' => '3121232344'
        ])->assignRole('Tecnico');
    }
}
