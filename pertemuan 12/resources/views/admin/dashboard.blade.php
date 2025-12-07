@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-bold text-gray-800">
        <i class="fas fa-tachometer-alt mr-3"></i>Dashboard Admin
    </h1>
    <p class="text-gray-600">Selamat datang, {{ Auth::user()->name }}!</p>
</div>

<!-- Statistik -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
    <div class="card text-center">
        <div class="text-blue-500 text-3xl mb-3">
            <i class="fas fa-graduation-cap"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ $stats['majors'] }}</h3>
        <p class="text-gray-600">Jurusan</p>
    </div>
    
    <div class="card text-center">
        <div class="text-green-500 text-3xl mb-3">
            <i class="fas fa-question-circle"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ $stats['questions'] }}</h3>
        <p class="text-gray-600">Pertanyaan</p>
    </div>
    
    <div class="card text-center">
        <div class="text-purple-500 text-3xl mb-3">
            <i class="fas fa-cogs"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ $stats['rules'] }}</h3>
        <p class="text-gray-600">Rules</p>
    </div>
    
    <div class="card text-center">
        <div class="text-red-500 text-3xl mb-3">
            <i class="fas fa-users"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ $stats['tests_taken'] }}</h3>
        <p class="text-gray-600">Tes Dilakukan</p>
    </div>
</div>

<!-- Menu Cepat -->
<div class="card mb-8">
    <h2 class="text-xl font-bold text-gray-800 mb-6">
        <i class="fas fa-bolt mr-2"></i>Menu Cepat
    </h2>
    
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <a href="{{ route('admin.majors.index') }}" class="bg-blue-50 hover:bg-blue-100 p-4 rounded-lg text-center transition duration-300">
            <div class="text-blue-600 text-2xl mb-2">
                <i class="fas fa-university"></i>
            </div>
            <h4 class="font-bold text-blue-700">Kelola Jurusan</h4>
        </a>
        
        <a href="{{ route('admin.questions.index') }}" class="bg-green-50 hover:bg-green-100 p-4 rounded-lg text-center transition duration-300">
            <div class="text-green-600 text-2xl mb-2">
                <i class="fas fa-question"></i>
            </div>
            <h4 class="font-bold text-green-700">Kelola Pertanyaan</h4>
        </a>
        
        <a href="{{ route('admin.rules.index') }}" class="bg-purple-50 hover:bg-purple-100 p-4 rounded-lg text-center transition duration-300">
            <div class="text-purple-600 text-2xl mb-2">
                <i class="fas fa-cogs"></i>
            </div>
            <h4 class="font-bold text-purple-700">Kelola Rules</h4>
        </a>
        
        <a href="{{ route('home') }}" class="bg-gray-50 hover:bg-gray-100 p-4 rounded-lg text-center transition duration-300">
            <div class="text-gray-600 text-2xl mb-2">
                <i class="fas fa-eye"></i>
            </div>
            <h4 class="font-bold text-gray-700">Lihat Website</h4>
        </a>
    </div>
</div>

<!-- Tes Terbaru -->
<div class="card">
    <h2 class="text-xl font-bold text-gray-800 mb-6">
        <i class="fas fa-history mr-2"></i>5 Tes Terbaru
    </h2>
    
    @if($stats['recent_tests']->count() > 0)
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-3 px-4 text-left">ID Sesi</th>
                    <th class="py-3 px-4 text-left">Tanggal</th>
                    <th class="py-3 px-4 text-left">Waktu</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stats['recent_tests'] as $test)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-3 px-4">
                        <code class="text-sm">{{ Str::limit($test->session_id, 15) }}</code>
                    </td>
                    <td class="py-3 px-4">{{ $test->created_at->format('d/m/Y') }}</td>
                    <td class="py-3 px-4">{{ $test->created_at->format('H:i:s') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="text-center py-8 text-gray-500">
        <i class="fas fa-inbox text-4xl mb-4"></i>
        <p>Belum ada tes yang dilakukan.</p>
    </div>
    @endif
</div>
@endsection