<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;


class QueryDemoController extends Controller
{
    //
    public function index()
    {
        $productsOver10 = Product::where('stock', '>', 10)->get();

        $userOrders = Order::where('user_id', auth()->id())->with('items.product')->get();

        return view('queries.demo', compact('productsOver10', 'userOrders'));
    }
}
