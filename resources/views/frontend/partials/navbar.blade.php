<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop.ma</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Top Banner -->
    <div class="bg-blue-700 text-white p-1 text-center">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <i class="fas fa-phone"></i>
                <span>+212 1234 5678</span>
            </div>
            <div class="text-center flex-1 ">
                <span>Free Shipping for all Orders over 199 DH</span>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="bg-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center space-x-2 text-black cursor-pointer">
                <i class="fas fa-shopping-cart text-2xl"></i>
                <span class="text-2xl font-bold">Shop.ma</span>
            </div>

            <!-- Navigation Menu -->
            <nav class="bg-white p-2 ">
                <div class="container mx-auto flex space-x-6">
                    <a href="{{ route('home') }}" class="font-semibold text-black hover:text-blue-700">Home</a>
                    <a href="{{ route('shop') }}" class="font-semibold text-black hover:text-blue-700">Products</a>
                    <a href="{{ route('collection') }}" class="font-semibold text-black hover:text-blue-700">Collection</a>
                    <a href="{{ route('about') }}" class="font-semibold text-black hover:text-blue-700">About</a>
                </div>
            </nav>

            <!-- User Actions -->
            <div class="flex space-x-6">
                <div class="flex items-center space-x-2 text-black cursor-pointer font-semibold hover:text-blue-700">
                    <a href="{{ route('register') }}">
                    <i class="fas fa-shopping-bag"></i>
                    <span>Cart</span>
                    <span class="bg-blue-700 text-white rounded-full px-2 text-xs">0</span>
                    </a>
                </div>
                <div class="flex items-center space-x-2 cursor-pointer text-black font-semibold hover:text-blue-700">
                    <a href="{{ route('login') }}">
                    <i class="fas fa-user"></i>
                    <span>Account</span>
                   </a>    
                </div>
            </div>
        </div>
    </header>
</body>
</html>
