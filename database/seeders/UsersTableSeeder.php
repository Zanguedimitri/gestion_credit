<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //créer un administrateur
        User::create([
        'name'=>'Admin User',
        'email'=>'admin@exemple.com',
        'role'=>'admin',
        'statuts'=>'active',
        'password'=>bcrypt('password')
        ]);

        //créer un utilisateur
        User::create([
            'name'=>'Regular User',
            'email'=>'regular@exemple.com',
            'role'=>'user',
            'statuts'=>'active',
            'password'=>bcrypt('password')
            ]);
    }
}
