<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Exam;
use App\Models\Question;

class ExamAdminController extends Controller
{
    public function index(Request $request){

    }

    public function store(Request $request)
    {
        try {
            $examTitle = $request->input('exam-title', '');
            $examType = $request->input('exam-type', '');
            $examDuration = $request->input('exam-duration', 45);
            $examPoint = $request->input('exam-point', 50);
            $examVisible = $request->input('exam-visible', false);

            $questions = $request->input('questions', []);

            if( $examType == "superkid"){
                $questions = $questions['kid'];
            // }elseif( $examType == "toeic"){
            //     $questions = $questions['toeic'];
            }else{
                $questions = [];
            }

            if( empty($questions) ){
                return response()->json(['message' => 'Chưa đủ dữ liệu!'], 200);
            }

            $exam = Exam::Create([
                'title' => $examTitle,
                'type' => $examType,
                'duration' => $examDuration,
                'point' => $examPoint,
                'visible' => empty($examVisible) ? 0 : 1
            ]);

            $exam_id = $exam->id;

            foreach( $questions as $key => $question ){
                Question::create([
                    '_index' => $key,
                    'question_text' => $question['text'],
                    'answer_correct' => $question['correct'],
                    'answer_1' => $question['answers'][0],
                    'answer_2' => $question['answers'][1],
                    'answer_3' => $question['answers'][2],
                    'answer_4' => $question['answers'][3],
                    'exam_id' => $exam_id
                ]);
            }

            return response()->json(['message' => 'Khoog !', 'data' => $questions]);
        } catch (\Exception $e) {
            // Log::error('error: ' . $e->getMessage() . "\n" . $e->getTraceAsString());

            return response()->json(['message' => "Có lỗi xảy ra khi lưu dữ liệu." . $e->getMessage()], 500);
        }
    }
}
