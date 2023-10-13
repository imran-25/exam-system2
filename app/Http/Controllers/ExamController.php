<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Exam;
use App\Models\Level;
use App\Models\Subject;
use App\Models\QuestionBank;
use Illuminate\Http\Request;
use App\Models\QuestionPaper;

class ExamController extends Controller
{
    public function index()
    {
        $exams = Exam::all();
        return view('backend.exams.index', compact('exams'));
    }

    public function create()
    {
        $subjects  = Subject::all();
        $levels = Level::all();

        return view('backend.exams.create', compact('subjects', 'levels'));
    }

    public function store(Request $request)
    {
       try{


            $data = $request->except('total_questions');
            $exam = Exam::create($data);
            // end of exam create


            // make question paper of this exam 
           $questions =  QuestionBank::where('subject_id', $request->subject_id)
                                     ->where('level_id', $request->level_id)
                                     ->inRandomOrder()
                                     ->take($request->total_questions)
                                     ->get();
            
           
            if(count($questions) > 0){
                foreach($questions as $question){
                    QuestionPaper::create([
                        'exam_id' => $exam->id,
                        'title' => $question->title,
                        'question_id' => $question->id,
                        'option1' => $question->option1,
                        'option2' => $question->option2,
                        'option3' => $question->option3,
                        'option4' => $question->option4,
                        'correct_answer' => $question->correct_answer,
                        'subject_id' => $request->subject_id,
                        'level_id' => $request->level_id
                    ]);
                }

            }


            return redirect()->route('exams.index');

       }catch(Exception $e){
          dd($e->getMessage());
       }
    }

    public function edit()
    {

    }

    public function update()
    {
        
    }

    public function destroy($id)
    {
        Exam::destroy($id);
        return redirect()->route('exams.index');
        
    }
}
