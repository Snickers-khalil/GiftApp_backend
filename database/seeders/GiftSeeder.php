<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gift;

class GiftSeeder extends Seeder
{
    public function run()
    {
        Gift::create([
            'name' => 'Birthday Gift',
            'description' => 'A beautiful gift for birthdays.',
            'price' => 29.99,
            'status' => 1,
            'cover' => '/gifts/default_cover.jpg',
        ]);

        Gift::create([
            'name' => 'Anniversary Gift',
            'description' => 'Perfect for anniversaries.',
            'price' => 49.99,
            'status' => 1,
            'cover' => '/gifts/anniversary.jpg',
        ]);
    }
}
