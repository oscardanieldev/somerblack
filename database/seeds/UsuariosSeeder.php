<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Oscar',
            'email' => 'oscar.go16@gmail.com',
            'password' => Hash::make('12953005'),
            'nivel' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
        DB::table('users')->insert([
            'name' => 'Jessica',
            'email' => 'jessica@gmail.com',
            'password' => Hash::make('12345678'),
            'nivel' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),

        ]);
    }
}
