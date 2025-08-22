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
        $this->call(ProductSeeder::class);


        User::factory()->create([
            'first_name' => 'TestOne',
            'last_name' => 'HandlesTech',
            'email' => 'test.1@handles.tech',
        ]);
    }
}
