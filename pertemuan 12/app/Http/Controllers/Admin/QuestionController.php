<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::orderBy('order')->get();
        return view('admin.questions.index', compact('questions'));
    }

    public function create()
    {
        return view('admin.questions.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'question_text' => 'required',
            'category' => 'nullable|max:50',
            'order' => 'required|integer'
        ]);

        Question::create($validated);

        return redirect()->route('admin.questions.index')
            ->with('success', 'Pertanyaan berhasil ditambahkan.');
    }

    public function edit(Question $question)
    {
        return view('admin.questions.edit', compact('question'));
    }

    public function update(Request $request, Question $question)
    {
        $validated = $request->validate([
            'question_text' => 'required',
            'category' => 'nullable|max:50',
            'order' => 'required|integer'
        ]);

        $question->update($validated);

        return redirect()->route('admin.questions.index')
            ->with('success', 'Pertanyaan berhasil diperbarui.');
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('admin.questions.index')
            ->with('success', 'Pertanyaan berhasil dihapus.');
    }
}