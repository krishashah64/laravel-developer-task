<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        Order::insert([
            [
                'user_id' => 2, // Assuming Regular User ID is 2
                'total_price' => 64.48,
                'status' => 'completed',
                'created_at' => now(),
            ],
        ]);
    }
}
