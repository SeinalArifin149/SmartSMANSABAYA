<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>

    {{-- Load Tailwind dari Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .gradient-purple {
            background: linear-gradient(135deg, #a855f7 0%, #d946ef 100%);
        }
        .animate-bounce.delay-150 {
            animation-delay: 150ms;
        }
    </style>    
</head>
<body class="bg-white min-h-screen">
    <div class="max-w-md mx-auto px-6 py-8">
        <!-- Header -->
        <div class="flex items-center justify-between mb-12">
            <div class="flex items-center">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                <h1 class="text-xl font-semibold">Sign In</h1>
            </div>
            <button class="text-blue-500 font-medium">Daftar</button>
        </div>

        <!-- Logo/Animation Area -->
        <div class="flex justify-center items-center h-48 mb-12">
            <div class="relative">
                <!-- Animated dots -->
                <div class="absolute top-12 left-8 w-4 h-4 bg-purple-400 rounded-full animate-bounce"></div>
                <div class="absolute top-8 left-16 w-5 h-5 bg-purple-500 rounded-full animate-pulse"></div>
                <div class="absolute top-16 left-20 w-4 h-4 bg-pink-400 rounded-full animate-bounce delay-150"></div>
            </div>
        </div>

        <!-- Login Form -->
        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf
            
            <!-- Email Input -->
            <div>
                <input 
                    type="email" 
                    name="email" 
                    placeholder="Email" 
                    class="w-full px-4 py-3 bg-gray-100 rounded-xl border-0 focus:outline-none focus:ring-2 focus:ring-purple-500 text-gray-700"
                    required
                >
            </div>

            <!-- Password Input -->
            <div>
                <input 
                    type="password" 
                    name="password" 
                    placeholder="Password" 
                    class="w-full px-4 py-3 bg-gray-100 rounded-xl border-0 focus:outline-none focus:ring-2 focus:ring-purple-500 text-gray-700"
                    required
                >
            </div>

            <!-- Forgot Password & Reset Link -->
            <div class="text-center space-y-1">
                <p class="text-gray-400 text-sm">atau</p>
                <a href="{{ route('password.request') }}" class="text-blue-500 text-sm">Reset akun lain?</a>
            </div>

            <!-- Login Button -->
            <button 
                type="submit" 
                class="w-full gradient-purple text-white font-semibold py-3 rounded-full hover:opacity-90 transition-opacity mt-6"
            >
                Masuk
            </button>

            <!-- Register Link -->
            <button 
                type="button"
                onclick="window.location.href='{{ route('register') }}'"
                class="w-full bg-white border-2 border-purple-500 text-purple-500 font-semibold py-3 rounded-full hover:bg-purple-50 transition-colors"
            >
                Belum ada akun? Daftar dulu
            </button>
        </form>

        <!-- Collaborations Section -->
        <div class="mt-12">
            <p class="text-center text-gray-500 text-sm mb-4">Collaborations</p>
            <div class="flex justify-center space-x-6">
                <!-- Badge 1 -->
                <div class="w-12 h-12 rounded-full bg-yellow-400 border-4 border-white shadow-lg flex items-center justify-center">
                    <span class="text-2xl">🏆</span>
                </div>
                <!-- Badge 2 -->
                <div class="w-12 h-12 rounded-full bg-blue-400 border-4 border-white shadow-lg flex items-center justify-center">
                    <span class="text-2xl">🎖️</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
