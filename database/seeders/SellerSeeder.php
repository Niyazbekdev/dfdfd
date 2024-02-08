<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SellerSeeder extends Seeder
{
    public function run(): void
    {
        Seller::create([
            'user_id' => 2,
            'name' => 'Dawran mebel',
            'description' => 'haqqinda',
        ]);
    }
}
