<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        $majors = Major::all();
        return view('admin.majors.index', compact('majors'));
    }

    public function create()
    {
        return view('admin.majors.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|unique:majors|max:10',
            'name' => 'required|max:100',
            'description' => 'required',
            'subjects' => 'required',
            'career_prospects' => 'required'
        ]);

        Major::create($validated);

        return redirect()->route('admin.majors.index')
            ->with('success', 'Jurusan berhasil ditambahkan.');
    }

    public function edit(Major $major)
    {
        return view('admin.majors.edit', compact('major'));
    }

    public function update(Request $request, Major $major)
    {
        $validated = $request->validate([
            'code' => 'required|max:10|unique:majors,code,' . $major->id,
            'name' => 'required|max:100',
            'description' => 'required',
            'subjects' => 'required',
            'career_prospects' => 'required'
        ]);

        $major->update($validated);

        return redirect()->route('admin.majors.index')
            ->with('success', 'Jurusan berhasil diperbarui.');
    }

    public function destroy(Major $major)
    {
        $major->delete();
        return redirect()->route('admin.majors.index')
            ->with('success', 'Jurusan berhasil dihapus.');
    }
}