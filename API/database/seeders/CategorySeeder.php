<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                'title' => 'Shaving'
            ],
            [
                'title' => 'Beard'
            ],
            [
                'title' => 'Hair care'
            ]
        ];

        foreach ($data as $productData) {
            Category::create($productData);
        }
    }
}
