<!DOCTYPE html>
<html>
<head>
    <title>Social Media Manager</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br 
from-pink-100 via-blue-100 to-purple-100">
    <div class="text-center px-8">
    <h1 class="text-6xl font-extrabold mb-8 bg-gradient-to-r from-blue-600 
    via-purple-600 to-pink-500 bg-clip-text text-transparent">
        SOCIAL MEDIA MANAGER
    </h1>
    <p class="text-gray-700 text-xl mb-16 max-w-2xl">
        Plan, create and manage your social media posts in one place.
    </p>
    <div class="flex flex-col gap-8 items-center">
        <a href="{{ route('login') }}"
            class="w-80 text-center bg-blue-500 text-white rounded-2xl py-5 
            text-2xl shadow-lg hover:scale-105 hover:bg-blue-600 transition">
            Login
        </a>
        <a href="{{ route('register') }}"
            class="w-80 text-center bg-purple-500 text-white rounded-2xl py-5 
            text-2xl shadow-lg hover:scale-105 hover:bg-purple-600 transition">
            Register
        </a>
    </div>
</div>
</body>
</html>