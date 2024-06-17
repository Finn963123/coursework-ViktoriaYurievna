<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progress;

class ProgressController extends Controller
{
    public function index()
    {
        $progresses = Progress::all();
        return view('progress.index', compact('progresses'));
    }

    public function create()
    {
        return view('progress.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'progress' => 'required|numeric|min:0|max:100',
        ]);

        Progress::create($request->all());

        return redirect()->route('progress.index')
            ->with('success', 'Progress created successfully.');
    }

    public function show(Progress $progress)
    {
        return view('progress.show', compact('progress'));
    }

    public function edit(Progress $progress)
    {
        return view('progress.edit', compact('progress'));
    }

    public function update(Request $request, Progress $progress)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'progress' => 'required|numeric|min:0|max:100',
        ]);

        $progress->update($request->all());

        return redirect()->route('progress.index')
            ->with('success', 'Progress updated successfully.');
    }

    public function destroy(Progress $progress)
    {
        $progress->delete();

        return redirect()->route('progress.index')
            ->with('success', 'Progress deleted successfully.');
    }
}
