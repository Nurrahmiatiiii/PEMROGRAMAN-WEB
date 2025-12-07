@extends('layouts.app')

@section('title', 'Tambah Jurusan')

@section('content')
<div class="max-w-4xl mx-auto">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">
        <i class="fas fa-plus-circle mr-2"></i>Tambah Jurusan Baru
    </h1>

    <div class="card">
        <form method="POST" action="{{ route('admin.majors.store') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="code">Kode Jurusan *</label>
                <input type="text" id="code" name="code" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('code') border-red-500 @enderror"
                       value="{{ old('code') }}" required>
                @error('code')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="name">Nama Jurusan *</label>
                <input type="text" id="name" name="name" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('name') border-red-500 @enderror"
                       value="{{ old('name') }}" required>
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="description">Deskripsi *</label>
                <textarea id="description" name="description" rows="3"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('description') border-red-500 @enderror"
                       required>{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="subjects">Mata Pelajaran (pisah dengan koma) *</label>
                <textarea id="subjects" name="subjects" rows="3"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('subjects') border-red-500 @enderror"
                       placeholder="Contoh: Pemrograman, Database, Web Development"
                       required>{{ old('subjects') }}</textarea>
                @error('subjects')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 mb-2" for="career_prospects">Prospek Kerja (pisah dengan koma) *</label>
                <textarea id="career_prospects" name="career_prospects" rows="3"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('career_prospects') border-red-500 @enderror"
                       placeholder="Contoh: Software Developer, Web Developer, Database Administrator"
                       required>{{ old('career_prospects') }}</textarea>
                @error('career_prospects')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end space-x-3">
                <a href="{{ route('admin.majors.index') }}" class="btn-secondary">
                    <i class="fas fa-times mr-2"></i>Batal
                </a>
                <button type="submit" class="btn-primary">
                    <i class="fas fa-save mr-2"></i>Simpan Jurusan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection