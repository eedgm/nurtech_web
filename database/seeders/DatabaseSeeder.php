<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'edegracia@nurtech.org',
                'password' => \Hash::make('admin'),
            ]);
        $this->call(PermissionsSeeder::class);

        // $this->call(ContactSeeder::class);
        // $this->call(UserSeeder::class);
    }
}
