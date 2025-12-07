<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Question;
use App\Models\TestSession;
use App\Models\TestAnswer;
use App\Models\Result;
use App\Services\ExpertSystemService;

class TestController extends Controller
{
    public function welcome()
    {
        return view('home');
    }

    public function start()
    {
        $questions = Question::orderBy('order')->get();
        return view('test.start', compact('questions'));
    }

    public function process(Request $request)
    {
        $validated = $request->validate([
            'answers.*' => 'required|integer|between:1,3'
        ]);

        // Create test session
        $session = TestSession::create([
            'session_id' => Str::uuid(),
            'completed_at' => now()
        ]);

        // Save answers
        foreach ($request->answers as $questionId => $value) {
            TestAnswer::create([
                'test_session_id' => $session->id,
                'question_id' => $questionId,
                'answer_value' => $value
            ]);
        }

        // Calculate results using Expert System
        $expertSystem = new ExpertSystemService();
        $results = $expertSystem->calculate($request->answers);

        // Save results to database
        foreach ($results as $index => $result) {
            Result::create([
                'session_id' => $session->session_id,
                'major_id' => $result['major']->id,
                'score' => $result['score'],
                'rank' => $index + 1
            ]);
        }

        // Store in session for display
        session(['current_results' => $results]);

        return redirect()->route('test.result', ['session' => $session->session_id]);
    }

    public function result($sessionId)
    {
        $results = Result::with('major')
            ->where('session_id', $sessionId)
            ->orderBy('rank')
            ->get();

        if ($results->isEmpty()) {
            return redirect()->route('test.start');
        }

        return view('test.result', compact('results'));
    }
}