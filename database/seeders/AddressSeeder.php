<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressSeeder extends Seeder
{
    public function run()
    {
        Address::create([
            'user_id' => 1,
            'save_as' => 'Home',
            'address' => '456 Elm St, Townsville',
            'house_no' => '12A',
            'pincode' => '123456',
            'city' => 'Townsville',
            'state' => 'Stateville',
            'country' => 'Countryland',
            'primary' => 1,
        ]);
    }
}
