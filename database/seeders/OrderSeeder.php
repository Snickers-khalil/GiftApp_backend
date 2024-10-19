<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run()
    {
        Order::create([
            'user_id' => 1,
            'grandTotal' => 150.00,
            'totalItem' => 3,
            'totalPrice' => 140.00,
            'total_delivery_charge' => 10.00,
            'address' => '123 Main St, Cityville',
            'payment_mode' => 'credit_card',
            'payment_status' => 1,
            'transaction_id' => 'TXN123456',
        ]);
    }
}
