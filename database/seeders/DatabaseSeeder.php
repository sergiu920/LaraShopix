<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Serghei',
            'last_name' => 'Muntean',
            'email' => 'sergiu1607@gmail.com',
            'password' => bcrypt('48MoN74da1$'),
            'is_admin' => true,
        ]);
    }
}
