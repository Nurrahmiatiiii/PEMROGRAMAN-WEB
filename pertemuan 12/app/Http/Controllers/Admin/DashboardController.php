<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Major;
use App\Models\Question;
use App\Models\Rule;
use App\Models\TestSession;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'majors' => Major::count(),
            'questions' => Question::count(),
            'rules' => Rule::count(),
            'tests_taken' => TestSession::count(),
            'recent_tests' => TestSession::latest()->take(5)->get()
        ];

        return view('admin.dashboard', compact('stats'));
    }
}