<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Question;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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

        $tests = [
            ['id' => 1],
            ['id' => 2],
            ['id' => 3],
            ['id' => 10],
        ];

        return view('pages.quiz_step_3')->with([
            'tests' => $tests,
            'level' => $level,
            'level_text' => $levelText
        ]);
    }

    public function superkids(Request $request, $id)
    {
        $quiz = [
            "test_id" => 1,
            'type' => "superkids",
            "title" => "TEST KIDS 1",
            "desc" => "Official test kids from 2023",
            'questions' => [
                [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => 'I ……………. got a computer but I’ve got a tablet.',
                    'img' => asset('assets/img/Listening.png'),
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'correct' => 'A'
                ],


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
                'html' => view('components.quiz-question-component', [
                    'type' => $quiz['type'],
                    'questions' => $data['questions'],
                    'currentPage' => $data['currentPage']
                ])->render(),
                'totalPages' => $data['totalPages'],
                'currentPage' => $data['currentPage'],
            ]);
        }

        return view('pages.quiz-questions', compact('quiz', 'data', 'id'));
    }

    public function communicate(Request $request, $id)
    {
        $quiz = [
            "test_id" => 1,
            'title' => "COMMUNICATE 1",
            'type' => "communicate",
            "desc" => "Official COMMUNICATE test from 2023",
            'questions' => [
                [
                    'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                    <strong>Assistant:</strong> Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                    <strong>Assistant:</strong> Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                    <strong>Assistant:</strong> Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                    <strong>Assistant:</strong> Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                    <strong>Assistant:</strong> Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                    <strong>Assistant:</strong> Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                    <strong>Assistant:</strong> Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                    <strong>Assistant:</strong> Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                    <strong>Assistant:</strong> Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                    <strong>Assistant:</strong> Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                    <strong>Assistant:</strong> Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                    <strong>Assistant:</strong> Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],
                [
                    'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                    <strong>Assistant:</strong> Oh, he’s _______ London today.',
                    'A' => 'answer 1',
                    'B' => 'answer 2',
                    'C' => 'answer 2',
                    'D' => 'answer 2',
                    'correct' => 'A'
                ],

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
                'html' => view('components.quiz-question-component', [
                    'type' => $quiz['type'],
                    'questions' => $data['questions'],
                    'currentPage' => $data['currentPage']
                ])->render(),
                'totalPages' => $data['totalPages'],
                'currentPage' => $data['currentPage'],
            ]);
        }

        return view('pages.quiz-questions', compact('quiz', 'data', 'id'));
    }

    public function teen(Request $request, $id)
    {
        $quiz = [
            "test_id" => 1,
            'title' => "TEST TEEN 1",
            "type" => "teen",
            "description" => "Official test teen from 2023",
            'parts' =>
            [
                [
                    'part' => 1,
                    'description' => "Grammar",
                    'questions' =>
                    [
                        [
                            'question_id' => 1,
                            'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                            <strong>Assistant:</strong> Oh, he’s _______ London today.',
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'D' => 'answer 2',
                            'correct' => 'A'
                        ],
                        [
                            'question_id' => 2,
                            'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                            <strong>Assistant:</strong> Oh, he’s _______ London today.',
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'D' => 'answer 2',
                            'correct' => 'A'
                        ],
                        [
                            'question_id' => 3,
                            'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                            <strong>Assistant:</strong> Oh, he’s _______ London today.',
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'D' => 'answer 2',
                            'correct' => 'A'
                        ],
                        [
                            'question_id' => 4,
                            'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                            <strong>Assistant:</strong> Oh, he’s _______ London today.',
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'D' => 'answer 2',
                            'correct' => 'A'
                        ],
                        [
                            'question_id' => 5,
                            'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                            <strong>Assistant:</strong> Oh, he’s _______ London today.',
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'D' => 'answer 2',
                            'correct' => 'A'
                        ],
                        [
                            'question_id' => 6,
                            'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                            <strong>Assistant:</strong> Oh, he’s _______ London today.',
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'D' => 'answer 2',
                            'correct' => 'A'
                        ],
                        [
                            'question_id' => 7,
                            'question' => 'I ……………. got a computer but I’ve got a tablet.',
                            'img' => asset('assets/img/Listening.png'),
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'correct' => 'A'
                        ],
                        [
                            'question_id' => 8,
                            'question' => 'I ……………. got a computer but I’ve got a tablet.',
                            'img' => asset('assets/img/Listening.png'),
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'correct' => 'A'
                        ],
                        [
                            'question_id' => 9,
                            'question' => 'I ……………. got a computer but I’ve got a tablet.',
                            'img' => asset('assets/img/Listening.png'),
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'correct' => 'A'
                        ],
                        [
                            'question_id' => 10,
                            'question' => 'I ……………. got a computer but I’ve got a tablet.',
                            'img' => asset('assets/img/Listening.png'),
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'correct' => 'A'
                        ],
                        [
                            'question_id' => 11,
                            'question' => 'I ……………. got a computer but I’ve got a tablet.',
                            'img' => asset('assets/img/Listening.png'),
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'correct' => 'A'
                        ],
                        [
                            'question_id' => 12,
                            'question' => 'I ……………. got a computer but I’ve got a tablet.',
                            'img' => asset('assets/img/Listening.png'),
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'correct' => 'A'
                        ],
                        [
                            'question_id' => 13,
                            'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                            <strong>Assistant:</strong> Oh, he’s _______ London today.',
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'D' => 'answer 2',
                            'correct' => 'A'
                        ],
                        [
                            'question_id' => 14,
                            'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                            <strong>Assistant:</strong> Oh, he’s _______ London today.',
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'D' => 'answer 2',
                            'correct' => 'A'
                        ],
                        [
                            'question_id' => 15,
                            'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                            <strong>Assistant:</strong> Oh, he’s _______ London today.',
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'D' => 'answer 2',
                            'correct' => 'A'
                        ],
                        [
                            'question_id' => 16,
                            'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                            <strong>Assistant:</strong> Oh, he’s _______ London today.',
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'D' => 'answer 2',
                            'correct' => 'A'
                        ],
                        [
                            'question_id' => 17,
                            'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                            <strong>Assistant:</strong> Oh, he’s _______ London today.',
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'D' => 'answer 2',
                            'correct' => 'A'
                        ],
                        [
                            'question_id' => 18,
                            'question' => '<strong>Manager:</strong> Where’s Mr. Davidson?</br>
                                            <strong>Assistant:</strong> Oh, he’s _______ London today.',
                            'A' => 'answer 1',
                            'B' => 'answer 2',
                            'C' => 'answer 2',
                            'D' => 'answer 2',
                            'correct' => 'A'
                        ],
                    ]
                ],
                [
                    "part" => 2,
                    "description" => "Reading",
                    "passages" => [
                        [
                            "passage_id" => 1,
                            'title' => "Read the text below. For questions 61–65, choose the best answer (A, B or C).",
                            'heading' => "The Rise of Urban Agriculture",
                            "text" => "Urban agriculture has gained significant traction over the last two decades, transforming how cities think about food production. Initially viewed as a niche activity for hobbyists, urban farming now plays a pivotal role in creating sustainable cities. With the world's population continuing to grow and urbanize, cities are under increasing pressure to produce food locally to minimize the environmental and economic costs of transportation. Urban agriculture can take many forms, from rooftop gardens in dense metropolitan areas to vertical farming systems in vacant warehouses. The central aim is to bring food production closer to consumers, thereby reducing the carbon footprint associated with the food supply chain.\n
                            In a typical urban farming setup, land that would otherwise be left vacant or underutilized is converted into green spaces. The potential for this type of agriculture to flourish is tied to the availability of empty lots, as well as the willingness of local governments to support such ventures through favorable policies or incentives. Indeed, many cities are incorporating urban farming into their planning strategies, with some even offering tax breaks to businesses that implement green roofs or invest in hydroponic farming.\n
                            However, the success of urban farming is not without its challenges. One of the major obstacles is securing land. In many urban areas, vacant lots are often owned by private investors or are designated for future commercial or residential development. While some advocates argue that unused or poorly maintained land should be repurposed for farming, others contend that such spaces should remain available for future construction, particularly in fast-growing cities.\n
                            Moreover, the financial sustainability of urban farms remains a topic of debate. While small-scale urban farming can be relatively inexpensive, the high initial costs associated with installing specialized infrastructure—such as irrigation systems, greenhouses, and vertical farming equipment—can be prohibitive. Additionally, urban farms often face logistical difficulties, such as a lack of access to affordable resources like water or quality soil, and issues related to the complexity of obtaining permits.\n
                            Despite these challenges, urban agriculture has brought tangible benefits to cities. It fosters community engagement, reduces food insecurity, and can serve as an educational tool for urban dwellers. In some places, urban farms have provided affordable fresh produce to low-income communities, which previously had limited access to healthy food options. They have also helped to raise awareness about the environmental impact of conventional agricultural practices, encouraging a shift toward more sustainable food production methods.\n
                            The long-term success of urban agriculture will depend on a combination of factors, including technological innovation, governmental support, and public interest. Advances in hydroponics, for example, offer a promising future for urban farming, as they allow for more efficient use of space and resources. At the same time, it will be crucial for urban agriculture projects to balance environmental benefits with economic realities, ensuring that they remain financially viable in the long run.
                            ",
                            "questions" => [
                                [
                                    "question_id" => 19,
                                    "question" => "What is the main aim of urban agriculture?",
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
                                    ],
                                    "correct_answer" => "A"
                                ],
                                [
                                    "question_id" => 20,
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
                                    ],
                                    "correct_answer" => "A"
                                ],
                                [
                                    "question_id" => 21,
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
                                    ],
                                    "correct_answer" => "A"
                                ],
                                [
                                    "question_id" => 22,
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
                                    ],
                                    "correct_answer" => "A"
                                ],
                                [
                                    "question_id" => 23,
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
                                    ],
                                    "correct_answer" => "A"
                                ],
                            ]
                        ],
                        [
                            "passage_id" => 2,
                            'title' => "Read the text below. For questions 66–70, choose the best answer (A, B or C).",
                            'heading' => "The Rise of Urban Agriculture",
                            "text" => "Urban agriculture has gained significant traction over the last two decades, transforming how cities think about food production. Initially viewed as a niche activity for hobbyists, urban farming now plays a pivotal role in creating sustainable cities. With the world's population continuing to grow and urbanize, cities are under increasing pressure to produce food locally to minimize the environmental and economic costs of transportation. Urban agriculture can take many forms, from rooftop gardens in dense metropolitan areas to vertical farming systems in vacant warehouses. The central aim is to bring food production closer to consumers, thereby reducing the carbon footprint associated with the food supply chain.\n
                            In a typical urban farming setup, land that would otherwise be left vacant or underutilized is converted into green spaces. The potential for this type of agriculture to flourish is tied to the availability of empty lots, as well as the willingness of local governments to support such ventures through favorable policies or incentives. Indeed, many cities are incorporating urban farming into their planning strategies, with some even offering tax breaks to businesses that implement green roofs or invest in hydroponic farming.\n
                            However, the success of urban farming is not without its challenges. One of the major obstacles is securing land. In many urban areas, vacant lots are often owned by private investors or are designated for future commercial or residential development. While some advocates argue that unused or poorly maintained land should be repurposed for farming, others contend that such spaces should remain available for future construction, particularly in fast-growing cities.\n
                            Moreover, the financial sustainability of urban farms remains a topic of debate. While small-scale urban farming can be relatively inexpensive, the high initial costs associated with installing specialized infrastructure—such as irrigation systems, greenhouses, and vertical farming equipment—can be prohibitive. Additionally, urban farms often face logistical difficulties, such as a lack of access to affordable resources like water or quality soil, and issues related to the complexity of obtaining permits.\n
                            Despite these challenges, urban agriculture has brought tangible benefits to cities. It fosters community engagement, reduces food insecurity, and can serve as an educational tool for urban dwellers. In some places, urban farms have provided affordable fresh produce to low-income communities, which previously had limited access to healthy food options. They have also helped to raise awareness about the environmental impact of conventional agricultural practices, encouraging a shift toward more sustainable food production methods.\n
                            The long-term success of urban agriculture will depend on a combination of factors, including technological innovation, governmental support, and public interest. Advances in hydroponics, for example, offer a promising future for urban farming, as they allow for more efficient use of space and resources. At the same time, it will be crucial for urban agriculture projects to balance environmental benefits with economic realities, ensuring that they remain financially viable in the long run.
                            ",
                            "questions" => [
                                [
                                    "question_id" => 24,
                                    "question" => "What is the main aim of urban agriculture?",
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
                                    ],
                                    "correct_answer" => "A"
                                ],
                                [
                                    "question_id" => 25,
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
                                    ],
                                    "correct_answer" => "A"
                                ],
                                [
                                    "question_id" => 26,
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
                                    ],
                                    "correct_answer" => "A"
                                ],
                                [
                                    "question_id" => 27,
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
                                    ],
                                    "correct_answer" => "A"
                                ],
                                [
                                    "question_id" => 28,
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
                                    ],
                                    "correct_answer" => "A"
                                ],
                            ]
                        ],
                    ]
                ],
                [
                    "part" => 3,
                    "description" => "Writing",
                    'title' => "Read part of an email you have received from an English-speaking friend. Write an email answering your friend’s questions.",
                    "question" => "Some people believe that the most important function of music is to help people relax, while others think that it serves a more meaningful purpose. Discuss both views and give your own opinion.\nGive reasons for your answer and include any relevant examples from your own knowledge or experience.",
                    "at_least_words" => 150,
                ],
            ],
            'point' => 100
        ];

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
                'html' => view('components.quiz-toeic-question-component', [
                    'type' => $quiz['type'],
                    'questions' => $data['questions'],
                    'currentPage' => $data['currentPage']
                ])->render(),
                'totalPages' => $data['totalPages'],
                'currentPage' => $data['currentPage'],
            ]);
        }


        return view('pages.quiz-toeic', compact('quiz', 'data', 'id'));
    }

    public function toeic(Request $request, $id)
    {
        $quiz = [
            "test_id" => 1,
            "type" => "toeic",
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
                            "text" => "Dear Mr. Thompson,\n\nI hope this message finds you well. I am writing to inform you that the shipment of your order has been delayed due to unexpected customs clearance procedures. Our team is working hard to resolve the issue, and we expect the shipment to arrive within the next 5 business days. We apologize for any inconvenience this may cause and assure you that we are doing everything we can to expedite the process.\nPlease feel free to contact us with any further questions.\n\nBest Regards,\nSusan Park\nCustomer Service Manager",
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
                            "text" => "Dear Mr. Thompson,\n\nI hope this message finds you well. I am writing to inform you that the shipment of your order has been delayed due to unexpected customs clearance procedures. Our team is working hard to resolve the issue, and we expect the shipment to arrive within the next 5 business days. We apologize for any inconvenience this may cause and assure you that we are doing everything we can to expedite the process.\nPlease feel free to contact us with any further questions.\n\nBest Regards,\nSusan Park\nCustomer Service Manager",
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

        Session::put('correct_answers_toeic', $correct_answers);

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
                'html' => view('components.quiz-toeic-question-component', [
                    'type' => $quiz['type'],
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
        $correct_answers = Session::get('correct_answers_toeic', []);

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
    public function quizIelts(Request $request, $id)
    {
        $quiz = [
            "test_id" => 1,
            "title" => "IELTS 1",
            "description" => "Official IELTS test from 2023",
            "parts" => [
                [
                    "part" => 1,
                    "description" => "Listening ",
                    "audio_url" => asset('assets/audio/NES_IELTS_Listening_for_Entrance_Test_Section_1.mp3'),
                    "contents" => [
                        [
                            "title" => "For questions 1 to 10, complete the notes below with <strong>NO MORE THAN TWO WORDS AND/OR A NUMBER </strong>for each answer.",
                            "subtitle" => "Enrollment details:",
                            "questions" => [
                                [
                                    "question_id" => 1,
                                    "question" => "Program name: Master's Program in (1) _________",
                                    "correct_answer" => "text"
                                ],
                                [
                                    "question_id" => 2,
                                    "question" => "Program duration: (2) _________ years",
                                    "correct_answer" => "text"
                                ],
                                [
                                    "question_id" => 3,
                                    "question" => "Program start date: (3) _________",
                                    "correct_answer" => "text"
                                ],
                                [
                                    "question_id" => 4,
                                    "question" => "Application deadline: (4) _________",
                                    "correct_answer" => "text"
                                ],
                                [
                                    "question_id" => 5,
                                    "question" => "Application requirements: (5) _________",
                                    "correct_answer" => "text"
                                ],
                                [
                                    "question_id" => 6,
                                    "question" => "Application fee: (6) _________",
                                    "correct_answer" => "text"
                                ],
                            ],
                        ],
                        [
                            "title" => "",
                            "subtitle" => "Course structure:",
                            "questions" => [
                                [
                                    "question_id" => 7,
                                    "question" => "Application deadline: (7) _________",
                                    "correct_answer" => "text"
                                ],
                                [
                                    "question_id" => 8,
                                    "question" => "Application requirements: (8) _________",
                                    "correct_answer" => "text"
                                ],
                                [
                                    "question_id" => 9,
                                    "question" => "Application fee: (9) _________",
                                    "correct_answer" => "text"
                                ],
                                [
                                    "question_id" => 10,
                                    "question" => "Program start date: (10) _________",
                                    "correct_answer" => "text"
                                ],
                            ]
                        ],
                        [
                            "title" => "For questions 11 to 13, choose the correct answer, A, B, or C.",
                            "subtitle" => "",
                            "questions" => [
                                [
                                    "question_id" => 11,
                                    'question' => 'What is the deadline for submitting applications?',
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
                                    ],
                                    "correct_answer" => "B"
                                ],
                                [
                                    "question_id" => 12,
                                    'question' => 'What is the deadline for submitting applications?',
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
                                    ],
                                    "correct_answer" => "B"
                                ],
                                [
                                    "question_id" => 13,
                                    'question' => 'What is the deadline for submitting applications?',
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
                                    ],
                                    "correct_answer" => "B"
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    "part" => 2,
                    "description" => "Listening Section 2",
                    "audio_url" => asset('assets/audio/NES_IELTS_Listening_for_Entrance_Test_Section_2.mp3'),
                    "contents" => [
                        [
                            "title" => "For questions 14 to 19, choose the correct answer, A, B, or C.",
                            "subtitle" => "",
                            "questions" => [
                                [
                                    "question_id" => 14,
                                    'question' => 'What recent environmental change has the university made to its energy infrastructure?',
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
                                    ],
                                    "correct_answer" => "B"
                                ],
                                [
                                    "question_id" => 15,
                                    'question' => 'What recent environmental change has the university made to its energy infrastructure?',
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
                                    ],
                                    "correct_answer" => "B"
                                ],
                                [
                                    "question_id" => 16,
                                    'question' => 'What recent environmental change has the university made to its energy infrastructure?',
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
                                    ],
                                    "correct_answer" => "B"
                                ],
                                [
                                    "question_id" => 17,
                                    'question' => 'What recent environmental change has the university made to its energy infrastructure?',
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
                                    ],
                                    "correct_answer" => "B"
                                ],
                                [
                                    "question_id" => 18,
                                    'question' => 'What recent environmental change has the university made to its energy infrastructure?',
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
                                    ],
                                    "correct_answer" => "B"
                                ],
                                [
                                    "question_id" => 19,
                                    'question' => 'What recent environmental change has the university made to its energy infrastructure?',
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
                                    ],
                                    "correct_answer" => "B"
                                ],

                            ],
                        ],
                        [
                            "title" => "For questions 20 to 21, complete the setences below with NO MORE THAN TWO WORDS for each answer.",
                            "subtitle" => "",
                            "questions" => [
                                [
                                    "question_id" => 20,
                                    "question" => "Students can participate in the _________ program to receive guidance on eco-friendly research projects. ",
                                    "correct_answer" => "text"
                                ],
                                [
                                    "question_id" => 21,
                                    "question" => "The university has set a target to become a _________ campus by 2030.",
                                    "correct_answer" => "text"
                                ],
                            ]
                        ]
                    ],
                ],
                [
                    "part" => 3,
                    "description" => "Reading",
                    "passages" => [
                        [
                            "passage_id" => 1,
                            'heading' => "The Rise of Urban Agriculture",
                            "text" => "Urban agriculture has gained significant traction over the last two decades, transforming how cities think about food production. Initially viewed as a niche activity for hobbyists, urban farming now plays a pivotal role in creating sustainable cities. With the world's population continuing to grow and urbanize, cities are under increasing pressure to produce food locally to minimize the environmental and economic costs of transportation. Urban agriculture can take many forms, from rooftop gardens in dense metropolitan areas to vertical farming systems in vacant warehouses. The central aim is to bring food production closer to consumers, thereby reducing the carbon footprint associated with the food supply chain.\n
                            In a typical urban farming setup, land that would otherwise be left vacant or underutilized is converted into green spaces. The potential for this type of agriculture to flourish is tied to the availability of empty lots, as well as the willingness of local governments to support such ventures through favorable policies or incentives. Indeed, many cities are incorporating urban farming into their planning strategies, with some even offering tax breaks to businesses that implement green roofs or invest in hydroponic farming.\n
                            However, the success of urban farming is not without its challenges. One of the major obstacles is securing land. In many urban areas, vacant lots are often owned by private investors or are designated for future commercial or residential development. While some advocates argue that unused or poorly maintained land should be repurposed for farming, others contend that such spaces should remain available for future construction, particularly in fast-growing cities.\n
                            Moreover, the financial sustainability of urban farms remains a topic of debate. While small-scale urban farming can be relatively inexpensive, the high initial costs associated with installing specialized infrastructure—such as irrigation systems, greenhouses, and vertical farming equipment—can be prohibitive. Additionally, urban farms often face logistical difficulties, such as a lack of access to affordable resources like water or quality soil, and issues related to the complexity of obtaining permits.\n
                            Despite these challenges, urban agriculture has brought tangible benefits to cities. It fosters community engagement, reduces food insecurity, and can serve as an educational tool for urban dwellers. In some places, urban farms have provided affordable fresh produce to low-income communities, which previously had limited access to healthy food options. They have also helped to raise awareness about the environmental impact of conventional agricultural practices, encouraging a shift toward more sustainable food production methods.\n
                            The long-term success of urban agriculture will depend on a combination of factors, including technological innovation, governmental support, and public interest. Advances in hydroponics, for example, offer a promising future for urban farming, as they allow for more efficient use of space and resources. At the same time, it will be crucial for urban agriculture projects to balance environmental benefits with economic realities, ensuring that they remain financially viable in the long run.
                            ",
                            "questions" => [
                                [
                                    'title' => "Questions 1-5: Choose the correct answer, A, B, or C.",
                                    'subtitle' => "",
                                    "questionsChild" => [
                                        [
                                            "question_id" => 1,
                                            "question" => "What is the main aim of urban agriculture?",
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
                                            ],
                                            "correct_answer" => "A"
                                        ],
                                        [
                                            "question_id" => 2,
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
                                            ],
                                            "correct_answer" => "A"
                                        ],
                                        [
                                            "question_id" => 3,
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
                                            ],
                                            "correct_answer" => "A"
                                        ],
                                        [
                                            "question_id" => 4,
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
                                            ],
                                            "correct_answer" => "A"
                                        ],
                                        [
                                            "question_id" => 5,
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
                                            ],
                                            "correct_answer" => "A"
                                        ],
                                    ]
                                ],
                                [
                                    'title' => "Questions 6-9: Complete the sentences below.",
                                    'subtitle' => "Choose NO MORE THAN TWO WORDS from the passage for each answer.",
                                    "questionsChild" => [
                                        [
                                            "question_id" => 6,
                                            "question" => "Program name: Master's Program in (6) _________",
                                            "correct_answer" => "text"
                                        ],
                                        [
                                            "question_id" => 7,
                                            "question" => "Program duration: (7) _________ years",
                                            "correct_answer" => "text"
                                        ],
                                        [
                                            "question_id" => 8,
                                            "question" => "Program start date: (8) _________",
                                            "correct_answer" => "text"
                                        ],
                                        [
                                            "question_id" => 9,
                                            "question" => "Application deadline: (9) _________",
                                            "correct_answer" => "text"
                                        ],
                                    ]
                                ],
                                [
                                    'title' => "Questions 10-14: Which section of the passage contains the following information?",
                                    'subtitle' => "Choose the correct letter, A, B, C, or D.",
                                    "questionsChild" => [
                                        [
                                            "question_id" => 10,
                                            'question' => 'What recent environmental change has the university made to its energy infrastructure?',
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
                                                    "description" => "Two people are shaking hands in an office."
                                                ],
                                            ],
                                            "correct_answer" => "B"
                                        ],
                                        [
                                            "question_id" => 11,
                                            'question' => 'What recent environmental change has the university made to its energy infrastructure?',
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
                                                    "description" => "Two people are shaking hands in an office."
                                                ],
                                            ],
                                            "correct_answer" => "B"
                                        ],
                                        [
                                            "question_id" => 12,
                                            'question' => 'What recent environmental change has the university made to its energy infrastructure?',
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
                                                    "description" => "Two people are shaking hands in an office."
                                                ],
                                            ],
                                            "correct_answer" => "B"
                                        ],
                                        [
                                            "question_id" => 13,
                                            'question' => 'What recent environmental change has the university made to its energy infrastructure?',
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
                                                    "description" => "Two people are shaking hands in an office."
                                                ],
                                            ],
                                            "correct_answer" => "B"
                                        ],
                                        [
                                            "question_id" => 14,
                                            'question' => 'What recent environmental change has the university made to its energy infrastructure?',
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
                                                    "description" => "Two people are shaking hands in an office."
                                                ],
                                            ],
                                            "correct_answer" => "B"
                                        ],
                                    ]
                                ],
                                [
                                    'title' => "Questions 15-18: Complete the summary below.",
                                    'subtitle' => "Choose ONE WORD ONLY from the passage for each answer.",
                                    "text" => "Urban farming is an increasingly popular method of food production in cities, with benefits such as reducing environmental impact and improving access to healthy food. However, challenges remain, especially regarding the financial viability and access to suitable land. While some believe that vacant or underutilized land should be repurposed for farming, others argue that this land should be preserved for future ________ (15). Despite these challenges, technological advances such as ________ (16) offer hope for more sustainable urban farms. Additionally, urban agriculture helps to alleviate food ________ (17) in some communities, particularly those with limited access to affordable, fresh produce. Finally, the overall success of urban farming will depend on a balance between ________ (18) concerning the environment and practicality.",
                                    "questionsChild" => [
                                        [
                                            "question_id" => 15,
                                            "question" => "Program name: Master's Program in (6) _________",
                                            "correct_answer" => "text"
                                        ],
                                        [
                                            "question_id" => 16,
                                            "question" => "Program duration: (7) _________ years",
                                            "correct_answer" => "text"
                                        ],
                                        [
                                            "question_id" => 17,
                                            "question" => "Program start date: (8) _________",
                                            "correct_answer" => "text"
                                        ],
                                        [
                                            "question_id" => 18,
                                            "question" => "Application deadline: (9) _________",
                                            "correct_answer" => "text"
                                        ],
                                    ]
                                ],
                                [
                                    'title' => "Questions 19-23: True, False, or Not Given",
                                    'subtitle' => "•	True if the statement agrees with the information in the passage.</br>
                                                    •	False if the statement contradicts the information in the passage.</br>
                                                    •	Not Given if there is no information in the passage.
                                                ",
                                    "questionsChild" => [
                                        [
                                            "question_id" => 19,
                                            'question' => 'The passage suggests that urban farming can only succeed if there is significant government support.',
                                            "options" => [
                                                [
                                                    "option" => "A",
                                                    "description" => "Trua"
                                                ],
                                                [
                                                    "option" => "B",
                                                    "description" => "False"
                                                ],
                                                [
                                                    "option" => "C",
                                                    "description" => "Not Given"
                                                ],
                                            ],
                                            "correct_answer" => "B"
                                        ],
                                        [
                                            "question_id" => 20,
                                            'question' => 'What recent environmental change has the university made to its energy infrastructure?',
                                            "options" => [
                                                [
                                                    "option" => "A",
                                                    "description" => "Trua"
                                                ],
                                                [
                                                    "option" => "B",
                                                    "description" => "False"
                                                ],
                                                [
                                                    "option" => "C",
                                                    "description" => "Not Given"
                                                ],
                                            ],
                                            "correct_answer" => "B"
                                        ],
                                        [
                                            "question_id" => 21,
                                            'question' => 'What recent environmental change has the university made to its energy infrastructure?',
                                            "options" => [
                                                [
                                                    "option" => "A",
                                                    "description" => "Trua"
                                                ],
                                                [
                                                    "option" => "B",
                                                    "description" => "False"
                                                ],
                                                [
                                                    "option" => "C",
                                                    "description" => "Not Given"
                                                ],
                                            ],
                                            "correct_answer" => "B"
                                        ],
                                        [
                                            "question_id" => 22,
                                            'question' => 'What recent environmental change has the university made to its energy infrastructure?',
                                            "options" => [
                                                [
                                                    "option" => "A",
                                                    "description" => "Trua"
                                                ],
                                                [
                                                    "option" => "B",
                                                    "description" => "False"
                                                ],
                                                [
                                                    "option" => "C",
                                                    "description" => "Not Given"
                                                ],
                                            ],
                                            "correct_answer" => "B"
                                        ],
                                        [
                                            "question_id" => 23,
                                            'question' => 'What recent environmental change has the university made to its energy infrastructure?',
                                            "options" => [
                                                [
                                                    "option" => "A",
                                                    "description" => "Trua"
                                                ],
                                                [
                                                    "option" => "B",
                                                    "description" => "False"
                                                ],
                                                [
                                                    "option" => "C",
                                                    "description" => "Not Given"
                                                ],
                                            ],
                                            "correct_answer" => "B"
                                        ],
                                    ]
                                ],
                            ],
                        ],
                    ]
                ],
                [
                    "part" => 4,
                    "description" => "Writing",
                    "question" => "Some people believe that the most important function of music is to help people relax, while others think that it serves a more meaningful purpose. Discuss both views and give your own opinion.\nGive reasons for your answer and include any relevant examples from your own knowledge or experience.",
                    "at_least_words" => 150,
                ],
                [
                    "part" => 5,
                    "description" => "Speaking",
                    "questions" => [
                        [
                            'section' => 1,
                            "title" => "",
                            'question' => [
                                [
                                    "title" => "Topic 1: Home and Hometown",
                                    "content" => [
                                        "What is your hometown like?",
                                        "What do you like about your hometown?",
                                        "What do you dislike about your hometown?",
                                    ]
                                ],
                                [
                                    "title" => "Topic 2: Technology and Social Media",
                                    "content" => [
                                        "What is your hometown like?",
                                        "What do you like about your hometown?",
                                        "What do you dislike about your hometown?",
                                    ]
                                ],
                            ],
                        ],
                        [
                            'section' => 2,
                            "title" => "Describe an important event in your life. You should say:",
                            "question" => [
                                "What is your hometown like?",
                                "What do you like about your hometown?",
                                "What do you dislike about your hometown?",
                            ]
                        ],
                        [
                            'section' => 3,
                            "title" => "",
                            "question" => [
                                "Do you think people tend to remember positive events more than negative ones? Why?",
                                "Do you think the way we perceive events changes as we get older?",
                            ]
                        ]
                    ]
                ]
            ]
        ];

        $correct_answers = [];

        foreach ($quiz["parts"] as $part) {
            if (isset($part["contents"])) {
                foreach ($part["contents"] as $content) {
                    foreach ($content["questions"] as $question) {
                        $correct_answers["listening"][] = $question["correct_answer"];
                    }
                }
            } elseif (isset($part["passages"])) {
                foreach ($part["passages"] as $passage) {
                    foreach ($passage["questions"] as $question) {
                        foreach ($question["questionsChild"] as $questionChild) {
                            $correct_answers["reading"][] = $questionChild["correct_answer"];
                        }
                    }
                }
            }
        }
        Session::put('correct_answers_ielts', $correct_answers);

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
                'html' => view('components.quiz-ielts-question-component', [
                    'questions' => $data['questions'],
                    'currentPage' => $data['currentPage']
                ])->render(),
                'totalPages' => $data['totalPages'],
                'currentPage' => $data['currentPage'],
            ]);
        }

        return view('pages.quiz-ielts', compact('quiz', 'data', 'id'));
    }

    public function submitQuizIelts(Request $request)
    {
        $correct_answers = Session::get('correct_answers_ielts', []);

        $user_answers = $request->input('answers', []);
        $user_answer_writing = $request->input('answerWriting', []); // user answer for writing part
        if (!empty($request->input('audio_data'))) {
            $audioData = $request->input('audio_data', []); // audio data
            $audioData = str_replace('data:audio/wav;base64,', '', $audioData);
            $audioData = base64_decode($audioData);
            $filename = 'recording_' . time() . '.wav';
            $filePath = 'public/audio/' . $filename;

            // Save file into storage
            Storage::put($filePath, $audioData);
        }

        $currentDateTime = Carbon::now()->format('d-m-Y H:i:s');
        $correctCountReading = 0;
        $correctCountListening = 0;
        foreach ($user_answers as $page => $questions) {
            $type = ($page == "3") ? "reading" : "listening";

            if (!is_array($questions)) {
                continue;
            }
            foreach ($questions as $question_id => $answer) {
                if (isset($correct_answers[$type][$question_id - 1]) && $correct_answers[$type][$question_id - 1] == $answer) {
                    $type === "reading" ? $correctCountReading++ : $correctCountListening++;
                }
            }
        }

        $listeningScore = $this->calculateIELTSScore($correctCountListening, "listening");
        $readingScore = $this->calculateIELTSScore($correctCountReading, "reading");

        return response()->json([
            'correctCountReading' => $correctCountReading,
            'correctCountListening' => $correctCountListening,
            'listeningScore' => $listeningScore,
            'readingScore' => $readingScore,
            'submitted_at' => $currentDateTime,
        ]);
    }

    private function calculateIELTSScore($correctCount, $type)
    {
        $scoreMappings = [
            "listening" => [
                [20, 21, 6.0],
                [16, 19, 5.5],
                [13, 15, 5.0],
                [10, 12, 4.5],
                [7, 9, 4.0],
                [5, 6, 3.5],
                [3, 4, 3.0]
            ],
            "reading" => [
                [21, 23, 6.0],
                [17, 20, 5.5],
                [14, 16, 5.0],
                [11, 13, 4.5],
                [8, 10, 4.0],
                [6, 9, 3.5],
                [3, 5, 3.0]
            ]
        ];

        foreach ($scoreMappings[$type] as [$min, $max, $score]) {
            if ($correctCount >= $min && $correctCount <= $max) {
                return $score;
            }
        }
        return 0;
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
