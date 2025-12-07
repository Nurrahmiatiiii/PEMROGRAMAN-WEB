@extends('layouts.app')

@section('title', 'Edit Pertanyaan')

@section('content')
<div class="max-w-4xl mx-auto">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">
        <i class="fas fa-edit mr-2"></i>Edit Pertanyaan
    </h1>

    <div class="card">
        <form method="POST" action="{{ route('admin.questions.update', $question) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="question_text">Pertanyaan *</label>
                <textarea id="question_text" name="question_text" rows="3"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('question_text') border-red-500 @enderror"
                       required>{{ old('question_text', $question->question_text) }}</textarea>
                @error('question_text')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="category">Kategori</label>
                <select id="category" name="category" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('category') border-red-500 @enderror">
                    <option value="">-- Pilih Kategori --</option>
                    <option value="teknologi" {{ old('category', $question->category) == 'teknologi' ? 'selected' : '' }}>Teknologi</option>
                    <option value="kreatif" {{ old('category', $question->category) == 'kreatif' ? 'selected' : '' }}>Kreatif</option>
                    <option value="teknis" {{ old('category', $question->category) == 'teknis' ? 'selected' : '' }}>Teknis</option>
                    <option value="administratif" {{ old('category', $question->category) == 'administratif' ? 'selected' : '' }}>Administratif</option>
                    <option value="soft_skill" {{ old('category', $question->category) == 'soft_skill' ? 'selected' : '' }}>Soft Skill</option>
                    <option value="kesehatan" {{ old('category', $question->category) == 'kesehatan' ? 'selected' : '' }}>Kesehatan</option>
                    <option value="motivasi" {{ old('category', $question->category) == 'motivasi' ? 'selected' : '' }}>Motivasi</option>
                </select>
                @error('category')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 mb-2" for="order">Urutan Tampil *</label>
                <input type="number" id="order" name="order" min="1" max="100"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('order') border-red-500 @enderror"
                       value="{{ old('order', $question->order) }}" required>
                @error('order')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end space-x-3">
                <a href="{{ route('admin.questions.index') }}" class="btn-secondary">
                    <i class="fas fa-times mr-2"></i>Batal
                </a>
                <button type="submit" class="btn-primary">
                    <i class="fas fa-save mr-2"></i>Update Pertanyaan
                </button>
            </div>
        </form>
    </div>
</div>
@endsections