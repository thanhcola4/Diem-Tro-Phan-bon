<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash; 

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           // Create an admin user
           User::create([
            'name' => 'Nguyễn Huỳnh',
            'email' => 'huynhnguyen150400@gmail.com',
            'password' => '123456',
            'role' => 'quản lý',
        ]);
    }
}
