<x-app-layout>
    <h2 class="text-2xl font-bold mb-4">Task 3: Laravel Eloquent Queries</h2>

    <h3 class="text-lg font-semibold mt-6">1. Products with Stock > 10</h3>
    <ul class="list-disc pl-6">
        @foreach ($productsOver10 as $product)
            <li>{{ $product->name }} — Stock: {{ $product->stock }}</li>
        @endforeach
    </ul>

    <h3 class="text-lg font-semibold mt-6">2. Orders for Logged-in User</h3>
    @foreach ($userOrders as $order)
        <div class="mt-4 p-4 border rounded">
            <p><strong>Order ID:</strong> {{ $order->id }}</p>
            <p><strong>Total:</strong> ${{ $order->total_price }}</p>
            <ul class="list-decimal pl-4 mt-2">
                @foreach ($order->items as $item)
                    <li>
                        {{ $item->product->name ?? 'Product Deleted' }} — 
                        Qty: {{ $item->quantity }} — 
                        Price: ${{ $item->price }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach
</x-app-layout>
