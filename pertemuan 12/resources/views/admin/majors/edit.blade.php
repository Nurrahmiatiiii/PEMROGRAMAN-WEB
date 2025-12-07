@extends('layouts.app')

@section('title', 'Edit Jurusan')

@section('content')
<div class="max-w-4xl mx-auto">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">
        <i class="fas fa-edit mr-2"></i>Edit Jurusan: {{ $major->code }}
    </h1>

    <div class="card">
        <form method="POST" action="{{ route('admin.majors.update', $major) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="code">Kode Jurusan *</label>
                <input type="text" id="code" name="code" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('code') border-red-500 @enderror"
                       value="{{ old('code', $major->code) }}" required>
                @error('code')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="name">Nama Jurusan *</label>
                <input type="text" id="name" name="name" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('name') border-red-500 @enderror"
                       value="{{ old('name', $major->name) }}" required>
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="description">Deskripsi *</label>
                <textarea id="description" name="description" rows="3"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('description') border-red-500 @enderror"
                       required>{{ old('description', $major->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="subjects">Mata Pelajaran (pisah dengan koma) *</label>
                <textarea id="subjects" name="subjects" rows="3"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('subjects') border-red-500 @enderror"
                       required>{{ old('subjects', $major->subjects) }}</textarea>
                @error('subjects')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 mb-2" for="career_prospects">Prospek Kerja (pisah dengan koma) *</label>
                <textarea id="career_prospects" name="career_prospects" rows="3"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('career_prospects') border-red-500 @enderror"
                       required>{{ old('career_prospects', $major->career_prospects) }}</textarea>
                @error('career_prospects')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end space-x-3">
                <a href="{{ route('admin.majors.index') }}" class="btn-secondary">
                    <i class="fas fa-times mr-2"></i>Batal
                </a>
                <button type="submit" class="btn-primary">
                    <i class="fas fa-save mr-2"></i>Update Jurusan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection