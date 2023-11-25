<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\QuestionPaper;
use App\Models\Subject;
use Illuminate\Http\Request;

class QuestionPaperController extends Controller
{
    public function index()
    {
        $questionpapers = QuestionPaper::all();
        return view('backend.questionpaper.index', compact('questionpapers'));
    }

    public function create()
    {
        $subjects = Subject::all();
        $levels = Level::all();
        return view('backend.questionpaper.create', compact('subjects','levels'));
    }

    public function edit()
    {
        return view('backend.questionpaper.edit');
    }
}
