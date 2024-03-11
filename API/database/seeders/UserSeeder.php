<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "name" => "Regular",
                "lastname" => "User",
                "email" => "regular@user.com",
                "password" => Hash::make('test'),
                "role_id" => "2",
            ],
            [
                "name" => "Admin",
                "lastname" => "User",
                "email" => "admin@user.com",
                "password" => Hash::make('admin'),
                "role_id" => "1",
            ],
        ];

        foreach ($data as $productData) {
            User::create($productData);
        }
    }
}
