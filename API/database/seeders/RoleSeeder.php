<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
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
                'title' => 'Admin'
            ],
            [
                'title' => 'User'
            ],
        ];

        foreach ($data as $productData) {
            Role::create($productData);
        }
    }
}
