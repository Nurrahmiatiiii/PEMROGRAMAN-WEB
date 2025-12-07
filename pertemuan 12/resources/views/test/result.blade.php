@extends('layouts.app')

@section('title', 'Hasil Tes Jurusan')

@section('content')
<div class="max-w-6xl mx-auto">
    <div class="text-center mb-12">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Hasil Rekomendasi Jurusan SMK</h1>
        <p class="text-xl text-gray-600">Berikut adalah 3 jurusan terbaik yang sesuai dengan minat dan bakat Anda</p>
    </div>
    
    @if($results->count() > 0)
    <!-- Juara 1 -->
    <div class="card mb-8 border-2 border-yellow-400 relative">
        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
            <div class="bg-yellow-500 text-white px-6 py-2 rounded-full font-bold">
                <i class="fas fa-trophy mr-2"></i>REKOMENDASI UTAMA
            </div>
        </div>
        
        @php $topResult = $results->first(); @endphp
        <div class="text-center mb-6">
            <div class="inline-block bg-yellow-100 text-yellow-800 px-6 py-2 rounded-full font-bold text-lg mb-4">
                {{ $topResult->major->code }} - {{ $topResult->major->name }}
            </div>
            <div class="text-4xl font-bold text-yellow-600 mb-2">
                {{ $topResult->score }}%
            </div>
            <div class="text-gray-600">Tingkat Kecocokan</div>
        </div>
        
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-gray-50 p-4 rounded-lg">
                <h4 class="font-bold text-gray-800 mb-3"><i class="fas fa-info-circle mr-2"></i>Deskripsi Jurusan</h4>
                <p class="text-gray-700">{{ $topResult->major->description }}</p>
            </div>
            
            <div class="bg-gray-50 p-4 rounded-lg">
                <h4 class="font-bold text-gray-800 mb-3"><i class="fas fa-book mr-2"></i>Mata Pelajaran</h4>
                <ul class="text-gray-700 list-disc pl-5">
                    @foreach(explode(',', $topResult->major->subjects) as $subject)
                    <li>{{ trim($subject) }}</li>
                    @endforeach
                </ul>
            </div>
            
            <div class="bg-gray-50 p-4 rounded-lg">
                <h4 class="font-bold text-gray-800 mb-3"><i class="fas fa-briefcase mr-2"></i>Prospek Kerja</h4>
                <ul class="text-gray-700 list-disc pl-5">
                    @foreach(explode(',', $topResult->major->career_prospects) as $job)
                    <li>{{ trim($job) }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    
    <!-- Juara 2 & 3 -->
    <div class="grid md:grid-cols-2 gap-8 mb-12">
        @foreach($results->skip(1) as $result)
        <div class="card">
            <div class="text-center mb-4">
                <div class="inline-block bg-blue-100 text-blue-800 px-4 py-1 rounded-full font-bold mb-2">
                    REKOMENDASI {{ $loop->iteration + 1 }}
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $result->major->code }} - {{ $result->major->name }}</h3>
                <div class="text-3xl font-bold text-blue-600">{{ $result->score }}%</div>
                <div class="text-gray-600">Tingkat Kecocokan</div>
            </div>
            
            <div class="mb-4">
                <h4 class="font-bold text-gray-800 mb-2"><i class="fas fa-info-circle mr-2"></i>Deskripsi Singkat</h4>
                <p class="text-gray-700 text-sm">{{ Str::limit($result->major->description, 150) }}</p>
            </div>
            
            <div class="mb-4">
                <h4 class="font-bold text-gray-800 mb-2"><i class="fas fa-briefcase mr-2"></i>Prospek Kerja Utama</h4>
                <div class="flex flex-wrap gap-2">
                    @foreach(array_slice(explode(',', $result->major->career_prospects), 0, 3) as $job)
                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                        {{ trim($job) }}
                    </span>
                    @endforeach
                </div>
            </div>
            
            <a href="#detail-{{ $result->id }}" class="text-blue-600 hover:text-blue-800 text-sm font-semibold">
                <i class="fas fa-chevron-down mr-1"></i>Lihat Detail Lengkap
            </a>
        </div>
        @endforeach
    </div>
    
    <!-- Tombol Aksi -->
    <div class="text-center space-x-4">
        <a href="{{ route('test.start') }}" class="btn-primary">
            <i class="fas fa-redo mr-2"></i>Ulangi Tes
        </a>
        <a href="{{ route('home') }}" class="btn-secondary">
            <i class="fas fa-home mr-2"></i>Kembali ke Beranda
        </a>
        <button onclick="window.print()" class="btn-secondary">
            <i class="fas fa-print mr-2"></i>Cetak Hasil
        </button>
    </div>
    
    @else
    <div class="card text-center">
        <div class="text-red-500 text-5xl mb-4">
            <i class="fas fa-exclamation-triangle"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Data Hasil Tidak Ditemukan</h3>
        <p class="text-gray-600 mb-6">Silakan lakukan tes terlebih dahulu untuk melihat rekomendasi jurusan.</p>
        <a href="{{ route('test.start') }}" class="btn-primary">
            <i class="fas fa-play mr-2"></i>Mulai Tes Sekarang
        </a>
    </div>
    @endif
</div>
@endsection