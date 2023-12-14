<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'username' => 'adminUser',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('123456789'),

            ],
            [
                'name' => 'Cuidadano',
                'username' => 'CuidadanoUser',
                'email' => 'Cuidadano@gmail.com',
                'role' => 'cuidadano',
                'status' => 'active',
                'password' => bcrypt('123456789'),

            ],
            [
                'name' => 'Empresa',
                'username' => 'EmpresaUser',
                'email' => 'Empresa@gmail.com',
                'role' => 'empresa',
                'status' => 'active',
                'password' => bcrypt('123456789'),

            ],
            [
                'name' => 'Recolector',
                'username' => 'RecolectorUser',
                'email' => 'Recolector@gmail.com',
                'role' => 'recolector',
                'status' => 'active',
                'password' => bcrypt('123456789'),

            ],


        ]);
    }
}
