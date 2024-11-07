@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-semibold">Product List</h1>
        <div>
            <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add New Product</a>
            <a href="{{ route('categories.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">View Category</a>
        </div>
    </div>

    <table class="min-w-full bg-white border border-gray-300 rounded-lg">
        <thead>
            <tr class="bg-gray-200">
                <th class="py-2 px-4 text-left">Name</th>
                <th class="py-2 px-4 text-left">Category</th>
                <th class="py-2 px-4 text-left">Price</th>
                <th class="py-2 px-4 text-left">Stock</th>
                <th class="py-2 px-4 text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr class="hover:bg-gray-100">
                <td class="border py-2 px-4">{{ $product->name }}</td>
                <td class="border py-2 px-4">{{ $product->category->name ?? 'No Category' }}</td>
                <td class="border py-2 px-4">{{ number_format($product->price, 2) }}</td>
                <td class="border py-2 px-4">{{ $product->stock }}</td>
                <td class="border py-2 px-4 text-center">
                    <a href="{{ route('products.edit', $product->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
