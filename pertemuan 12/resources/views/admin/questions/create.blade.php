@extends('layouts.app')

@section('title', 'Tambah Pertanyaan')

@section('content')
<div class="max-w-4xl mx-auto">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">
        <i class="fas fa-plus-circle mr-2"></i>Tambah Pertanyaan Baru
    </h1>

    <div class="card">
        <form method="POST" action="{{ route('admin.questions.store') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="question_text">Pertanyaan *</label>
                <textarea id="question_text" name="question_text" rows="3"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('question_text') border-red-500 @enderror"
                       placeholder="Contoh: Apakah Anda tertarik dengan pemrograman?"
                       required>{{ old('question_text') }}</textarea>
                @error('question_text')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="category">Kategori</label>
                <select id="category" name="category" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('category') border-red-500 @enderror">
                    <option value="">-- Pilih Kategori --</option>
                    <option value="teknologi" {{ old('category') == 'teknologi' ? 'selected' : '' }}>Teknologi</option>
                    <option value="kreatif" {{ old('category') == 'kreatif' ? 'selected' : '' }}>Kreatif</option>
                    <option value="teknis" {{ old('category') == 'teknis' ? 'selected' : '' }}>Teknis</option>
                    <option value="administratif" {{ old('category') == 'administratif' ? 'selected' : '' }}>Administratif</option>
                    <option value="soft_skill" {{ old('category') == 'soft_skill' ? 'selected' : '' }}>Soft Skill</option>
                    <option value="kesehatan" {{ old('category') == 'kesehatan' ? 'selected' : '' }}>Kesehatan</option>
                    <option value="motivasi" {{ old('category') == 'motivasi' ? 'selected' : '' }}>Motivasi</option>
                </select>
                @error('category')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 mb-2" for="order">Urutan Tampil *</label>
                <input type="number" id="order" name="order" min="1" max="100"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('order') border-red-500 @enderror"
                       value="{{ old('order') }}" required>
                @error('order')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end space-x-3">
                <a href="{{ route('admin.questions.index') }}" class="btn-secondary">
                    <i class="fas fa-times mr-2"></i>Batal
                </a>
                <button type="submit" class="btn-primary">
                    <i class="fas fa-save mr-2"></i>Simpan Pertanyaan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection