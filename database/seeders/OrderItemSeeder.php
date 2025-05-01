<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderItem;

class OrderItemSeeder extends Seeder
{
    public function run(): void
    {
        OrderItem::insert([
            [
                'order_id' => 1,
                'product_id' => 1, // Toy Car
                'quantity' => 2,
                'price' => 19.99,
                'created_at' => now(),
            ],
            [
                'order_id' => 1,
                'product_id' => 2, // Lego Set
                'quantity' => 1,
                'price' => 49.99,
                'created_at' => now(),
            ],
        ]);
    }
}

