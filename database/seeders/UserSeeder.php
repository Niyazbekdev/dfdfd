<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::create([
            'name' => 'John',
            'email' => '',
            'phone' => '+998994008901',
            'password' => Hash::make('123'),
        ]);
        $admin->assignRole('admin');

        $seller = User::create([
            'name' => 'Dawran',
            'phone' => '+998935005050',
            'password' => Hash::make('123'),
        ]);
        $seller->assignRole('seller');

        $seller = User::create([
            'name' => 'Batir',
            'phone' => '+998935004569',
            'password' => Hash::make('123'),
        ]);
        $seller->assignRole('seller');

        $customer = User::create([
            'name' => 'Anvar',
            'phone' => '+998999009090',
            'password' => Hash::make('123')
        ]);
        $customer->assignRole('customer');
    }
}
