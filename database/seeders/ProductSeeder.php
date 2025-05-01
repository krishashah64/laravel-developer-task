<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'Toy Car',
                'description' => 'Red racing toy car.',
                'price' => 19.99,
                'stock' => 25,
                'created_at' => now(),
            ],
            [
                'name' => 'Lego Set',
                'description' => '100-piece starter set.',
                'price' => 49.99,
                'stock' => 15,
                'created_at' => now(),
            ],
            [
                'name' => 'Puzzle Box',
                'description' => '500-piece jigsaw puzzle.',
                'price' => 14.50,
                'stock' => 8,
                'created_at' => now(),
            ],
            [
                'name' => 'Action Figure',
                'description' => 'Superhero action toy.',
                'price' => 12.75,
                'stock' => 3,
                'created_at' => now(),
            ],
        ]);
    }
}
