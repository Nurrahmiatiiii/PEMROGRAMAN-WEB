<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Pakar SMK')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .btn-primary {
            @apply bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-300;
        }
        .btn-secondary {
            @apply bg-gray-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-300;
        }
        .btn-danger {
            @apply bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-300;
        }
        .card {
            @apply bg-white rounded-lg shadow-md p-6 mb-4;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-blue-700 text-white shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <a href="{{ url('/') }}" class="text-xl font-bold">
                    <i class="fas fa-graduation-cap mr-2"></i>Sistem Pakar SMK
                </a>
                
                <div class="flex items-center space-x-4">
                    <a href="{{ url('/') }}" class="hover:text-blue-200 {{ request()->is('/') ? 'font-bold' : '' }}">
                        <i class="fas fa-home mr-1"></i> Beranda
                    </a>
                    <a href="{{ route('test.start') }}" class="hover:text-blue-200 {{ request()->is('test*') ? 'font-bold' : '' }}">
                        <i class="fas fa-play-circle mr-1"></i> Mulai Tes
                    </a>
                    
                    @auth
                    <a href="{{ route('admin.dashboard') }}" class="hover:text-blue-200 {{ request()->is('admin*') ? 'font-bold' : '' }}">
                        <i class="fas fa-tachometer-alt mr-1"></i> Dashboard
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="hover:text-blue-200">
                            <i class="fas fa-sign-out-alt mr-1"></i> Logout
                        </button>
                    </form>
                    @else
                    <a href="{{ route('login') }}" class="hover:text-blue-200 {{ request()->is('login') ? 'font-bold' : '' }}">
                        <i class="fas fa-sign-in-alt mr-1"></i> Login Admin
                    </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mx-auto px-4 py-8">
        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ session('error') }}
        </div>
        @endif

        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h3 class="text-lg font-bold mb-4">Sistem Pakar Pemilihan Jurusan SMK</h3>
                <p class="text-gray-400">Menggunakan metode Forward Chaining untuk rekomendasi jurusan terbaik</p>
                <p class="text-gray-400 text-sm mt-4">&copy; {{ date('Y') }} - Sistem Pakar SMK</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>