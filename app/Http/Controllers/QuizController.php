<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Question;

class QuizController extends Controller
{
    public function index(Request $request, $id)
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
                ],
                6 => [
                    'question' => 'cau hoi so 6?',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                7 => [
                    'question' => 'cau hoi so 7?',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                8 => [
                    'question' => 'sjsjdjdb?',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                9 => [
                    'question' => 'cau hoi so 6?',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                10 => [
                    'question' => 'cau hoi so 7?',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                11 => [
                    'question' => 'sjsjdjdb?',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                12 => [
                    'question' => 'cau hoi so 6?',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                13 => [
                    'question' => 'cau hoi so 7?',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ]
            ],
            'point' => 100
        ];
        // $questions = Question::where('exam_id', $id)->get();
        // return view('pages.quiz', compact('quiz', 'questions'));

        $perPage = 6; // Number of questions each page
        $questions = array_chunk($quiz['questions'], $perPage); // Divide the list into groups of 6 sentences
        $totalPages = count($questions);
        $page = max(1, min($request->input('page', 1), $totalPages));
        $data = [
            'questions' => $questions[$page - 1] ?? [], // Get the question group of the current page
            'totalPages' => $totalPages, // Total number of pages
            'currentPage' => $page // Current page
        ];

        // Returns JSON if the request is Ajax
        if ($request->ajax()) {
            return response()->json([
                'html' => view('components.quiz_questions', ['questions' => $data['questions'], 'currentPage' => $data['currentPage']])->render(),
                'totalPages' => $data['totalPages'],
                'currentPage' => $data['currentPage'],
            ]);
        }
        
    
        return view('pages.quiz', compact('quiz','data', 'id'));
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
