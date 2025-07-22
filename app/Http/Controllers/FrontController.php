<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        return view('index', compact('sections'));
    }
}
