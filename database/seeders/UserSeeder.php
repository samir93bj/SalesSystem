<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'name' => 'Samir Mahmud',
            'phone' => '3666521267',
            'email' => 'admin@admin.com',
            'profile' => 'ADMIN',
            'status' => 'ACTIVE',
            'password' => bcrypt('adminadmin')
        ]);

        User::create([
            'name' => 'Martin Mahmud',
            'phone' => '355568746',
            'email' => 'martin@employee.com',
            'profile' => 'EMPLOYEE',
            'status' => 'ACTIVE',
            'password' => bcrypt('martinmartin')
        ]);
    }
}
