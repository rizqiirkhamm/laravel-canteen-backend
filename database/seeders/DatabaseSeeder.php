<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(30)->create();

        User::factory()->create([
            'name' => 'Sarah Tsabita',
            'email' => 'sorohoo@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
            'phone' => '089689794985',
        ]);
    }
}
