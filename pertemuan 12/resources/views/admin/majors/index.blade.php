@extends('layouts.app')

@section('title', 'Kelola Jurusan')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">
            <i class="fas fa-university mr-2"></i>Kelola Jurusan
        </h1>
        <a href="{{ route('admin.majors.create') }}" class="btn-primary">
            <i class="fas fa-plus mr-2"></i>Tambah Jurusan
        </a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kode</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Jurusan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Deskripsi</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($majors as $major)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="font-bold text-blue-600">{{ $major->code }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="font-medium text-gray-900">{{ $major->name }}</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-500">{{ Str::limit($major->description, 100) }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="{{ route('admin.majors.edit', $major) }}" class="text-blue-600 hover:text-blue-900 mr-3">
                            <i class="fas fa-edit mr-1"></i>Edit
                        </a>
                        <form action="{{ route('admin.majors.destroy', $major) }}" method="POST" class="inline" onsubmit="return confirm('Hapus jurusan ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">
                                <i class="fas fa-trash mr-1"></i>Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                        <i class="fas fa-inbox text-3xl mb-2 block"></i>
                        Belum ada data jurusan
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        <a href="{{ route('admin.dashboard') }}" class="text-blue-600 hover:text-blue-800">
            <i class="fas fa-arrow-left mr-1"></i>Kembali ke Dashboard
        </a>
    </div>
</div>
@endsection