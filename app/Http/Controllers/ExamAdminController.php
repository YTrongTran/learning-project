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
        $examID = $request->input('exam-id', '');
        if( !empty($examID) ){
            return $this->update( $request, $examID );
        }

        try {
            $examTitle = $request->input('exam-title', '');
            $examType = $request->input('exam-type', '');
            $examDuration = $request->input('exam-duration', 45);
            $examPoint = $request->input('exam-point', 50);
            $examVisible = $request->input('exam-visible', false);

            $questions = $request->input('questions', []);

            if( !empty( $questions[$examType] ) ){
                $questions = $questions[$examType];
            }

            if( empty($questions) ){
                return response()->json(['message' => 'Chưa đủ dữ liệu!', 'success' => false ], 200);
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
                    'passage' => empty($question['passage'])? '':$question['passage'],
                    'answer_correct' => empty($question['correct']) ? 1:$question['correct'],
                    'answer_1' => empty($question['answers'][0])? '':$question['answers'][0],
                    'answer_2' => empty($question['answers'][1])? '':$question['answers'][1],
                    'answer_3' => empty($question['answers'][2])? '':$question['answers'][2],
                    'answer_4' => empty($question['answers'][3])? '':$question['answers'][3],
                    'image' =>  empty($question['image']) ? '' : $question['image'],
                    'audio' => empty($question['sound'])? '' : $question['sound'],
                    'exam_id' => $exam_id
                ]);
            }

            return response()->json(['message' => 'Đã thêm đề thi!', 'success' => true],200);
        } catch (\Exception $e) {
            // Log::error('error: ' . $e->getMessage() . "\n" . $e->getTraceAsString());

            return response()->json(['message' => "Có lỗi xảy ra khi lưu dữ liệu." . $e->getMessage(), 'success' => false ], 200);
        }
    }

    public function update(Request $request,String $examID){
        try {
            $exam = Exam::findOrFail($examID);

            $examTitle = $request->input('exam-title', '');
            $examType = $request->input('exam-type', '');
            $examDuration = $request->input('exam-duration', 45);
            $examPoint = $request->input('exam-point', 50);
            $examVisible = $request->input('exam-visible', false);

            $questions = $request->input('questions', []);

            if( !empty( $questions[$examType] ) ){
                $questions = $questions[$examType];
            }

            if( empty($questions) ){
                return response()->json(['message' => 'Chưa đủ dữ liệu!' , 'success' => false], 200);
            }

            $exam->update([
                'title' => $examTitle,
                'type' => $examType,
                'duration' => $examDuration,
                'point' => $examPoint,
                'visible' => empty($examVisible) ? 0 : 1
            ]);

            foreach( $exam->questions as $question){
                $question->update([
                    'question_text' => $questions[$question->_index]['text'],
                    'answer_correct' => $questions[$question->_index]['correct'],
                    'answer_1' => $questions[$question->_index]['answers'][0],
                    'answer_2' => $questions[$question->_index]['answers'][1],
                    'answer_3' => $questions[$question->_index]['answers'][2],
                    'answer_4' => $questions[$question->_index]['answers'][3],
                    'image' => $questions[$question->_index]['image'],
                    'audio' => $questions[$question->_index]['sound'],
                ]);
            }

            // foreach( $questions as $key => $question ){
            //     $questionDB = Question::where('id', $examID)
            //         ->where('group_id', auth()->user()->group_id)
            //         ->first();
            // }

            return response()->json(['message' => 'Đã cập nhật đề thi!', 'success' => true]);
        } catch (\Exception $e) {
            // Log::error('error: ' . $e->getMessage() . "\n" . $e->getTraceAsString());

            return response()->json(['message' => "Có lỗi xảy ra khi lưu dữ liệu." . $e->getMessage(), 'success' => false ], 200);
        }
    }
}
