<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Question;

class QuizController extends Controller
{
    public function index($id)
    {
        $quiz = Exam::find($id);
        $questions = Question::where('exam_id', $id)->get();
        return view('pages.quiz', compact('quiz', 'questions'));
    }

    public function submit(Request $request)
    {
        $score = 0;
        $total = $quiz->questions->count();

        foreach ($quiz->questions as $question) {
            $selectedAnswer = $request->input('question_' . $question->id);
            if ($selectedAnswer && $selectedAnswer === $question->answer) {
                $score++;
            }
        }

        return response()->json([
            'message' => "You scored $score out of $total!",
        ]);
    }
}
