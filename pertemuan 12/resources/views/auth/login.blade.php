@extends('layouts.app')

@section('title', 'Login Admin')

@section('content')
<div class="max-w-md mx-auto">
    <div class="card">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
            <i class="fas fa-lock mr-2"></i>Login Admin
        </h2>
        
        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="email">
                    <i class="fas fa-envelope mr-2"></i>Email
                </label>
                <input type="email" id="email" name="email" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                       value="{{ old('email') }}" required autofocus>
            </div>
            
            <div class="mb-6">
                <label class="block text-gray-700 mb-2" for="password">
                    <i class="fas fa-key mr-2"></i>Password
                </label>
                <input type="password" id="password" name="password" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                       required>
            </div>
            
            <button type="submit" class="btn-primary w-full py-3">
                <i class="fas fa-sign-in-alt mr-2"></i>Login
            </button>
            
            <div class="mt-4 text-center">
                <p class="text-gray-600 text-sm">
                    <strong>Login Default:</strong><br>
                    Email: admin@smk.com<br>
                    Password: admin123
                </p>
            </div>
        </form>
    </div>
</div>
@endsection