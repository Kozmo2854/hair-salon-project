<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
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
                'title' => 'Beard Razor',
                'originalPrice' => 89,
                'description' => 'A premium razor designed for precise beard grooming.',
                'image' => 'http://demo.zytheme.com/hairy/assets/images/shop/grid/5.jpg',
                'discountedPrice' => 10,
                'stock' => 2,
                'category_id' => 1,
            ],
            [
                'title' => 'Shaving Brush',
                'originalPrice' => 19,
                'description' => 'A high-quality brush for creating a rich lather and a smooth shave.',
                'image' => 'http://demo.zytheme.com/hairy/assets/images/shop/grid/6.jpg',
                'discountedPrice' => 10,
                'stock' => 2,
                'category_id' => 2,
            ],
            [
                'title' => 'Shave Cream',
                'originalPrice' => 24,
                'description' => 'Luxurious shaving cream for a comfortable and refreshing shaving experience.',
                'image' => 'http://demo.zytheme.com/hairy/assets/images/shop/grid/7.jpg',
                'discountedPrice' => 10,
                'stock' => 3,
                'category_id' => 1,
            ],
            [
                'title' => 'Hair Dryer',
                'originalPrice' => 35,
                'description' => 'Professional-grade hair dryer for quick and efficient hair styling.',
                'image' => 'http://demo.zytheme.com/hairy/assets/images/shop/grid/8.jpg',
                'discountedPrice' => 10,
                'stock' => 3,
                'category_id' => 3,
            ],
            [
                'title' => 'Pre Shave',
                'originalPrice' => 30,
                'description' => 'Nourishing pre-shave oil to soften the beard and prepare the skin for shaving.',
                'image' => 'http://demo.zytheme.com/hairy/assets/images/shop/grid/9.jpg',
                'discountedPrice' => 10,
                'stock' => 3,
                'category_id' => 2,
            ],
            [
                'title' => 'Beard Razor 3',
                'originalPrice' => 89,
                'description' => 'Another variation of the premium razor for precise beard grooming.',
                'image' => 'http://demo.zytheme.com/hairy/assets/images/shop/grid/5.jpg',
                'discountedPrice' => 10,
                'stock' => 2,
                'category_id' => 1,
            ],
            [
                'title' => 'Shaving Brush 2',
                'originalPrice' => 19,
                'description' => 'An additional high-quality brush for creating a rich lather and a smooth shave.',
                'image' => 'http://demo.zytheme.com/hairy/assets/images/shop/grid/6.jpg',
                'discountedPrice' => 10,
                'stock' => 2,
                'category_id' => 2,
            ],
            [
                'title' => 'Shave Cream 2',
                'originalPrice' => 24,
                'description' => 'Another variant of the luxurious shaving cream for a comfortable shaving experience.',
                'image' => 'http://demo.zytheme.com/hairy/assets/images/shop/grid/7.jpg',
                'discountedPrice' => 10,
                'stock' => 3,
                'category_id' => 1,
            ],
            [
                'title' => 'Hair Dryer 2',
                'originalPrice' => 35,
                'description' => 'Another professional-grade hair dryer for efficient hair styling.',
                'image' => 'http://demo.zytheme.com/hairy/assets/images/shop/grid/8.jpg',
                'discountedPrice' => 10,
                'stock' => 3,
                'category_id' => 3,
            ],

            [
                'title' => 'Hairdresser scissors',
                'originalPrice' => 56,
                'description' => 'High-quality scissors for creating a rich lather and a smooth haircut.',
                'image' => 'http://demo.zytheme.com/hairy/assets/images/shop/grid/1.jpg',
                'discountedPrice' => 10,
                'stock' => 2,
                'category_id' => 1,
            ],
            [
                'title' => 'Hair Comb',
                'originalPrice' => 37,
                'description' => 'Luxurious hair comb which will keep your hair slick.',
                'image' => 'http://demo.zytheme.com/hairy/assets/images/shop/grid/2.jpg',
                'discountedPrice' => 10,
                'stock' => 3,
                'category_id' => 2,
            ],
            [
                'title' => 'Hair clipper',
                'originalPrice' => 84,
                'description' => 'Unleash salon-quality haircuts at home with our premium hair clipper!',
                'image' => 'http://demo.zytheme.com/hairy/assets/images/shop/grid/3.jpg',
                'discountedPrice' => 10,
                'stock' => 3,
                'category_id' => 3,
            ],
        ];

        foreach ($data as $productData) {
            Product::create($productData);
        }
    }
}

$productsData = [
];
