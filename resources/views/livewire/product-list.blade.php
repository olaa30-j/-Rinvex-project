<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Products</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($products as $product)
            <div class="bg-white p-4 shadow rounded-lg">
                <h2 class="text-lg font-semibold">{{ $product->name }}</h2>
                <p class="text-gray-600 mt-2">${{ number_format($product->price, 2) }}</p>
            </div>
        @endforeach
    </div>
</div>
