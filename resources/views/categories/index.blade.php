@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 bg-gray-100">
    <h1 class="text-2xl font-bold mb-4">Category List</h1>
    <div class="mb-4">
        <a href="{{ route('categories.create') }}" class="bg-blue-400 text-white px-4 py-2 rounded hover:bg-blue-600">Add New Category</a>
        <a href="{{ route('products.index') }}" class="ml-4 text-blue-500 hover:text-blue-700">See All Products</a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full bgwhite shadow-md rounded-lg">
            <thead>
                <tr class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Name</th>
                    <th class="py-3 px-6 text-left">Description</th>
                    <th class="py-3 px-6 text-left">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach($categories as $category)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6">{{ $category->name }}</td>
                    <td class="py-3 px-6">{{ $category->description }}</td>
                    <td class="py-3 px-6">
                        <a href="{{ route('categories.edit', $category->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
