<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="flex">
            <div class="w-56 h-screen bg-gray-200 shadow">
                <img src="https://www.bitmapitsolution.com/images/logo/logo.png" class="w-8/12 mt-5 mx-auto bg-white py-2 rounded-lg shadow" alt="">

                <div class="mt-10">
                    <a href="" class="p-2 border-l-4 border-blue-600 m-2 text-lg hover:bg-gray-300 block">Dashboard</a>

                    <a href="" class="p-2 border-l-4 border-blue-600 m-2 text-lg hover:bg-gray-300 block">Category</a>


                    <a href="" class="p-2 border-l-4 border-blue-600 m-2 text-lg hover:bg-gray-300 block">Products</a>

                    <a href="" class="p-2 border-l-4 border-blue-600 m-2 text-lg hover:bg-gray-300 block">Logout</a>



                </div>
            </div>
            <div class="p-4 flex-1">
                @yield('content')
            </div>
        </div>
    </body>
</html>
