<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Question;

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
            'listening' => [
                0 => [
                    'img' => asset('assets/img/Listening.png'),
                    'audio' => asset('assets/audio/test.mp3'),
                    'correct' => 'A'
                ],
                1 => [
                    'img' => asset('assets/img/Listening.png'),
                    'audio' => asset('assets/audio/test.mp3'),
                    'correct' => 'A'
                ],
                2 => [
                    'img' => asset('assets/img/Listening.png'),
                    'audio' => asset('assets/audio/test.mp3'),
                    'correct' => 'A'
                ],
                3 => [
                    'img' => asset('assets/img/Listening.png'),
                    'audio' => asset('assets/audio/test.mp3'),
                    'correct' => 'A'
                ],
                4 => [
                    'img' => asset('assets/img/Listening.png'),
                    'audio' => asset('assets/audio/test.mp3'),
                    'correct' => 'A'
                ],
                5 => [
                    'img' => asset('assets/img/Listening.png'),
                    'audio' => asset('assets/audio/test.mp3'),
                    'correct' => 'A'
                ],
            ],
            'grammar' => [
                0 => [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
                1 => [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
                2 => [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
                3 => [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
                4 => [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
                5 => [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
                6 => [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
                7 => [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
                8 => [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
                9 => [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
                10 => [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
                11 => [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
            ],
            'reading' => [
                0 => [
                    'title' => 'Bike Sharing',
                    'content' => "If you travel to a big city, you will see many people riding public bikes. This isn't a new idea. The first public bike sharing system began in Amsterdam in the 1960s. The organisers painted the bikes white and many people used them. After one person finished their journey they left the bike for the next person. Unfortunately, people stole many of the bikes or threw them in the rivers, and so the system was stopped.

                    In 1974, the city of La Rochelle, in France, started its own system of free public bicycles. Their bikes were yellow and the system was successful. Today, there are more than 300 bikes and the city is famous for its yellow bikes. You have to pay to use the bikes now, but they aren't expensive and they are very popular.

                    Today, technology has changed public bike sharing systems. There are now special stations for people to put the bikes so they are safe and computer systems that record the location of the bikes at the bike stations. In most bike sharing systems, the riders use a special card to pay for the bike. Public bike sharing systems are popular in Europe, but (11) they are also becoming popular in Asia. In fact, the biggest bike sharing system is in the city of Hangzhou, in China. There are over 84,000 bicycles and over 3,000 stations!

                    Cities don't have bike sharing systems to make money, but the city benefits because there are fewer cars on the roads, less noise and less pollution. Public bike sharing systems are also becoming very popular with tourists.

                    Local people are happy because a shared bike is cheaper than using a car, it is good for the environment and it is good exercise. With over 500 bike sharing systems in the world today it looks like they are here to stay.",
                    'questions' => [
                        0 => [
                            'question' => 'What was one of the problems with the first bike sharing system?',
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'D' => 'answer 2',
                            'correct' => 'A'
                        ],
                        1 => [
                            'question' => 'What was one of the problems with the first bike sharing system?',
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'D' => 'answer 2',
                            'correct' => 'A'
                        ],
                        2 => [
                            'question' => 'What was one of the problems with the first bike sharing system?',
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'D' => 'answer 2',
                            'correct' => 'A'
                        ],
                    ],
                ],
                1 => [
                    'title' => 'Bike Sharing 2',
                    'content' => "If you travel to a big city, you will see many people riding public bikes. This isn't a new idea. The first public bike sharing system began in Amsterdam in the 1960s. The organisers painted the bikes white and many people used them. After one person finished their journey they left the bike for the next person. Unfortunately, people stole many of the bikes or threw them in the rivers, and so the system was stopped.

                    In 1974, the city of La Rochelle, in France, started its own system of free public bicycles. Their bikes were yellow and the system was successful. Today, there are more than 300 bikes and the city is famous for its yellow bikes. You have to pay to use the bikes now, but they aren't expensive and they are very popular.

                    Today, technology has changed public bike sharing systems. There are now special stations for people to put the bikes so they are safe and computer systems that record the location of the bikes at the bike stations. In most bike sharing systems, the riders use a special card to pay for the bike. Public bike sharing systems are popular in Europe, but (11) they are also becoming popular in Asia. In fact, the biggest bike sharing system is in the city of Hangzhou, in China. There are over 84,000 bicycles and over 3,000 stations!

                    Cities don't have bike sharing systems to make money, but the city benefits because there are fewer cars on the roads, less noise and less pollution. Public bike sharing systems are also becoming very popular with tourists.

                    Local people are happy because a shared bike is cheaper than using a car, it is good for the environment and it is good exercise. With over 500 bike sharing systems in the world today it looks like they are here to stay.",
                    'questions' => [
                        0 => [
                            'question' => 'What was one of the problems with the first bike sharing system?',
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'D' => 'answer 2',
                            'correct' => 'A'
                        ],
                        1 => [
                            'question' => 'What was one of the problems with the first bike sharing system?',
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'D' => 'answer 2',
                            'correct' => 'A'
                        ],
                        2 => [
                            'question' => 'What was one of the problems with the first bike sharing system?',
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'D' => 'answer 2',
                            'correct' => 'A'
                        ],
                    ],
                ],
                2 => [
                    'title' => 'Bike Sharing 2',
                    'content' => "If you travel to a big city, you will see many people riding public bikes. This isn't a new idea. The first public bike sharing system began in Amsterdam in the 1960s. The organisers painted the bikes white and many people used them. After one person finished their journey they left the bike for the next person. Unfortunately, people stole many of the bikes or threw them in the rivers, and so the system was stopped.

                    In 1974, the city of La Rochelle, in France, started its own system of free public bicycles. Their bikes were yellow and the system was successful. Today, there are more than 300 bikes and the city is famous for its yellow bikes. You have to pay to use the bikes now, but they aren't expensive and they are very popular.

                    Today, technology has changed public bike sharing systems. There are now special stations for people to put the bikes so they are safe and computer systems that record the location of the bikes at the bike stations. In most bike sharing systems, the riders use a special card to pay for the bike. Public bike sharing systems are popular in Europe, but (11) they are also becoming popular in Asia. In fact, the biggest bike sharing system is in the city of Hangzhou, in China. There are over 84,000 bicycles and over 3,000 stations!

                    Cities don't have bike sharing systems to make money, but the city benefits because there are fewer cars on the roads, less noise and less pollution. Public bike sharing systems are also becoming very popular with tourists.

                    Local people are happy because a shared bike is cheaper than using a car, it is good for the environment and it is good exercise. With over 500 bike sharing systems in the world today it looks like they are here to stay.",
                    'questions' => [
                        0 => [
                            'question' => 'What was one of the problems with the first bike sharing system?',
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'D' => 'answer 2',
                            'correct' => 'A'
                        ],
                        1 => [
                            'question' => 'What was one of the problems with the first bike sharing system?',
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'D' => 'answer 2',
                            'correct' => 'A'
                        ],
                        2 => [
                            'question' => 'What was one of the problems with the first bike sharing system?',
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'D' => 'answer 2',
                            'correct' => 'A'
                        ],
                    ],
                ],
            ],
            'writing' => [
                0 => [
                    'question' => 'Read part of an email you have received from an English-speaking friend. Write an email answering your friend’s questions.',
                    'desc' => 'In your next email, please tell me about your favourite kind of music or favourite singers or group. What type of music do they play? Why do you like them?',
                    'required' => "Write 75–100 words.",
                    'content' => ''
                ],
                1 => [
                    'question' => 'Read part of an email you have received from an English-speaking friend. Write an email answering your friend’s questions.',
                    'desc' => 'In your next email, please tell me about your favourite kind of music or favourite singers or group. What type of music do they play? Why do you like them?',
                    'required' => "Write 75–100 words.",
                    'content' => ''
                ],
                2 => [
                    'question' => 'Read part of an email you have received from an English-speaking friend. Write an email answering your friend’s questions.',
                    'desc' => 'In your next email, please tell me about your favourite kind of music or favourite singers or group. What type of music do they play? Why do you like them?',
                    'required' => "Write 75–100 words.",
                    'content' => ''
                ],
                3 => [
                    'question' => 'Read part of an email you have received from an English-speaking friend. Write an email answering your friend’s questions.',
                    'desc' => 'In your next email, please tell me about your favourite kind of music or favourite singers or group. What type of music do they play? Why do you like them?',
                    'required' => "Write 75–100 words.",
                    'content' => ''
                ],
                4 => [
                    'question' => 'Read part of an email you have received from an English-speaking friend. Write an email answering your friend’s questions.',
                    'desc' => 'In your next email, please tell me about your favourite kind of music or favourite singers or group. What type of music do they play? Why do you like them?',
                    'required' => "Write 75–100 words.",
                    'content' => ''
                ],
                5 => [
                    'question' => 'Read part of an email you have received from an English-speaking friend. Write an email answering your friend’s questions.',
                    'desc' => 'In your next email, please tell me about your favourite kind of music or favourite singers or group. What type of music do they play? Why do you like them?',
                    'required' => "Write 75–100 words.",
                    'content' => ''
                ],
            ],
            'point' => 100
        ];

        $perPage = 6;
        $listeningQuestions  = array_chunk($quiz['listening'], $perPage);
        $grammarQuestions = array_chunk($quiz['grammar'], $perPage);
        $readingQuestions = array_chunk($quiz['reading'], $perPage);
        $writingQuestions = array_chunk($quiz['writing'], $perPage);

        $totalPages = count($listeningQuestions) + count($grammarQuestions) + count($readingQuestions) + count($writingQuestions);
        $page = max(1, min($request->input('page', 1), $totalPages));
        
        $questionsMerged = array_merge($quiz['listening'], $quiz['grammar'], $quiz['reading'], $quiz['writing']);
        $questions = array_chunk($questionsMerged, $perPage);


        $data = [
            'questions' => $questions[$page - 1] ?? [],
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


        return view('pages.quiz-toeic', compact('questionsMerged', 'data', 'id'));
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
