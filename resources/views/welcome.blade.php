<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 dark:bg-gray-800">
    <nav class="bg-gray-100 dark:bg-gray-900 shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-bold text-gray-800 dark:text-white">My E-Commerce</a>
                </div>
                <div class="flex space-x-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/products') }}" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">See All Products</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <main class="flex flex-col items-center justify-center min-h-screen text-center p-6">
        <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-4">PROJEK UTS RPL</h1>
        <p class="text-lg text-gray-600 dark:text-gray-300 max-w-xl">
            Aplikasi E-Commerce Management Product Sederhana. 
        </p>
        <div class="mt-8">
            <a href="{{ url('/products') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 transition">Lihat Produk</a>
        </div>
    </main>
</body>
</html>
