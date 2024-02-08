<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Seeder;

class SellerAddressSeeder extends Seeder
{
    public function run(): void
    {
        Seller::find(1)->addresses()->create([
            "latitude" => "41.310014",
            "longitude" => "69.280742",
            "region" => "Nukus",
            "district" => "22 mkr",
            "street" => "koshe",
            "home" => "777",
        ]);
    }
}
