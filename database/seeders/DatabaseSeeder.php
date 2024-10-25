<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Ireen Chizumila',
            'email' => 'info@romacmw.com',
            'password' => 'Info@2024',
            'is_admin' => 1,
            'position' => 'Director',
            'phone1' => '088',
            'phone2' => '099'
        ]);
    }
}
