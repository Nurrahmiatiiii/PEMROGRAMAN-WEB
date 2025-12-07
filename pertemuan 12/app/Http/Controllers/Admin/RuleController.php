<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rule;
use App\Models\Question;
use App\Models\Major;
use Illuminate\Http\Request;

class RuleController extends Controller
{
    public function index()
    {
        $rules = Rule::with(['question', 'major'])->get();
        $questions = Question::all();
        $majors = Major::all();
        
        return view('admin.rules.index', compact('rules', 'questions', 'majors'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'question_id' => 'required|exists:questions,id',
            'major_id' => 'required|exists:majors,id',
            'min_value' => 'required|integer|min:1|max:3',
            'weight' => 'required|integer|min:1|max:5'
        ]);

        // Check if rule already exists
        $exists = Rule::where('question_id', $request->question_id)
            ->where('major_id', $request->major_id)
            ->exists();

        if ($exists) {
            return back()->with('error', 'Rule untuk pertanyaan dan jurusan ini sudah ada.');
        }

        Rule::create($validated);

        return redirect()->route('admin.rules.index')
            ->with('success', 'Rule berhasil ditambahkan.');
    }

    public function update(Request $request, Rule $rule)
    {
        $validated = $request->validate([
            'min_value' => 'required|integer|min:1|max:3',
            'weight' => 'required|integer|min:1|max:5'
        ]);

        $rule->update($validated);

        return redirect()->route('admin.rules.index')
            ->with('success', 'Rule berhasil diperbarui.');
    }

    public function destroy(Rule $rule)
    {
        $rule->delete();
        return redirect()->route('admin.rules.index')
            ->with('success', 'Rule berhasil dihapus.');
    }
}