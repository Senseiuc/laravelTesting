<x-guest-layout>
    <h1>Products</h1>

    @forelse($products as $product)
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->type }}</p>
        <p>{{ $product->price }}</p>
        @auth
            <button>Buy product</button>
        @endauth
        <br>
    @empty
        <h2>No products</h2>
    @endforelse
</x-guest-layout>
