@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 bg-gray-100">
    <h1 class="text-2xl font-bold mb-4">Add New Category</h1>

    <form action="{{ route('categories.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Category Name:</label>
            <input type="text" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" placeholder="Enter category name">
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description:</label>
            <textarea name="description" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" placeholder="Enter description"></textarea>
        </div>

        <button type="submit" class="w-full bg-blue-400 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">Add Category</button>
    </form>
</div>
@endsection
