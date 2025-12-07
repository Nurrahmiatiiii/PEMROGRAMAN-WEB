@extends('layouts.app')

@section('title', 'Tes Minat Jurusan')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="card">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Tes Minat dan Bakat Jurusan SMK</h1>
            <p class="text-gray-600">Jawab semua pertanyaan berikut dengan jujur sesuai dengan diri Anda</p>
        </div>
        
        <div class="bg-blue-50 p-6 rounded-lg mb-8">
            <h3 class="font-bold text-blue-800 mb-3">Petunjuk Pengisian:</h3>
            <div class="grid grid-cols-3 gap-4 text-center">
                <div>
                    <div class="w-12 h-12 bg-red-100 text-red-600 rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-2">1</div>
                    <span class="font-semibold text-red-600">TIDAK</span>
                    <p class="text-sm text-gray-600 mt-1">Jika Anda tidak setuju/tidak suka</p>
                </div>
                <div>
                    <div class="w-12 h-12 bg-yellow-100 text-yellow-600 rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-2">2</div>
                    <span class="font-semibold text-yellow-600">NETRAL</span>
                    <p class="text-sm text-gray-600 mt-1">Jika Anda ragu-ragu/biasa saja</p>
                </div>
                <div>
                    <div class="w-12 h-12 bg-green-100 text-green-600 rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-2">3</div>
                    <span class="font-semibold text-green-600">YA</span>
                    <p class="text-sm text-gray-600 mt-1">Jika Anda setuju/sangat suka</p>
                </div>
            </div>
        </div>
        
        <form method="POST" action="{{ route('test.process') }}" id="testForm">
            @csrf
            
            @foreach($questions as $index => $question)
            <div class="border-b border-gray-200 py-8">
                <div class="flex items-start">
                    <div class="flex-shrink-0 w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold mr-4">
                        {{ $index+1 }}
                    </div>
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold text-gray-800 mb-6">{{ $question->question_text }}</h3>
                        
                        <div class="grid grid-cols-3 gap-4">
                            @for($i = 1; $i <= 3; $i++)
                            <label class="cursor-pointer">
                                <input type="radio" name="answers[{{ $question->id }}]" 
                                       value="{{ $i }}" 
                                       class="hidden peer">
                                <div class="p-4 border-2 border-gray-200 rounded-lg text-center peer-checked:border-blue-500 peer-checked:bg-blue-50 transition duration-300 hover:border-gray-300">
                                    <div class="text-2xl font-bold mb-2 
                                        @if($i == 1) text-red-500 @endif
                                        @if($i == 2) text-yellow-500 @endif
                                        @if($i == 3) text-green-500 @endif">
                                        {{ $i }}
                                    </div>
                                    <div class="font-semibold 
                                        @if($i == 1) text-red-600 @endif
                                        @if($i == 2) text-yellow-600 @endif
                                        @if($i == 3) text-green-600 @endif">
                                        @if($i == 1) TIDAK @endif
                                        @if($i == 2) NETRAL @endif
                                        @if($i == 3) YA @endif
                                    </div>
                                </div>
                            </label>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
            <div class="mt-8 pt-6 border-t border-gray-200">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-600">
                            <i class="fas fa-info-circle mr-2"></i>
                            Pastikan semua pertanyaan telah dijawab
                        </p>
                    </div>
                    <button type="submit" class="btn-primary text-lg px-8 py-3">
                        <i class="fas fa-calculator mr-2"></i> Lihat Hasil Rekomendasi
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- HAPUS SEMUA SCRIPT INI UNTUK TIDAK ADA VALIDASI -->
<!--
<script>
    // Validasi form sebelum submit
    document.getElementById('testForm').addEventListener('submit', function(e) {
        const totalQuestions = {{ count($questions) }};
        let answered = 0;
        
        // Hitung pertanyaan yang sudah dijawab
        @foreach($questions as $question)
        const questionName{{ $question->id }} = 'answers[{{ $question->id }}]';
        if(document.querySelector('input[name="' + questionName{{ $question->id }} + '"]:checked')) {
            answered++;
        }
        @endforeach
        
        if(answered < totalQuestions) {
            if(!confirm('Anda baru menjawab ' + answered + ' dari ' + totalQuestions + ' pertanyaan.\nLanjutkan dengan jawaban yang ada?')) {
                e.preventDefault();
                return false;
            }
        }
    });
</script>
-->
@endsection