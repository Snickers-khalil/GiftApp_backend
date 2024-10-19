<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coupon;
use Carbon\Carbon;

class CouponSeeder extends Seeder
{
    public function run()
    {
        Coupon::create([
            'code' => 'SAVE20',
            'discount' => 20,
            'isActive' => true,
            'isPercentage' => 20,  // Add this field (0 = fixed, 1 = percentage)
            'expiryDate' => Carbon::now()->addDays(30),
        ]);

        Coupon::create([
            'code' => 'WELCOME',
            'discount' => 20,
            'isActive' => 1,
            'isPercentage' => 1,  // Add this field (0 = fixed, 1 = percentage)
            'expiryDate' => now()->addMonth(),
        ]);
    }
}
