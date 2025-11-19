<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar - Smart SMAN Sabayang</title>
    
    {{-- Load Tailwind dari Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .gradient-purple {
            background: linear-gradient(135deg, #a855f7 0%, #d946ef 100%);
        }
        .animate-bounce.delay-150 {
            animation-delay: 150ms;
        }
        
        /* Auto responsive untuk semua ukuran layar */
        .responsive-container {
            min-height: 100vh;
            min-height: 100dvh; /* Dynamic viewport height untuk mobile */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 1rem;
        }
        
        /* Breakpoints untuk berbagai ukuran HP */
        @media (max-width: 320px) {
            /* HP kecil (iPhone SE, dll) */
            .responsive-container {
                padding: 0.5rem;
            }
        }
        
        @media (min-width: 321px) and (max-width: 480px) {
            /* HP sedang */
            .responsive-container {
                padding: 1rem;
            }
        }
        
        @media (min-width: 481px) and (max-width: 768px) {
            /* HP besar / tablet kecil */
            .responsive-container {
                padding: 1.5rem;
            }
        }
        
        @media (min-width: 769px) {
            /* Desktop */
            .responsive-container {
                padding: 2rem;
            }
        }
        
        /* Untuk HP dengan aspect ratio tinggi */
        @media (max-aspect-ratio: 9/16) {
            .responsive-container {
                justify-content: flex-start;
                padding-top: 15vh;
            }
        }
    </style>   
</head>

<body class="bg-white">
    <x-colaborator />
    
    <div class="responsive-container">
        <div class="w-full max-w-sm sm:max-w-md">
            <x-animation-area />

            <!-- Register Form -->
            <form action="{{ route('register') }}" method="POST" class="space-y-4 mt-8">
                @csrf
                
                <!-- Email Input -->
                <div>
                    <input 
                        type="email" 
                        name="email" 
                        placeholder="Email" 
                        class="w-full px-4 py-3 bg-gray-100 rounded-xl border-0 focus:outline-none focus:ring-2 focus:ring-purple-500 text-gray-700 text-sm sm:text-base"
                        required
                    >
                </div>

                <!-- NIS Input -->
                <div>
                    <input 
                        type="number" 
                        name="NIS" 
                        placeholder="Nomor Induk Siswa" 
                        class="w-full px-4 py-3 bg-gray-100 rounded-xl border-0 focus:outline-none focus:ring-2 focus:ring-purple-500 text-gray-700 text-sm sm:text-base"
                        required
                    >
                </div>

                <!-- Nomor Telepon Input -->
                <div>
                    <input 
                        type="tel" 
                        name="no_telp" 
                        placeholder="Nomor Telepon Aktif" 
                        class="w-full px-4 py-3 bg-gray-100 rounded-xl border-0 focus:outline-none focus:ring-2 focus:ring-purple-500 text-gray-700 text-sm sm:text-base"
                        required
                    >
                </div>

                <!-- Password Input -->
                <div>
                    <input 
                        type="password" 
                        name="password" 
                        placeholder="Password" 
                        class="w-full px-4 py-3 bg-gray-100 rounded-xl border-0 focus:outline-none focus:ring-2 focus:ring-purple-500 text-gray-700 text-sm sm:text-base"
                        required
                    >
                </div>

                <!-- Confirm Password Input -->
                <div>
                    <input 
                        type="password" 
                        name="password_confirmation" 
                        placeholder="Konfirmasi Password" 
                        class="w-full px-4 py-3 bg-gray-100 rounded-xl border-0 focus:outline-none focus:ring-2 focus:ring-purple-500 text-gray-700 text-sm sm:text-base"
                        required
                    >
                </div>

                <!-- Info atau Reset Link -->
                <div class="text-center space-y-1">
                    <p class="text-gray-400 text-xs sm:text-sm">atau</p>
                    <a href="{{ route('password.request') }}" class="text-blue-500 text-xs sm:text-sm">Reset akun lain?</a>
                </div>

                <!-- Register Button -->
                <button 
                    type="submit" 
                    class="w-full gradient-purple text-white font-semibold py-3 rounded-full hover:opacity-90 transition-opacity mt-6 text-sm sm:text-base"
                >
                    Daftar
                </button>

                <!-- Login Link -->
                <button 
                    type="button"
                    onclick="window.location.href='{{ route('login') }}'"
                    class="w-full bg-white border-2 border-purple-500 text-purple-500 font-semibold py-3 rounded-full hover:bg-purple-50 transition-colors text-sm sm:text-base"
                >
                    Sudah ada Akun? Masuk
                </button>
            </form>

        </div>
    </div> 
</body>
</html>