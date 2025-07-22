<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Section;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        return view('index', compact('sections'));
    }

    public function show_section($id)
    {
        $section = Section::find($id);
        $lessons = Lesson::where('section_id', $id)->get();
        return view('section', compact('section', 'lessons'));
    }

    public function show_lesson($id)
    {
        $lesson = Lesson::find($id);
        $section = Section::find($lesson->section_id);
        return view('lesson', [
            'lesson' => $lesson,
            'section' => $section
        ]);
    }
}
