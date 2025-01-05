<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Answer;

class AnswerSeeder extends Seeder
{
    public function run()
    {
        $answers = [
            // Answers for Question 1
            ['question_id' => 1, 'content' => '3', 'is_correct' => false],
            ['question_id' => 1, 'content' => '4', 'is_correct' => true],
            ['question_id' => 1, 'content' => '5', 'is_correct' => false],
            // Answers for Question 2
            ['question_id' => 2, 'content' => 'London', 'is_correct' => false],
            ['question_id' => 2, 'content' => 'Paris', 'is_correct' => true],
            ['question_id' => 2, 'content' => 'Berlin', 'is_correct' => false],
            // Answers for Question 3
            ['question_id' => 3, 'content' => 'Earth', 'is_correct' => false],
            ['question_id' => 3, 'content' => 'Mars', 'is_correct' => false],
            ['question_id' => 3, 'content' => 'Jupiter', 'is_correct' => true],
        ];

        Answer::insert($answers);
    }
}
