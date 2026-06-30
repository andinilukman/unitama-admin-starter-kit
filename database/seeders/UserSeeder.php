<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Superadmin',
                'email' => 'superadmin@example.com',
                'password' => bcrypt('123'),
                'role' => 'Superadmin'
            ],
             [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'role' => 'Admin',
            ]
        ];

        foreach ($user as $user) {
        User::factory()->create([
                'name' => $user['name'],
                'email' => $user['email'],
                'role' => $user['role']
            ]);
        }
        
    }
}
