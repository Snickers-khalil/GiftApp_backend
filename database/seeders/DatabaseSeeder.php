<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            GiftSeeder::class,
            OrderSeeder::class,
            CouponSeeder::class,
            AddressSeeder::class,
        ]);
    }
}
