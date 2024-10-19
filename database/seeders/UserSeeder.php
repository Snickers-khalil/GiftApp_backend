<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Khalil',
            'email' => 'user@gmail.com',
            'phone' => '5662704300',
            'password' => bcrypt('12345678'), // Make sure to hash passwords
        ]);
    }
}
