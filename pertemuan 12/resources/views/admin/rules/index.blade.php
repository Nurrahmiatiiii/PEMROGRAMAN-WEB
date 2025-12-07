@extends('layouts.app')

@section('title', 'Kelola Rules')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">
            <i class="fas fa-cogs mr-2"></i>Kelola Rules Sistem Pakar
        </h1>
        <a href="{{ route('admin.dashboard') }}" class="btn-secondary">
            <i class="fas fa-arrow-left mr-2"></i>Kembali
        </a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <!-- Form Tambah Rule -->
    <div class="card mb-6">
        <h2 class="text-lg font-bold text-gray-800 mb-4">
            <i class="fas fa-plus-circle mr-2"></i>Tambah Rule Baru
        </h2>
        
        <form method="POST" action="{{ route('admin.rules.store') }}">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 mb-2" for="question_id">Pertanyaan *</label>
                    <select id="question_id" name="question_id" 
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('question_id') border-red-500 @enderror" required>
                        <option value="">-- Pilih Pertanyaan --</option>
                        @foreach($questions as $question)
                        <option value="{{ $question->id }}" {{ old('question_id') == $question->id ? 'selected' : '' }}>
                            Q{{ $question->id }}: {{ Str::limit($question->question_text, 50) }}
                        </option>
                        @endforeach
                    </select>
                    @error('question_id')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label class="block text-gray-700 mb-2" for="major_id">Jurusan *</label>
                    <select id="major_id" name="major_id" 
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('major_id') border-red-500 @enderror" required>
                        <option value="">-- Pilih Jurusan --</option>
                        @foreach($majors as $major)
                        <option value="{{ $major->id }}" {{ old('major_id') == $major->id ? 'selected' : '' }}>
                            {{ $major->code }} - {{ $major->name }}
                        </option>
                        @endforeach
                    </select>
                    @error('major_id')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label class="block text-gray-700 mb-2" for="min_value">Nilai Minimal *</label>
                    <select id="min_value" name="min_value" 
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('min_value') border-red-500 @enderror" required>
                        <option value="1" {{ old('min_value') == 1 ? 'selected' : '' }}>1 (Tidak)</option>
                        <option value="2" {{ old('min_value', 2) == 2 ? 'selected' : '' }}>2 (Netral)</option>
                        <option value="3" {{ old('min_value') == 3 ? 'selected' : '' }}>3 (Ya)</option>
                    </select>
                    @error('min_value')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label class="block text-gray-700 mb-2" for="weight">Bobot (1-5) *</label>
                    <select id="weight" name="weight" 
                           class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500 @error('weight') border-red-500 @enderror" required>
                        @for($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}" {{ old('weight', 1) == $i ? 'selected' : '' }}>
                            {{ $i }} {{ $i == 5 ? '(Paling Penting)' : '' }}
                        </option>
                        @endfor
                    </select>
                    @error('weight')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <div>
                <button type="submit" class="btn-primary">
                    <i class="fas fa-plus mr-2"></i>Tambah Rule
                </button>
                <button type="reset" class="btn-secondary ml-2">
                    <i class="fas fa-redo mr-2"></i>Reset
                </button>
            </div>
        </form>
    </div>

    <!-- Daftar Rules -->
    <div class="card">
        <h2 class="text-lg font-bold text-gray-800 mb-4">
            <i class="fas fa-list mr-2"></i>Daftar Rules ({{ $rules->count() }})
        </h2>
        
        @if($rules->count() > 0)
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pertanyaan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jurusan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Minimal</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Bobot</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($rules as $rule)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $rule->id }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-900">
                                <strong>Q{{ $rule->question->id }}:</strong> 
                                {{ Str::limit($rule->question->question_text, 70) }}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="font-bold text-blue-600">{{ $rule->major->code }}</span>
                            <div class="text-sm text-gray-500">{{ Str::limit($rule->major->name, 30) }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 text-xs rounded-full 
                                {{ $rule->min_value == 1 ? 'bg-red-100 text-red-800' : '' }}
                                {{ $rule->min_value == 2 ? 'bg-yellow-100 text-yellow-800' : '' }}
                                {{ $rule->min_value == 3 ? 'bg-green-100 text-green-800' : '' }}">
                                {{ $rule->min_value }} 
                                @if($rule->min_value == 1) (Tidak) @endif
                                @if($rule->min_value == 2) (Netral) @endif
                                @if($rule->min_value == 3) (Ya) @endif
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 text-xs rounded-full bg-purple-100 text-purple-800">
                                {{ $rule->weight }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <!-- Form Edit -->
                            <form action="{{ route('admin.rules.update', $rule) }}" method="POST" class="inline-block mr-2" onsubmit="return confirm('Update rule ini?')">
                                @csrf
                                @method('PUT')
                                <div class="flex items-center space-x-2">
                                    <select name="min_value" class="text-xs border rounded p-1 w-16">
                                        <option value="1" {{ $rule->min_value == 1 ? 'selected' : '' }}>1</option>
                                        <option value="2" {{ $rule->min_value == 2 ? 'selected' : '' }}>2</option>
                                        <option value="3" {{ $rule->min_value == 3 ? 'selected' : '' }}>3</option>
                                    </select>
                                    <select name="weight" class="text-xs border rounded p-1 w-16">
                                        @for($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}" {{ $rule->weight == $i ? 'selected' : '' }}>{{ $i }}</option>
                                        @endfor
                                    </select>
                                    <button type="submit" class="text-blue-600 hover:text-blue-900 text-xs" title="Update">
                                        <i class="fas fa-save"></i>
                                    </button>
                                </div>
                            </form>
                            
                            <!-- Form Hapus -->
                            <form action="{{ route('admin.rules.destroy', $rule) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus rule ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900" title="Hapus">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="mt-4 text-sm text-gray-600">
            <i class="fas fa-info-circle mr-2"></i>
            Total {{ $rules->count() }} rules dalam sistem.
        </div>
        
        @else
        <div class="text-center py-8 text-gray-500">
            <i class="fas fa-inbox text-4xl mb-4"></i>
            <p class="text-lg mb-2">Belum ada rules yang ditambahkan</p>
            <p class="text-sm">Gunakan form di atas untuk menambahkan rules pertama</p>
        </div>
        @endif
    </div>
</div>
@endsection