<?php

namespace App\Http\Controllers\Quiz;

use App\Http\Controllers\Controller;
use App\Models\Customs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizAjaxController extends Controller
{
    /**
     * call function: call ajax submit submitQuizEnglishHub
     */
    function submitQuizSuperkids(Request $request){
        if ($request->ajax()) {

            $timeBeign = now()->setTimezone('Asia/Ho_Chi_Minh')->format('l, j F Y, g:i A');
            $exam_id = $request->exam_id;
            $customsId = $request->customsId;

            $getExam = DB::table('exams')->where('id',$exam_id)->get();
            foreach($getExam as $key => $value){
                $point = $value->point;
                $level = $value->type;
            }
            //get id exam_id theo customs để kiểm tra số lần làm bài kiểm tra

            $checkCustomExam = DB::table('customs')->where('id_exams', $exam_id)->get();
            $countLimit = count($checkCustomExam);

            // Lấy danh sách câu hỏi và đáp án đúng từ DB (dạng [id => answer_correct])
            $questions = DB::table('questions')
                ->where('exam_id', $exam_id)
                ->pluck('answer_correct', 'id');

            //tổng câu hỏi
            $size = count($questions);
            // Chuyển số thành chữ cái đáp án
            $answer_map = [
                1 => 'A',
                2 => 'B',
                3 => 'C',
                4 => 'D'
            ];
            
            // Lấy danh sách câu trả lời từ request
            $questionIds_raw = empty($request->questionIds) ? []: $request->questionIds; // [0 => "1-B",1 => "2-B",...]

            $questionIds = [];
            foreach ($questionIds_raw as $item) {
                $parts = explode('-', $item); // Tách "1-B" thành ['1', 'B']
                if (count($parts) === 2) {
                    $questionIds[(int)$parts[0]] = trim($parts[1]); // kết quả khi tách là [1 => 'B',...]
                }
            }
        
            // Biến lưu kết quả
            $correctCount = 0; // Số câu trả lời đúng (bắt đầu từ 0)
            $wrongAnswers = []; // Danh sách câu sai
        
            // Lặp qua từng câu trả lời của người dùng
            foreach ($questionIds as $question_id => $user_answer) {
                if (isset($questions[$question_id])) {
                    $correct_answer = $answer_map[$questions[$question_id]]; // Chuyển đổi số sang chữ
                    $user_answer = trim($user_answer); // Đảm bảo không có khoảng trắng dư thừa
        
                    if ($user_answer === $correct_answer) { 
                        $correctCount++; 
                    } else {
                        $wrongAnswers[$question_id] = [
                            'user_answer' => $user_answer, //đáp án từ người chọn
                            'correct_answer' => $correct_answer //đáp án đúng từ db
                        ];
                    }
                }
            }

           //update table customs
            $customs =Customs::findOrFail($customsId);
            $customs->correct_answer =  $correctCount;
            $customs->total_question  = $size;
            $customs->total_score = (float)($size/$point) * $correctCount; //tổng điểm
            $customs->level = $level;
            $customs->id_exams = $exam_id;
            $customs->finished  = now()->setTimezone('Asia/Ho_Chi_Minh');  
            $customs->limit_number = $countLimit;
            $customs->save();

            // Trả về JSON kết quả
            return response()->json([
                'time' => $timeBeign,
                'point' => $point,
                'size' => $size,
                'correct_count' => $correctCount,
                'wrong_answers' => $wrongAnswers
            ]);
        }
    }

    /**submitQuizToeic */
    function submitQuizElderly(Request $request){
        if($request->ajax()){
            $timeBeign = now()->setTimezone('Asia/Ho_Chi_Minh')->format('l, j F Y, g:i A');
            $exam_id = $request->exam_id;
            $customsId = $request->customsId;

            $getExamById = DB::table('exams')->where('id','=',$exam_id)->first();
            $point = $getExamById->point;
            $level = $getExamById->type;
        
            //get id exam_id theo customs để kiểm tra số lần làm bài kiểm tra
            $checkCustomExam = DB::table('customs')->where('id_exams', $exam_id)->get();
            $countLimit = count($checkCustomExam);

            // Lấy danh sách câu hỏi và đáp án đúng từ DB (dạng [id => answer_correct])
            $questions = DB::table('questions')
                ->where('exam_id', $exam_id)
                ->pluck('answer_correct', 'id');

            //tổng câu hỏi
            $size = count($questions);
            // Chuyển số thành chữ cái đáp án
            $answer_map = [
                1 => 'A',
                2 => 'B',
                3 => 'C',
                4 => 'D'
            ];
            
            // Lấy danh sách câu trả lời từ request
            $questionIds_raw = empty($request->questionIds) ? []: $request->questionIds; // [0 => "1-B",1 => "2-B",...]

            $questionIds = [];
            foreach ($questionIds_raw as $item) {
                $parts = explode('-', $item); // Tách "1-B" thành ['1', 'B']
                if (count($parts) === 2) {
                    $questionIds[(int)$parts[0]] = trim($parts[1]); // kết quả khi tách là [1 => 'B',...]
                }
            }
        
            // Biến lưu kết quả
            $correctCount = 0; // Số câu trả lời đúng (bắt đầu từ 0)
            $wrongAnswers = []; // Danh sách câu sai
        
            // Lặp qua từng câu trả lời của người dùng
            foreach ($questionIds as $question_id => $user_answer) {
                if (isset($questions[$question_id])) {
                    $correct_answer = $answer_map[$questions[$question_id]]; // Chuyển đổi số sang chữ
                    $user_answer = trim($user_answer); // Đảm bảo không có khoảng trắng dư thừa
        
                    if ($user_answer === $correct_answer) { 
                        $correctCount++; 
                    } else {
                        $wrongAnswers[$question_id] = [
                            'user_answer' => $user_answer, //đáp án từ người chọn
                            'correct_answer' => $correct_answer //đáp án đúng từ db
                        ];
                    }
                }
            }

           //update table customs
            $customs =Customs::findOrFail($customsId);
            $customs->correct_answer =  $correctCount;
            $customs->total_question  = $size;
            $customs->total_score = (float)($size/$point) * $correctCount; //tổng điểm
            $customs->level = $level;
            $customs->id_exams = $exam_id;
            $customs->finished  = now()->setTimezone('Asia/Ho_Chi_Minh');  
            $customs->limit_number = $countLimit;
            $customs->save();

            // Trả về JSON kết quả
            return response()->json([
                'time' => $timeBeign,
                'point' => $point,
                'size' => $size,
                'correct_count' => $correctCount,
                'wrong_answers' => $wrongAnswers
            ]);
        }
    }

    /**submitQuizToeic */
    function submitQuizTeen(Request $request){

    }
}
