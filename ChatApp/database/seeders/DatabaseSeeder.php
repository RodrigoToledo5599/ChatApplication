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
        User::factory()->create([
            'name' => 'Test',
            'email' => 'test@gmail.com',
            'password' => '123'
        ]);
        User::factory()->create([
            'name' => 'Rogerio',
            'email' => 'rogerio@gmail.com',
            'password' => '123'
        ]);
        User::factory()->create([
            'name' => 'Antonio',
            'email' => 'antonio@gmail.com',
            'password' => '123'
        ]);
        User::factory()->create([
            'name' => 'Claudio',
            'email' => 'claudio@gmail.com',
            'password' => '123'
        ]);
        User::factory()->create([
            'name' => 'Rodrigo',
            'email' => 'rodrigo@gmail.com',
            'password' => '123'
        ]);
        User::factory()->create([
            'name' => 'Fernando',
            'email' => 'fernando@gmail.com',
            'password' => '123'
        ]);
        User::factory()->create([
            'name' => 'Jurema',
            'email' => 'jurema@gmail.com',
            'password' => '123'
        ]);
        User::factory()->create([
            'name' => 'Igor',
            'email' => 'igor@gmail.com',
            'password' => '123'
        ]);
        
    }
}
