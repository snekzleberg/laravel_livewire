<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemoUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin user
        User::updateOrCreate(
            ['email' => 'admin@demo.com'],
            [
                'name' => 'Admin Demo',
                'password' => Hash::make('password'),
            ]
        );

        // Customer user
        User::updateOrCreate(
            ['email' => 'user@demo.com'],
            [
                'name' => 'User Demo',
                'password' => Hash::make('password'),
            ]
        );
    }
}
