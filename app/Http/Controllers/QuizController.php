<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Question;

class QuizController extends Controller
{
    public function index($id)
    {
        $quiz = [
            'questions' => [
                0 => [
                    'question' => 'sjsjdjdb?',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                1 => [
                    'question' => 'sjsjdjdb?',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                2 => [
                    'question' => 'sjsjdjdb?',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
               3 => [
                    'question' => 'sjsjdjdb?',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                4 => [
                    'question' => 'sjsjdjdb?',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                5 => [
                    'question' => 'sjsjdjdb?',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ]
            ],
            'point' => 100
        ];
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
