<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>User Dashboard</title>
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-between bg-blue-500 p-4 shadow-md">
        <h1 class="text-xl font-bold text-gray-800">
            {{ Auth::check() ? Auth::user()->name : 'Guest' }}
        </h1>
        <form method="POST" action="{{ route('logout') }}" class="block">
            @csrf
            <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-red-500 rounded-md hover:bg-red-600 transition duration-200 focus:outline-none focus:ring focus:ring-red-300">
                {{ __('Logout') }}
            </button>
        </form>
    </div>
</body>
</html>
