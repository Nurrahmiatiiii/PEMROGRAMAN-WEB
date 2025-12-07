@extends('layouts.app')

@section('title', 'Beranda - Sistem Pakar SMK')

@section('content')
<div class="text-center mb-12">
    <h1 class="text-4xl font-bold text-gray-800 mb-4">Sistem Pakar Pemilihan Jurusan SMK</h1>
    <p class="text-xl text-gray-600 mb-8">Temukan jurusan yang paling cocok untuk Anda berdasarkan minat, bakat, dan kemampuan</p>
    
    <div class="inline-flex space-x-4">
        <a href="{{ route('test.start') }}" class="btn-primary text-lg px-8 py-3">
            <i class="fas fa-play mr-2"></i> Mulai Tes Sekarang
        </a>
        <a href="#jurusan" class="btn-secondary text-lg px-8 py-3">
            <i class="fas fa-list mr-2"></i> Lihat Jurusan
        </a>
    </div>
</div>

<div class="grid md:grid-cols-3 gap-8 mb-12">
    <div class="card text-center">
        <div class="text-blue-600 text-4xl mb-4">
            <i class="fas fa-question-circle"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">25 Pertanyaan</h3>
        <p class="text-gray-600">Jawab pertanyaan dengan skala 1-3 (Tidak, Netral, Ya)</p>
    </div>
    
    <div class="card text-center">
        <div class="text-green-600 text-4xl mb-4">
            <i class="fas fa-brain"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">Forward Chaining</h3>
        <p class="text-gray-600">Menggunakan algoritma sistem pakar untuk analisis akurat</p>
    </div>
    
    <div class="card text-center">
        <div class="text-purple-600 text-4xl mb-4">
            <i class="fas fa-trophy"></i>
        </div>
        <h3 class="text-xl font-bold mb-3">3 Rekomendasi</h3>
        <p class="text-gray-600">Dapatkan 3 jurusan terbaik dengan penjelasan lengkap</p>
    </div>
</div>

<div class="card" id="jurusan">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Jurusan yang Tersedia</h2>
    
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        @php
            $jurusanList = [
                ['code' => 'RPL', 'name' => 'Rekayasa Perangkat Lunak', 'color' => 'bg-blue-100 text-blue-800'],
                ['code' => 'TKJ', 'name' => 'Teknik Komputer & Jaringan', 'color' => 'bg-green-100 text-green-800'],
                ['code' => 'DKV', 'name' => 'Desain Komunikasi Visual', 'color' => 'bg-purple-100 text-purple-800'],
                ['code' => 'TKR', 'name' => 'Teknik Kendaraan Ringan', 'color' => 'bg-red-100 text-red-800'],
                ['code' => 'AK', 'name' => 'Akuntansi', 'color' => 'bg-yellow-100 text-yellow-800'],
                ['code' => 'TB', 'name' => 'Tata Boga', 'color' => 'bg-pink-100 text-pink-800'],
                ['code' => 'TBS', 'name' => 'Tata Busana', 'color' => 'bg-indigo-100 text-indigo-800'],
                ['code' => 'KP', 'name' => 'Keperawatan', 'color' => 'bg-teal-100 text-teal-800'],
            ];
        @endphp
        
        @foreach($jurusanList as $jurusan)
        <div class="border rounded-lg p-4 text-center {{ $jurusan['color'] }}">
            <div class="font-bold text-lg mb-2">{{ $jurusan['code'] }}</div>
            <div class="text-sm">{{ $jurusan['name'] }}</div>
        </div>
        @endforeach
    </div>
    
    <div class="mt-8 text-center">
        <p class="text-gray-600 mb-4">Tes ini akan membantu Anda menemukan jurusan yang paling sesuai dengan minat dan bakat Anda</p>
        <a href="{{ route('test.start') }}" class="btn-primary text-lg px-8 py-3">
            <i class="fas fa-rocket mr-2"></i> Mulai Tes Sekarang
        </a>
    </div>
</div>
@endsection