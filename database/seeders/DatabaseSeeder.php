<?php

namespace Database\Seeders;

use App\Models\Transaction;
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
            'name' => 'Test transaction',
            'email' => 'test@example.com',
        ]);

        Transaction::factory()->create(10, [
            'name' => 'Test Transaction',
            'email' => 'test@example.com',
        ]);
    }
}
