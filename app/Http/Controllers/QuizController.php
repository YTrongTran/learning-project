<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Question;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class QuizController extends Controller
{

    public function step1(Request $request)
    {
        return view('pages.quiz_step_1');
    }
    public function step2(Request $request)
    {
        return view('pages.quiz_step_2');
    }
    public function step3(Request $request)
    {
        $level = $request->input('level');
        $levelText = $request->input('level_text');

        if (!$level) {
            return back()->with('error', 'Vui lòng chọn một cấp độ.');
        }

        // return redirect()->route('quiz.toeic',1)->with('level', $level);
        return view('pages.quiz_step_3')->with([
            'level' => $level,
            'level_text' => $levelText
        ]);
    }

    public function superkids(Request $request, $id)
    {
        $quiz = [
            'questions' => [
                0 => [
                    'question' => 'Manager: Where’s Mr. Davidson?
                                    Assistant: Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                1 => [
                    'question' => 'Manager: Where’s Mr. Davidson?
                                    Assistant: Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                2 => [
                    'question' => 'Manager: Where’s Mr. Davidson?
                                    Assistant: Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                3 => [
                    'question' => 'Manager: Where’s Mr. Davidson?
                                    Assistant: Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                4 => [
                    'question' => 'Manager: Where’s Mr. Davidson?
                                    Assistant: Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                5 => [
                    'question' => 'Manager: Where’s Mr. Davidson?
                                    Assistant: Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                6 => [
                    'question' => 'Manager: Where’s Mr. Davidson?
                                    Assistant: Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                7 => [
                    'question' => 'Manager: Where’s Mr. Davidson?
                                    Assistant: Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                8 => [
                    'question' => 'Manager: Where’s Mr. Davidson?
                                    Assistant: Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                9 => [
                    'question' => 'Manager: Where’s Mr. Davidson?
                                    Assistant: Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                10 => [
                    'question' => 'Manager: Where’s Mr. Davidson?
                                    Assistant: Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                11 => [
                    'question' => 'Manager: Where’s Mr. Davidson?
                    Assistant: Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                12 => [
                    'question' => 'Manager: Where’s Mr. Davidson?
                                    Assistant: Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                13 => [
                    'question' => 'Manager: Where’s Mr. Davidson?
                                    Assistant: Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                14 => [
                    'question' => 'Manager: Where’s Mr. Davidson?
                                    Assistant: Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                15 => [
                    'question' => 'Manager: Where’s Mr. Davidson?
                                    Assistant: Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                16 => [
                    'question' => 'Manager: Where’s Mr. Davidson?
                                    Assistant: Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                17 => [
                    'question' => 'Manager: Where’s Mr. Davidson?
                                    Assistant: Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                18 => [
                    'question' => 'Manager: Where’s Mr. Davidson?
                                    Assistant: Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                19 => [
                    'question' => 'Manager: Where’s Mr. Davidson?
                                    Assistant: Oh, he’s _______ London today.',
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

        $perPage = 6;
        $questions = array_chunk($quiz['questions'], $perPage);
        $totalPages = count($questions);
        $page = max(1, min($request->input('page', 1), $totalPages));
        $data = [
            'questions' => $questions[$page - 1] ?? [],
            'totalPages' => $totalPages,
            'currentPage' => $page
        ];

        if ($request->ajax()) {
            return response()->json([
                'html' => view('components.quiz_questions_superkids', [
                    'questions' => $data['questions'],
                    'currentPage' => $data['currentPage']
                ])->render(),
                'totalPages' => $data['totalPages'],
                'currentPage' => $data['currentPage'],
            ]);
        }

        return view('pages.quiz-superkids', compact('quiz', 'data', 'id'));
    }

    public function toeic(Request $request, $id)
    {
        $quiz = [
            "test_id" => 1,
            "title" => "TOEIC 1",
            "description" => "Official TOEIC test from 2023",
            "parts" => [
                [
                    "part" => 1,
                    "description" => "Photographs",
                    "audio_url" => asset('assets/audio/NES_TOEIC_Listening_Part_1.mp3'),
                    "questions" => [
                        [
                            "question_id" => 1,
                            "image_url" => asset('assets/img/Listening.png'),
                            "options" => ["A", "B", "C", "D"],
                            "correct_answer" => "B"
                        ],
                        [
                            "question_id" => 2,
                            "image_url" => asset('assets/img/Listening.png'),
                            "options" => ["A", "B", "C", "D"],
                            "correct_answer" => "B"
                        ],
                        [
                            "question_id" => 3,
                            "image_url" => asset('assets/img/Listening.png'),
                            "options" => ["A", "B", "C", "D"],
                            "correct_answer" => "B"
                        ],
                        [
                            "question_id" => 4,
                            "image_url" => asset('assets/img/Listening.png'),
                            "options" => ["A", "B", "C", "D"],
                            "correct_answer" => "B"
                        ],
                        [
                            "question_id" => 5,
                            "image_url" => asset('assets/img/Listening.png'),
                            "options" => ["A", "B", "C", "D"],
                            "correct_answer" => "B"
                        ],
                        [
                            "question_id" => 6,
                            "image_url" => asset('assets/img/Listening.png'),
                            "options" => ["A", "B", "C", "D"],
                            "correct_answer" => "B"
                        ],
                    ]
                ],
                [
                    "part" => 2,
                    "description" => "Question-Response",
                    "audio_url" => asset('assets/audio/NES_TOEIC_Listening_Part_2.mp3'),
                    "questions" => [
                        [
                            "question_id" => 7,
                            "options" => ["A", "B", "C"],
                            "correct_answer" => "C"
                        ],
                        [
                            "question_id" => 8,
                            "options" => ["A", "B", "C"],
                            "correct_answer" => "C"
                        ],
                        [
                            "question_id" => 9,
                            "options" => ["A", "B", "C"],
                            "correct_answer" => "C"
                        ],
                        [
                            "question_id" => 10,
                            "options" => ["A", "B", "C"],
                            "correct_answer" => "C"
                        ],
                        [
                            "question_id" => 11,
                            "options" => ["A", "B", "C"],
                            "correct_answer" => "C"
                        ],
                        [
                            "question_id" => 12,
                            "options" => ["A", "B", "C"],
                            "correct_answer" => "C"
                        ],
                    ]
                ],
                [
                    "part" => 3,
                    "description" => "Conversations",
                    "audio_url" => asset('assets/audio/NES_TOEIC_Listening_Part _3_1.mp3'),
                    "questions" => [
                        [
                            "question_id" => 13,
                            "question" => "What is the woman going to do?",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "B"
                        ],
                        [
                            "question_id" => 14,
                            "question" => "What is the woman going to do?",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "B"
                        ],
                        [
                            "question_id" => 15,
                            "question" => "What is the woman going to do?",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "B"
                        ],
                        [
                            "question_id" => 16,
                            "question" => "What is the woman going to do?",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "B"
                        ],
                        [
                            "question_id" => 17,
                            "question" => "What is the woman going to do?",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "B"
                        ],
                        [
                            "question_id" => 18,
                            "question" => "What is the woman going to do?",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "B"
                        ],
                    ]
                ],
                [
                    "part" => 4,
                    "description" => "Talks",
                    "audio_url" => asset('assets/audio/NES_TOEIC_Listening_Part_4_1.mp3'),
                    "questions" => [
                        [
                            "question_id" => 19,
                            "question" => "What is the woman going to do?",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "B"
                        ],
                        [
                            "question_id" => 20,
                            "question" => "What is the woman going to do?",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "B"
                        ],
                        [
                            "question_id" => 21,
                            "question" => "What is the woman going to do?",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "B"
                        ],
                        [
                            "question_id" => 22,
                            "question" => "What is the woman going to do?",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "B"
                        ],
                        [
                            "question_id" => 23,
                            "question" => "What is the woman going to do?",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "B"
                        ],
                        [
                            "question_id" => 24,
                            "question" => "What is the woman going to do?",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "B"
                        ],
                        [
                            "question_id" => 25,
                            "question" => "What is the woman going to do?",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "B"
                        ],
                    ]
                ],
                [
                    "part" => 5,
                    "description" => "Incomplete Sentences",
                    "questions" => [
                        [
                            "question_id" => 26,
                            "text" => "The manager ____ the report before submitting it.",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "A"
                        ],
                        [
                            "question_id" => 27,
                            "text" => "The manager ____ the report before submitting it.",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "A"
                        ],
                        [
                            "question_id" => 28,
                            "text" => "The manager ____ the report before submitting it.",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "A"
                        ],
                        [
                            "question_id" => 29,
                            "text" => "The manager ____ the report before submitting it.",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "A"
                        ],
                        [
                            "question_id" => 30,
                            "text" => "The manager ____ the report before submitting it.",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "A"
                        ],
                        [
                            "question_id" => 31,
                            "text" => "The manager ____ the report before submitting it.",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "A"
                        ],
                        [
                            "question_id" => 32,
                            "text" => "The manager ____ the report before submitting it.",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "A"
                        ],
                        [
                            "question_id" => 33,
                            "text" => "The manager ____ the report before submitting it.",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "A"
                        ],
                        [
                            "question_id" => 34,
                            "text" => "The manager ____ the report before submitting it.",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "A"
                        ],
                        [
                            "question_id" => 35,
                            "text" => "The manager ____ the report before submitting it.",
                            "options" => [
                                [
                                    "option" => "A",
                                    "description" => "A chef is preparing food in the kitchen."
                                ],
                                [
                                    "option" => "B",
                                    "description" => "A waiter is taking an order from customers."
                                ],
                                [
                                    "option" => "C",
                                    "description" => "Two people are shaking hands in an office."
                                ],
                                [
                                    "option" => "D",
                                    "description" => "A woman is reading a book at a café."
                                ]
                            ],
                            "correct_answer" => "A"
                        ],
                    ]
                ],
                [
                    "part" => 6,
                    "description" => "Text Completion",
                    "passages" => [
                        [
                            "passage_id" => 1,
                            "text" => "Our company has recently implemented a new system to improve customer support. The system is designed to help our staff _______ customer inquiries more quickly and accurately. We have already seen a significant improvement in response time, and we expect the new system to enhance customer satisfaction even further. All employees will undergo training next week _______ they can make the most of the new features. In addition, we are working on expanding the system to _______ other customer needs, such as managing orders and processing returns. We believe that _______ system will _______ efficiency and productivity across all departments.",
                            "questions" => [
                                [
                                    "question_id" => 36,
                                    "options" => [
                                        [
                                            "option" => "A",
                                            "description" => "A chef is preparing food in the kitchen."
                                        ],
                                        [
                                            "option" => "B",
                                            "description" => "A waiter is taking an order from customers."
                                        ],
                                        [
                                            "option" => "C",
                                            "description" => "Two people are shaking hands in an office."
                                        ],
                                        [
                                            "option" => "D",
                                            "description" => "A woman is reading a book at a café."
                                        ]
                                    ],
                                    "correct_answer" => "A"
                                ],
                                [
                                    "question_id" => 37,
                                    "options" => [
                                        [
                                            "option" => "A",
                                            "description" => "A chef is preparing food in the kitchen."
                                        ],
                                        [
                                            "option" => "B",
                                            "description" => "A waiter is taking an order from customers."
                                        ],
                                        [
                                            "option" => "C",
                                            "description" => "Two people are shaking hands in an office."
                                        ],
                                        [
                                            "option" => "D",
                                            "description" => "A woman is reading a book at a café."
                                        ]
                                    ],
                                    "correct_answer" => "C"
                                ],
                                [
                                    "question_id" => 38,
                                    "options" => [
                                        [
                                            "option" => "A",
                                            "description" => "A chef is preparing food in the kitchen."
                                        ],
                                        [
                                            "option" => "B",
                                            "description" => "A waiter is taking an order from customers."
                                        ],
                                        [
                                            "option" => "C",
                                            "description" => "Two people are shaking hands in an office."
                                        ],
                                        [
                                            "option" => "D",
                                            "description" => "A woman is reading a book at a café."
                                        ]
                                    ],
                                    "correct_answer" => "C"
                                ],
                                [
                                    "question_id" => 39,
                                    "options" => [
                                        [
                                            "option" => "A",
                                            "description" => "A chef is preparing food in the kitchen."
                                        ],
                                        [
                                            "option" => "B",
                                            "description" => "A waiter is taking an order from customers."
                                        ],
                                        [
                                            "option" => "C",
                                            "description" => "Two people are shaking hands in an office."
                                        ],
                                        [
                                            "option" => "D",
                                            "description" => "A woman is reading a book at a café."
                                        ]
                                    ],
                                    "correct_answer" => "C"
                                ],
                                [
                                    "question_id" => 40,
                                    "options" => [
                                        [
                                            "option" => "A",
                                            "description" => "A chef is preparing food in the kitchen."
                                        ],
                                        [
                                            "option" => "B",
                                            "description" => "A waiter is taking an order from customers."
                                        ],
                                        [
                                            "option" => "C",
                                            "description" => "Two people are shaking hands in an office."
                                        ],
                                        [
                                            "option" => "D",
                                            "description" => "A woman is reading a book at a café."
                                        ]
                                    ],
                                    "correct_answer" => "C"
                                ],
                            ]
                        ]
                    ]
                ],
                [
                    "part" => 7,
                    "description" => "Reading Comprehension",
                    "passages" => [
                        [
                            "passage_id" => 1,
                            "text" => "Dear Mr. Thompson,\nI hope this message finds you well. I am writing to inform you that the shipment of your order has been delayed due to unexpected customs clearance procedures. Our team is working hard to resolve the issue, and we expect the shipment to arrive within the next 5 business days. We apologize for any inconvenience this may cause and assure you that we are doing everything we can to expedite the process.\nPlease feel free to contact us with any further questions.\nBest Regards,\nSusan Park\nCustomer Service Manager",
                            "questions" => [
                                [
                                    "question_id" => 41,
                                    "question" => "Why was the shipment delayed?",
                                    "options" => [
                                        [
                                            "option" => "A",
                                            "description" => "A chef is preparing food in the kitchen."
                                        ],
                                        [
                                            "option" => "B",
                                            "description" => "A waiter is taking an order from customers."
                                        ],
                                        [
                                            "option" => "C",
                                            "description" => "Two people are shaking hands in an office."
                                        ],
                                        [
                                            "option" => "D",
                                            "description" => "A woman is reading a book at a café."
                                        ]
                                    ],
                                    "correct_answer" => "A"
                                ],
                                [
                                    "question_id" => 42,
                                    "question" => "Why was the shipment delayed?",
                                    "options" => [
                                        [
                                            "option" => "A",
                                            "description" => "A chef is preparing food in the kitchen."
                                        ],
                                        [
                                            "option" => "B",
                                            "description" => "A waiter is taking an order from customers."
                                        ],
                                        [
                                            "option" => "C",
                                            "description" => "Two people are shaking hands in an office."
                                        ],
                                        [
                                            "option" => "D",
                                            "description" => "A woman is reading a book at a café."
                                        ]
                                    ],
                                    "correct_answer" => "A"
                                ],
                                [
                                    "question_id" => 43,
                                    "question" => "Why was the shipment delayed?",
                                    "options" => [
                                        [
                                            "option" => "A",
                                            "description" => "A chef is preparing food in the kitchen."
                                        ],
                                        [
                                            "option" => "B",
                                            "description" => "A waiter is taking an order from customers."
                                        ],
                                        [
                                            "option" => "C",
                                            "description" => "Two people are shaking hands in an office."
                                        ],
                                        [
                                            "option" => "D",
                                            "description" => "A woman is reading a book at a café."
                                        ]
                                    ],
                                    "correct_answer" => "A"
                                ],
                            ]
                        ],
                        [
                            "passage_id" => 2,
                            "text" => "Dear Mr. Thompson,\nI hope this message finds you well. I am writing to inform you that the shipment of your order has been delayed due to unexpected customs clearance procedures. Our team is working hard to resolve the issue, and we expect the shipment to arrive within the next 5 business days. We apologize for any inconvenience this may cause and assure you that we are doing everything we can to expedite the process.\nPlease feel free to contact us with any further questions.\nBest Regards,\nSusan Park\nCustomer Service Manager",
                            "questions" => [
                                [
                                    "question_id" => 44,
                                    "question" => "Why was the shipment delayed?",
                                    "options" => [
                                        [
                                            "option" => "A",
                                            "description" => "A chef is preparing food in the kitchen."
                                        ],
                                        [
                                            "option" => "B",
                                            "description" => "A waiter is taking an order from customers."
                                        ],
                                        [
                                            "option" => "C",
                                            "description" => "Two people are shaking hands in an office."
                                        ],
                                        [
                                            "option" => "D",
                                            "description" => "A woman is reading a book at a café."
                                        ]
                                    ],
                                    "correct_answer" => "A"
                                ],
                                [
                                    "question_id" => 45,
                                    "question" => "Why was the shipment delayed?",
                                    "options" => [
                                        [
                                            "option" => "A",
                                            "description" => "A chef is preparing food in the kitchen."
                                        ],
                                        [
                                            "option" => "B",
                                            "description" => "A waiter is taking an order from customers."
                                        ],
                                        [
                                            "option" => "C",
                                            "description" => "Two people are shaking hands in an office."
                                        ],
                                        [
                                            "option" => "D",
                                            "description" => "A woman is reading a book at a café."
                                        ]
                                    ],
                                    "correct_answer" => "A"
                                ],
                                [
                                    "question_id" => 46,
                                    "question" => "Why was the shipment delayed?",
                                    "options" => [
                                        [
                                            "option" => "A",
                                            "description" => "A chef is preparing food in the kitchen."
                                        ],
                                        [
                                            "option" => "B",
                                            "description" => "A waiter is taking an order from customers."
                                        ],
                                        [
                                            "option" => "C",
                                            "description" => "Two people are shaking hands in an office."
                                        ],
                                        [
                                            "option" => "D",
                                            "description" => "A woman is reading a book at a café."
                                        ]
                                    ],
                                    "correct_answer" => "A"
                                ],
                                [
                                    "question_id" => 47,
                                    "question" => "Why was the shipment delayed?",
                                    "options" => [
                                        [
                                            "option" => "A",
                                            "description" => "A chef is preparing food in the kitchen."
                                        ],
                                        [
                                            "option" => "B",
                                            "description" => "A waiter is taking an order from customers."
                                        ],
                                        [
                                            "option" => "C",
                                            "description" => "Two people are shaking hands in an office."
                                        ],
                                        [
                                            "option" => "D",
                                            "description" => "A woman is reading a book at a café."
                                        ]
                                    ],
                                    "correct_answer" => "A"
                                ],
                            ]
                        ],
                        [
                            "passage_id" => 3,
                            "text" => "Dear Mr. Thompson,\n\nI hope this message finds you well. I am writing to inform you that the shipment of your order has been delayed due to unexpected customs clearance procedures. Our team is working hard to resolve the issue, and we expect the shipment to arrive within the next 5 business days. We apologize for any inconvenience this may cause and assure you that we are doing everything we can to expedite the process.\nPlease feel free to contact us with any further questions.\n\nBest Regards,\nSusan Park\nCustomer Service Manager",
                            "questions" => [
                                [
                                    "question_id" => 48,
                                    "question" => "Why was the shipment delayed?",
                                    "options" => [
                                        [
                                            "option" => "A",
                                            "description" => "A chef is preparing food in the kitchen."
                                        ],
                                        [
                                            "option" => "B",
                                            "description" => "A waiter is taking an order from customers."
                                        ],
                                        [
                                            "option" => "C",
                                            "description" => "Two people are shaking hands in an office."
                                        ],
                                        [
                                            "option" => "D",
                                            "description" => "A woman is reading a book at a café."
                                        ]
                                    ],
                                    "correct_answer" => "A"
                                ],
                                [
                                    "question_id" => 49,
                                    "question" => "Why was the shipment delayed?",
                                    "options" => [
                                        [
                                            "option" => "A",
                                            "description" => "A chef is preparing food in the kitchen."
                                        ],
                                        [
                                            "option" => "B",
                                            "description" => "A waiter is taking an order from customers."
                                        ],
                                        [
                                            "option" => "C",
                                            "description" => "Two people are shaking hands in an office."
                                        ],
                                        [
                                            "option" => "D",
                                            "description" => "A woman is reading a book at a café."
                                        ]
                                    ],
                                    "correct_answer" => "A"
                                ],
                                [
                                    "question_id" => 50,
                                    "question" => "Why was the shipment delayed?",
                                    "options" => [
                                        [
                                            "option" => "A",
                                            "description" => "A chef is preparing food in the kitchen."
                                        ],
                                        [
                                            "option" => "B",
                                            "description" => "A waiter is taking an order from customers."
                                        ],
                                        [
                                            "option" => "C",
                                            "description" => "Two people are shaking hands in an office."
                                        ],
                                        [
                                            "option" => "D",
                                            "description" => "A woman is reading a book at a café."
                                        ]
                                    ],
                                    "correct_answer" => "A"
                                ],
                            ]
                        ],
                    ]
                ]
            ]
        ];

        $correct_answers = [];

        foreach ($quiz["parts"] as $part) {
            if (isset($part["questions"])) {
                foreach ($part["questions"] as $question) {
                    $correct_answers[] = $question["correct_answer"];
                }
            } elseif (isset($part["passages"])) {
                foreach ($part["passages"] as $passage) {
                    foreach ($passage["questions"] as $question) {
                        $correct_answers[] = $question["correct_answer"];
                    }
                }
            }
        }

        Session::put('correct_answers', $correct_answers);

        $totalPages = count($quiz['parts']);
        $page = max(1, min($request->input('page', 1), $totalPages));
        $data = [
            'title' => $quiz['title'],
            'desc' => $quiz['description'],
            'questions' => $quiz['parts'][$page - 1] ?? [],
            'totalPages' => $totalPages,
            'currentPage' => $page
        ];

        if ($request->ajax()) {
            return response()->json([
                'html' => view('components.quiz_toeic', [
                    'questions' => $data['questions'],
                    'currentPage' => $data['currentPage']
                ])->render(),
                'totalPages' => $data['totalPages'],
                'currentPage' => $data['currentPage'],
            ]);
        }


        return view('pages.quiz-toeic', compact('quiz', 'data', 'id'));
    }

    public function submitQuizToeic(Request $request)
    {
        $user_answers = $request->input('answers', []);
        $correct_answers = Session::get('correct_answers', []);

        $currentDateTime = Carbon::now()->format('d-m-Y H:i:s');
        $totalQuestions = 50;
        $correctCount = 0;
        foreach ($user_answers as $page => $questions) {
            foreach ($questions as $question_id => $answer) {
                if (isset($correct_answers[$question_id - 1]) && $correct_answers[$question_id - 1] == $answer) {
                    $correctCount++;
                }
            }
        }

        // $scoreLevels = [
        //     ['min' => 0, 'max' => 20, 'level' => 'Sơ cấp (Beginner)', 'class' => 'Lớp TOEIC 300', 'comment' => 'Phù hợp với học viên mới bắt đầu, cần củng cố kiến thức cơ bản về từ vựng, ngữ pháp và kỹ năng nghe/đọc.'],
        //     ['min' => 21, 'max' => 30, 'level' => 'Cấp độ trung cấp thấp (Low Intermediate)', 'class' => 'Lớp TOEIC 350–400', 'comment' => 'Học viên đã có một số nền tảng nhưng cần cải thiện kỹ năng đọc hiểu và nghe hiểu cơ bản để đạt điểm cao hơn.'],
        //     ['min' => 31, 'max' => 40, 'level' => 'Cấp độ trung cấp (Intermediate)', 'class' => 'Lớp TOEIC 450–500', 'comment' => 'Học viên có thể nghe và đọc được các thông tin cơ bản, nhưng vẫn cần nâng cao khả năng làm bài thi và hiểu các chủ đề phức tạp hơn.'],
        //     ['min' => 41, 'max' => 50, 'level' => 'Cấp độ trung cấp cao (Upper Intermediate)', 'class' => 'Lớp TOEIC 500+', 'comment' => 'Học viên đã có khả năng làm bài thi TOEIC ở mức trung cấp và gần đạt được điểm số TOEIC mục tiêu 500. Cần luyện tập thêm để đạt điểm cao hơn trong các bài thi thực tế.']
        // ];

        if ($correctCount <= 20) {
            $userLevel = "Sơ cấp (Beginner)";
            $userClass = "Lớp TOEIC 300";
            $userComment = "Phù hợp với học viên mới bắt đầu, cần củng cố kiến thức cơ bản về từ vựng, ngữ pháp và kỹ năng nghe/đọc.";
        } elseif ($correctCount <= 30) {
            $userLevel = "Cấp độ trung cấp thấp (Low Intermediate)";
            $userClass = "Lớp TOEIC 350–400";
            $userComment = "Học viên đã có một số nền tảng nhưng cần cải thiện k�� năng đ��c hiểu và nghe hiểu cơ bản để đạt điểm cao hơn.";
        } elseif ($correctCount <= 40) {
            $userLevel = "Cấp độ trung cấp (Intermediate)";
            $userClass = "Lớp TOEIC 450–500";
            $userComment = "Học viên có thể nghe và đọc được các thông tin cơ bản, nhưng vẫn cần nâng cao khả năng làm bài thi và hiểu các chủ đề phức tạp hơn.";
        } else {
            $userLevel = "Cấp độ trung cấp cao (Upper Intermediate)";
            $userClass = "Lớp TOEIC 500+";
            $userComment = "Học viên đã có khả năng làm bài thi TOEIC ở mức trung cấp và gần đạt được điểm số TOEIC mục tiêu 500. Cần luyện tập thêm để đạt điểm cao hơn trong các bài thi thực tế.";
        }

        return response()->json([
            'totalQuestions' => $totalQuestions,
            'correctCount' => $correctCount,
            'userLevel' => $userLevel,
            'userClass' => $userClass,
            'userComment' => $userComment,
            'submitted_at' => $currentDateTime,
        ]);
    }


    // public function submit(Request $request)
    // {
    //     $score = 0;
    //     $total = $quiz->questions->count();

    //     foreach ($quiz->questions as $question) {
    //         $selectedAnswer = $request->input('question_' . $question->id);
    //         if ($selectedAnswer && $selectedAnswer === $question->answer) {
    //             $score++;
    //         }
    //     }

    //     return response()->json([
    //         'message' => "You scored $score out of $total!",
    //     ]);
    // }
}
